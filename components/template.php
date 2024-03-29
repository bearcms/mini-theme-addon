<?php
/*
 * Mini Theme addon for Bear CMS
 * https://github.com/bearcms/mini-theme-addon
 * Copyright (c) Amplilabs Ltd.
 * Free to use under the MIT license.
 */

use BearFramework\App;

$app = App::get();

$settings = $app->bearCMS->data->settings->get();

$elementsLanguageSuffix = '';
$homePath = '/';
if (isset($languages[0]) && $languages[0] !== $language) {
    $elementsLanguageSuffix = '-' . $language;
    $homePath = '/' . $language . '/';
}

$isHomePage = (string) $app->request->path === $homePath;

$headerLogoImage = (string)$customizations->getValue('headerLogoImage');
$homePageSpecialContentBlockVisibility = (int)$customizations->getValue('homePageSpecialContentBlockVisibility');
$footerVisibility = (int)$customizations->getValue('footerVisibility');

echo '<html>';
echo '<head>';
echo '<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,minimal-ui">';
echo '<style>';
echo 'html,body{padding:0;margin:0;min-height:100%;}*{outline:none;-webkit-tap-highlight-color:rgba(0,0,0,0);}';
echo '</style>';
echo '</head>';
echo '<body class="template-body">';

echo '<div class="template-header-container">';
echo '<header class="template-header" style="display:flex;flex-direction:row;">';

echo '<div style="max-width:calc(100% - 100px);"><div class="template-header-logo-container">';
if (isset($headerLogoImage[0])) {
    $headerLogoImageDetails = $customizations->getAssetDetails($headerLogoImage, ['filename', 'width', 'height']);
    echo '<component src="bearcms-image-element" class="template-header-logo-image" onClick="' . ($isHomePage ? 'none' : 'openUrl') . '" url="' . htmlentities($app->urls->get($homePath)) . '" filename="' . htmlentities((string)$headerLogoImageDetails['filename']) . '" fileWidth="' . htmlentities((string)$headerLogoImageDetails['width']) . '" fileHeight="' . htmlentities((string)$headerLogoImageDetails['height']) . '"/>';
} else {
    $tagName = $isHomePage ? 'span' : 'a';
    echo '<' . $tagName . ' class="template-header-logo-text"' . ($isHomePage ? '' : ' href="' . htmlentities($app->urls->get($homePath)) . '"') . '>' . htmlspecialchars($settings->getTitle((string) $language)) . '</' . $tagName . '>';
}
echo '</div></div>';

echo '<div style="min-width:100px;"><div class="template-navigation-container">';
echo '<nav class="template-navigation">';
echo '<component src="bearcms-navigation-element" editable="true" id="main-navigation' . $elementsLanguageSuffix . '" source="allPages" menuType="horizontal-down" class="template-navigation-content" selectedPath="' . (string) $app->request->path . '" allowSearchButtonOption="true" allowStoreCartButtonOption="true"/></div>';
echo '</nav>';
echo '</div></div>';

echo '</header>';
echo '</div>';

if ($isHomePage && $homePageSpecialContentBlockVisibility) {
    echo '<div class="template-homepage-special-content-block-container">';
    echo '<section class="template-homepage-special-content-block">';
    echo '<component src="bearcms-elements" editable="true" class="homepage-special-bearcms-elements" id="homepage-special' . $elementsLanguageSuffix . '"/>';
    echo '</section>';
    echo '</div>';
}

echo '<div class="template-content-container">';
echo '<section class="template-content">';
echo '{{body}}';
echo '</section>';
echo '</div>';

if ($footerVisibility) {
    echo '<div class="template-footer-container">';
    echo '<footer class="template-footer">';
    echo '<component src="bearcms-elements" editable="true" class="footer-bearcms-elements" id="footer' . $elementsLanguageSuffix . '"/>';
    echo '</footer>';
    echo '</div>';
}

echo '</body>';
echo '</html>';
