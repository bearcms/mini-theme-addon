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
    ->register('bearcms/mini', function (\BearCMS\Themes\Theme $theme) use ($app) {
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

        $theme->version = '1.8';

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
