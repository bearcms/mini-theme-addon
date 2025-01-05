<?php

/*
 * Mini Theme addon for Bear CMS
 * https://github.com/bearcms/mini-theme-addon
 * Copyright (c) Amplilabs Ltd.
 * Free to use under the MIT license.
 */

use BearFramework\App;

$app = App::get();

$app->bearCMS->themes
    ->register('bearcms/mini', function (\BearCMS\Themes\Theme $theme) use ($app): void {
        $context = $app->contexts->get(__DIR__);

        $app->localization
            ->addDictionary('en', function () use ($context) {
                return include $context->dir . '/locales/en.php';
            })
            ->addDictionary('bg', function () use ($context) {
                return include $context->dir . '/locales/bg.php';
            });

        $context->assets
            ->addDir('assets')
            ->addDir('values/files');

        $theme->version = '1.9';

        $theme->get = function (\BearCMS\Themes\Theme\Customizations $customizations, array $cntx) use ($app, $context) {
            $language = isset($cntx['language']) ? $cntx['language'] : null;
            $languages = isset($cntx['languages']) ? $cntx['languages'] : [];
            $templateFilename = $context->dir . '/components/template.php';
            $template = (static function ($__filename, $customizations, $language, $languages) { // $customizations is used inside
                ob_start();
                include $__filename;
                return ob_get_clean();
            })($templateFilename, $customizations, $language, $languages);
            if ($app->bearCMS->hasEventListeners('internalBearCMSMiniThemeGet')) {
                $eventDetails = new stdClass();
                $eventDetails->template = $template;
                $app->bearCMS->dispatchEvent('internalBearCMSMiniThemeGet', $eventDetails);
                $template = $eventDetails->template;
            }
            return $template;
        };

        $theme->manifest = function () use ($app, $context, $theme) {
            $manifest = $theme->makeManifest();
            $manifest->name = __('bearcms.themes.mini.name');
            $manifest->description = __('bearcms.themes.mini.description');
            $manifest->author = [
                'name' => 'BearCMS Team',
                'url' => 'https://bearcms.com/addons/',
                'email' => 'addons@bearcms.com',
            ];
            $manifest->media = [
                [
                    'filename' => $context->dir . '/assets/1.jpg',
                    'width' => 1416,
                    'height' => 1062,
                ]
            ];
            if ($app->bearCMS->hasEventListeners('internalBearCMSMiniThemeManifest')) {
                $eventDetails = new stdClass();
                $eventDetails->manifest = $manifest;
                $app->bearCMS->dispatchEvent('internalBearCMSMiniThemeManifest', $eventDetails);
                $manifest = $eventDetails->manifest;
            }
            return $manifest;
        };

        $updateValues = function (?array $values = null) {
            // Get old assets from the CMS server
            $oldAssets = array(
                'addon:bearcms/mini-theme-addon:assets/s9/b.jpg' => 'addon:bearcms/bearframework-addon:assets/s/otsa/t/mini/assets/s9/b.jpg',
                'addon:bearcms/mini-theme-addon:assets/s9/m.png' => 'addon:bearcms/bearframework-addon:assets/s/otsa/t/mini/assets/s9/m.png',
                'addon:bearcms/mini-theme-addon:assets/s9/mc.svg' => 'addon:bearcms/bearframework-addon:assets/s/otsa/t/mini/assets/s9/mc.svg',
                'addon:bearcms/mini-theme-addon:assets/s9/ms.svg' => 'addon:bearcms/bearframework-addon:assets/s/otsa/t/mini/assets/s9/ms.svg',
                'addon:bearcms/mini-theme-addon:assets/s9/s.png' => 'addon:bearcms/bearframework-addon:assets/s/otsa/t/mini/assets/s9/s.png',
                'addon:bearcms/mini-theme-addon:assets/s8/m.png' => 'addon:bearcms/bearframework-addon:assets/s/otsa/t/mini/assets/s8/m.png',
                'addon:bearcms/mini-theme-addon:assets/s8/mc.svg' => 'addon:bearcms/bearframework-addon:assets/s/otsa/t/mini/assets/s8/mc.svg',
                'addon:bearcms/mini-theme-addon:assets/s8/ms.svg' => 'addon:bearcms/bearframework-addon:assets/s/otsa/t/mini/assets/s8/ms.svg',
                'addon:bearcms/mini-theme-addon:assets/s8/s.png' => 'addon:bearcms/bearframework-addon:assets/s/otsa/t/mini/assets/s8/s.png',
                'addon:bearcms/mini-theme-addon:assets/s7/m.png' => 'addon:bearcms/bearframework-addon:assets/s/otsa/t/mini/assets/s7/m.png',
                'addon:bearcms/mini-theme-addon:assets/s7/mc.svg' => 'addon:bearcms/bearframework-addon:assets/s/otsa/t/mini/assets/s7/mc.svg',
                'addon:bearcms/mini-theme-addon:assets/s7/ms.svg' => 'addon:bearcms/bearframework-addon:assets/s/otsa/t/mini/assets/s7/ms.svg',
                'addon:bearcms/mini-theme-addon:assets/s7/s.png' => 'addon:bearcms/bearframework-addon:assets/s/otsa/t/mini/assets/s7/s.png',
                'addon:bearcms/mini-theme-addon:assets/s6/m.png' => 'addon:bearcms/bearframework-addon:assets/s/otsa/t/mini/assets/s6/m.png',
                'addon:bearcms/mini-theme-addon:assets/s6/mc.svg' => 'addon:bearcms/bearframework-addon:assets/s/otsa/t/mini/assets/s6/mc.svg',
                'addon:bearcms/mini-theme-addon:assets/s6/ms.svg' => 'addon:bearcms/bearframework-addon:assets/s/otsa/t/mini/assets/s6/ms.svg',
                'addon:bearcms/mini-theme-addon:assets/s6/s.png' => 'addon:bearcms/bearframework-addon:assets/s/otsa/t/mini/assets/s6/s.png',
                'addon:bearcms/mini-theme-addon:assets/s5/h.png' => 'addon:bearcms/bearframework-addon:assets/s/otsa/t/mini/assets/s5/h.png',
                'addon:bearcms/mini-theme-addon:assets/s5/m.png' => 'addon:bearcms/bearframework-addon:assets/s/otsa/t/mini/assets/s5/m.png',
                'addon:bearcms/mini-theme-addon:assets/s5/mc.svg' => 'addon:bearcms/bearframework-addon:assets/s/otsa/t/mini/assets/s5/mc.svg',
                'addon:bearcms/mini-theme-addon:assets/s5/ms.svg' => 'addon:bearcms/bearframework-addon:assets/s/otsa/t/mini/assets/s5/ms.svg',
                'addon:bearcms/mini-theme-addon:assets/s5/s.png' => 'addon:bearcms/bearframework-addon:assets/s/otsa/t/mini/assets/s5/s.png',
                'addon:bearcms/mini-theme-addon:assets/s4/m.png' => 'addon:bearcms/bearframework-addon:assets/s/otsa/t/mini/assets/s4/m.png',
                'addon:bearcms/mini-theme-addon:assets/s4/mc.svg' => 'addon:bearcms/bearframework-addon:assets/s/otsa/t/mini/assets/s4/mc.svg',
                'addon:bearcms/mini-theme-addon:assets/s4/ms.svg' => 'addon:bearcms/bearframework-addon:assets/s/otsa/t/mini/assets/s4/ms.svg',
                'addon:bearcms/mini-theme-addon:assets/s4/s.png' => 'addon:bearcms/bearframework-addon:assets/s/otsa/t/mini/assets/s4/s.png',
                'addon:bearcms/mini-theme-addon:assets/s3/m.png' => 'addon:bearcms/bearframework-addon:assets/s/otsa/t/mini/assets/s3/m.png',
                'addon:bearcms/mini-theme-addon:assets/s3/mc.svg' => 'addon:bearcms/bearframework-addon:assets/s/otsa/t/mini/assets/s3/mc.svg',
                'addon:bearcms/mini-theme-addon:assets/s3/ms.svg' => 'addon:bearcms/bearframework-addon:assets/s/otsa/t/mini/assets/s3/ms.svg',
                'addon:bearcms/mini-theme-addon:assets/s3/s.png' => 'addon:bearcms/bearframework-addon:assets/s/otsa/t/mini/assets/s3/s.png',
                'addon:bearcms/mini-theme-addon:assets/s2/m.png' => 'addon:bearcms/bearframework-addon:assets/s/otsa/t/mini/assets/s2/m.png',
                'addon:bearcms/mini-theme-addon:assets/s2/mc.svg' => 'addon:bearcms/bearframework-addon:assets/s/otsa/t/mini/assets/s2/mc.svg',
                'addon:bearcms/mini-theme-addon:assets/s2/ms.svg' => 'addon:bearcms/bearframework-addon:assets/s/otsa/t/mini/assets/s2/ms.svg',
                'addon:bearcms/mini-theme-addon:assets/s2/s.png' => 'addon:bearcms/bearframework-addon:assets/s/otsa/t/mini/assets/s2/s.png',
                'addon:bearcms/mini-theme-addon:assets/s1/b1.png' => 'addon:bearcms/bearframework-addon:assets/s/otsa/t/mini/assets/s1/b1.png',
                'addon:bearcms/mini-theme-addon:assets/s1/b2.png' => 'addon:bearcms/bearframework-addon:assets/s/otsa/t/mini/assets/s1/b2.png',
                'addon:bearcms/mini-theme-addon:assets/s1/m.png' => 'addon:bearcms/bearframework-addon:assets/s/otsa/t/mini/assets/s1/m.png',
                'addon:bearcms/mini-theme-addon:assets/s1/mc.svg' => 'addon:bearcms/bearframework-addon:assets/s/otsa/t/mini/assets/s1/mc.svg',
                'addon:bearcms/mini-theme-addon:assets/s1/ms.svg' => 'addon:bearcms/bearframework-addon:assets/s/otsa/t/mini/assets/s1/ms.svg',
                'addon:bearcms/mini-theme-addon:assets/s1/s.png' => 'addon:bearcms/bearframework-addon:assets/s/otsa/t/mini/assets/s1/s.png',
                'addon:bearcms/mini-theme-addon:assets/checkbox-icon-111.svg' => 'addon:bearcms/bearframework-addon:assets/s/otsa/t/mini/assets/checkbox-icon-111.svg',
                'addon:bearcms/mini-theme-addon:assets/checkbox-icon-fff.svg' => 'addon:bearcms/bearframework-addon:assets/s/otsa/t/mini/assets/checkbox-icon-fff.svg',
                'addon:bearcms/mini-theme-addon:assets/radio-icon-111.svg' => 'addon:bearcms/bearframework-addon:assets/s/otsa/t/mini/assets/radio-icon-111.svg',
                'addon:bearcms/mini-theme-addon:assets/radio-icon-fff.svg' => 'addon:bearcms/bearframework-addon:assets/s/otsa/t/mini/assets/radio-icon-fff.svg',
                'addon:internal/cms:themes/bearcms-mini/assets/s9/1.png' => 'addon:bearcms/bearframework-addon:assets/s/otsa/c/mini/assets/s9/1.png',
                'addon:internal/cms:themes/bearcms-mini/assets/s8/1.png' => 'addon:bearcms/bearframework-addon:assets/s/otsa/c/mini/assets/s8/1.png',
                'addon:internal/cms:themes/bearcms-mini/assets/s7/1.png' => 'addon:bearcms/bearframework-addon:assets/s/otsa/c/mini/assets/s7/1.png',
                'addon:internal/cms:themes/bearcms-mini/assets/s6/1.png' => 'addon:bearcms/bearframework-addon:assets/s/otsa/c/mini/assets/s6/1.png',
                'addon:internal/cms:themes/bearcms-mini/assets/s5/1.png' => 'addon:bearcms/bearframework-addon:assets/s/otsa/c/mini/assets/s5/1.png',
                'addon:internal/cms:themes/bearcms-mini/assets/s4/1.png' => 'addon:bearcms/bearframework-addon:assets/s/otsa/c/mini/assets/s4/1.png',
                'addon:internal/cms:themes/bearcms-mini/assets/s3/1.png' => 'addon:bearcms/bearframework-addon:assets/s/otsa/c/mini/assets/s3/1.png',
                'addon:internal/cms:themes/bearcms-mini/assets/s2/1.png' => 'addon:bearcms/bearframework-addon:assets/s/otsa/c/mini/assets/s2/1.png',
                'addon:internal/cms:themes/bearcms-mini/assets/s1/1.png' => 'addon:bearcms/bearframework-addon:assets/s/otsa/c/mini/assets/s1/1.png',
            );
            $valuesJSON = json_encode($values, true);
            if (strpos($valuesJSON, ':') !== false) {
                foreach ($oldAssets as $oldKey => $newKey) {
                    $search[] = 'url(' . $oldKey . ')';
                    $replace[] = 'url(' . $newKey . ')';
                    $search[] = trim(json_encode('url(' . $oldKey . ')', JSON_THROW_ON_ERROR), '"');
                    $replace[] = trim(json_encode('url(' . $newKey . ')', JSON_THROW_ON_ERROR), '"');
                    $search[] = trim(json_encode(trim(json_encode('url(' . $oldKey . ')', JSON_THROW_ON_ERROR), '"'), JSON_THROW_ON_ERROR), '"');
                    $replace[] = trim(json_encode(trim(json_encode('url(' . $newKey . ')', JSON_THROW_ON_ERROR), '"'), JSON_THROW_ON_ERROR), '"');
                }
                $valuesJSON = str_replace($search, $replace, $valuesJSON);
                $values = json_decode($valuesJSON, true);
            }
            return $values;
        };

        $theme->updateValues = $updateValues;

        $theme->options = function () use ($app, $context, $theme) {
            $options = $theme->makeOptions(); // used inside
            require $context->dir . '/options.php';
            $values = json_decode(file_get_contents($context->dir . '/values/values.json'), true);
            $options->setValues($values, true);
            if ($app->bearCMS->hasEventListeners('internalBearCMSMiniThemeOptions')) {
                $eventDetails = new stdClass();
                $eventDetails->options = $options;
                $app->bearCMS->dispatchEvent('internalBearCMSMiniThemeOptions', $eventDetails);
                $options = $eventDetails->options;
            }
            return $options;
        };

        if ($app->bearCMS->hasEventListeners('internalBearCMSMiniThemeRegister')) {
            $eventDetails = new stdClass();
            $eventDetails->theme = $theme;
            $app->bearCMS->dispatchEvent('internalBearCMSMiniThemeRegister', $eventDetails);
            $theme = $eventDetails->theme;
        }
    });
