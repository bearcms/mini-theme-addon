<?php

/*
 * Mini Theme addon for Bear CMS
 * https://github.com/bearcms/mini-theme-addon
 * Copyright (c) Amplilabs Ltd.
 * Free to use under the MIT license.
 */

use BearFramework\App;

$app = App::get();

$headerGroup = $options->addGroup(__("bearcms.themes.mini.options.Header"));
$headerGroup->addOption("headerCSS", "css", "", [
    "cssTypes" => ["cssPadding", "cssMargin", "cssBorder", "cssRadius", "cssShadow", "cssBackground", "cssSize"],
    "cssOutput" => [
        ["rule", ".template-header", "box-sizing:border-box;display:flex;max-width:100%;justify-content:space-between;"],
        ["selector", ".template-header"]
    ]
]);

$headerLogoGroup = $headerGroup->addGroup(__("bearcms.themes.mini.options.Logo"));
$headerLogoImageGroup = $headerLogoGroup->addGroup(__("bearcms.themes.mini.options.Image"));
$headerLogoImageGroup
    ->addOption("headerLogoImage", "image", __("bearcms.themes.mini.options.Image"))
    ->addOption("headerLogoImageCSS", "css", "", [
        "cssTypes" => ["cssMargin", "cssBorder", "cssRadius", "cssShadow", "cssSize"],
        "cssOutput" => [
            ["rule", ".template-header-logo-image", "box-sizing:border-box;overflow:hidden;font-size:0;"],
            ["selector", ".template-header-logo-image"]
        ]
    ]);
$headerLogoTextGroup = $headerLogoGroup->addGroup(__("bearcms.themes.mini.options.Text"));
$headerLogoTextGroup
    ->addOption("headerLogoTextCSS", "css", "", [
        "cssOutput" => [
            ["rule", ".template-header-logo-text", "box-sizing:border-box;display:inline-block;text-decoration:none;overflow:hidden;text-overflow:ellipsis;white-space:nowrap;max-width:100%;"],
            ["selector", ".template-header-logo-text"]
        ]
    ]);
$headerLogoContainerGroup = $headerLogoGroup->addGroup(__("bearcms.themes.mini.options.Container"));
$headerLogoContainerGroup
    ->addOption("headerLogoContainerCSS", "css", "", [
        "cssTypes" => ["cssPadding", "cssMargin", "cssBorder", "cssRadius", "cssShadow", "cssBackground", "cssSize"],
        "cssOutput" => [
            ["rule", ".template-header-logo-container", "box-sizing:border-box;max-width:100%;"],
            ["selector", ".template-header-logo-container"]
        ]
    ]);

$navigationGroup = $headerGroup->addGroup(__("bearcms.themes.mini.options.Navigation"));
$navigationGroup
    ->addOption("navigationCSS", "css", "", [
        "cssTypes" => ["cssPadding", "cssMargin", "cssBorder", "cssRadius", "cssShadow", "cssBackground", "cssSize", "cssTextAlign"],
        "cssOutput" => [
            ["rule", ".template-navigation", "box-sizing:border-box;font-size:0;line-height:0;display:inline-block;max-width:100%;"],
            ["rule", ".template-navigation ul", "list-style-type:none;list-style-position:outside;margin:0;padding:0;z-index:10;"],
            ["rule", ".template-navigation li", "list-style-type:none;list-style-position:outside;"],
            ["selector", ".template-navigation"]
        ]
    ]);

$navigationItemGroup = $navigationGroup->addGroup(__("bearcms.themes.mini.options.Item"));
$navigationItemGroup
    ->addOption("navigationItemCSS", "css", "", [
        "cssTypes" => ["cssPadding", "cssText", "cssTextShadow", "cssBorder", "cssRadius", "cssShadow", "cssBackground", "cssSize"],
        "cssOutput" => [
            ["rule", ".template-navigation .template-navigation-content > .bearcms-navigation-element-item", "box-sizing:border-box;display:inline-block;max-width:100%;"],
            ["rule", ".template-navigation .template-navigation-content > .bearcms-navigation-element-item > a", "box-sizing:border-box;display:block;white-space:nowrap;text-overflow:ellipsis;overflow:hidden;"], //width:100%;height:100%;font-family:inherit;color:inherit;font-size:inherit;font-weight:inherit;font-style:inherit;text-decoration:inherit;text-align:inherit;line-height:inherit;letter-spacing:inherit;text-shadow:inherit;
            ["selector", ".template-navigation .template-navigation-content > .bearcms-navigation-element-item > a"]
        ]
    ]);
$navigationItemMoreItemGroup = $navigationItemGroup->addGroup(__("bearcms.themes.mini.options.MoreItem"));
$navigationItemMoreItemGroup
    ->addOption("navigationMoreItemCSS", "css", "", [
        "cssTypes" => ["cssPadding", "cssText", "cssTextShadow", "cssBorder", "cssRadius", "cssShadow", "cssBackground", "cssSize"],
        "cssOutput" => [
            ["rule", ".template-navigation .bearcms-navigation-element-item-more > a", "cursor:pointer;"],
            ["selector", ".template-navigation .bearcms-navigation-element-item-more > a"]
        ]
    ]);
$navigationItemSelectedGroup = $navigationItemGroup->addGroup(__("bearcms.themes.mini.options.Selected"));
$navigationItemSelectedGroup
    ->addOption("navigationSelectedItemCSS", "css", "", [
        "cssTypes" => ["cssPadding", "cssText", "cssTextShadow", "cssBorder", "cssRadius", "cssShadow", "cssBackground", "cssSize"],
        "cssOutput" => [
            ["rule", ".template-navigation .template-navigation-content > .bearcms-navigation-element-item-selected > a", "box-sizing:border-box;"],
            ["selector", ".template-navigation .template-navigation-content > .bearcms-navigation-element-item-selected > a"]
        ]
    ]);
$navigationItemSubitemGroup = $navigationItemGroup->addGroup(__("bearcms.themes.mini.options.Subitem"));
$navigationItemSubitemGroup
    ->addOption("navigationSubitemCSS", "css", "", [
        "cssTypes" => ["cssPadding", "cssText", "cssTextShadow", "cssBorder", "cssRadius", "cssShadow", "cssBackground", "cssSize"],
        "cssOutput" => [
            ["rule", ".template-navigation .template-navigation-content .bearcms-navigation-element-item-children > .bearcms-navigation-element-item", "display:block;"],
            ["rule", ".template-navigation .template-navigation-content .bearcms-navigation-element-item-children > .bearcms-navigation-element-item > a", "box-sizing:border-box;display:block;white-space:nowrap;text-overflow:ellipsis;overflow:hidden;"], //width:100%;height:100%;font-family:inherit;color:inherit;font-size:inherit;font-weight:inherit;font-style:inherit;text-decoration:inherit;text-align:inherit;line-height:inherit;letter-spacing:inherit;text-shadow:inherit;
            ["selector", ".template-navigation .template-navigation-content .bearcms-navigation-element-item-children > .bearcms-navigation-element-item > a"]
        ]
    ]);
$navigationItemFirstSubitemGroup = $navigationItemGroup->addGroup(__("bearcms.themes.mini.options.FirstSubitem"));
$navigationItemFirstSubitemGroup
    ->addOption("navigationFirstSubitemCSS", "css", "", [
        "cssTypes" => ["cssPadding", "cssText", "cssTextShadow", "cssBorder", "cssRadius", "cssShadow", "cssBackground", "cssSize"],
        "cssOutput" => [
            ["selector", ".template-navigation .template-navigation-content .bearcms-navigation-element-item-children > .bearcms-navigation-element-item:first-child > a"]
        ]
    ]);
$navigationItemLastSubitemGroup = $navigationItemGroup->addGroup(__("bearcms.themes.mini.options.LastSubitem"));
$navigationItemLastSubitemGroup
    ->addOption("navigationLastSubitemCSS", "css", "", [
        "cssTypes" => ["cssPadding", "cssText", "cssTextShadow", "cssBorder", "cssRadius", "cssShadow", "cssBackground", "cssSize"],
        "cssOutput" => [
            ["selector", ".template-navigation .template-navigation-content .bearcms-navigation-element-item-children > .bearcms-navigation-element-item:last-child > a"]
        ]
    ]);
$navigationItemSubitemSelectedGroup = $navigationItemSubitemGroup->addGroup(__("bearcms.themes.mini.options.Selected"));
$navigationItemSubitemSelectedGroup
    ->addOption("navigationSelectedSubitemCSS", "css", "", [
        "cssTypes" => ["cssPadding", "cssText", "cssTextShadow", "cssBorder", "cssRadius", "cssShadow", "cssBackground", "cssSize"],
        "cssOutput" => [
            ["rule", ".template-navigation .template-navigation-content .bearcms-navigation-element-item-children > .bearcms-navigation-element-item-selected > a", "box-sizing:border-box;"],
            ["selector", ".template-navigation .template-navigation-content .bearcms-navigation-element-item-children > .bearcms-navigation-element-item-selected > a"]
        ]
    ]);
$navigationItemSubitemsContainerGroup = $navigationItemGroup->addGroup(__("bearcms.themes.mini.options.Container"));
$navigationItemSubitemsContainerGroup
    ->addOption("navigationSubitemsContainerCSS", "css", "", [
        "cssTypes" => ["cssPadding", "cssText", "cssTextShadow", "cssBorder", "cssRadius", "cssShadow", "cssBackground", "cssSize"],
        "cssOutput" => [
            ["selector", ".template-navigation .template-navigation-content .bearcms-navigation-element-item-children"]
        ]
    ]);
$navigationContainerGroup = $navigationGroup->addGroup(__("bearcms.themes.mini.options.Container"));
$navigationContainerGroup
    ->addOption("navigationContainerCSS", "css", "", [
        "cssTypes" => ["cssPadding", "cssMargin", "cssBorder", "cssRadius", "cssShadow", "cssBackground", "cssSize"],
        "cssOutput" => [
            ["rule", ".template-navigation-container", "box-sizing:border-box;max-width:100%;text-align:right;"],
            ["selector", ".template-navigation-container"]
        ]
    ]);

$headerContainerGroup = $headerGroup->addGroup(__("bearcms.themes.mini.options.Container"));
$headerContainerGroup
    ->addOption("headerContainerCSS", "css", "", [
        "cssTypes" => ["cssPadding", "cssMargin", "cssBorder", "cssRadius", "cssShadow", "cssBackground", "cssSize"],
        "cssOutput" => [
            ["rule", ".template-header-container", "box-sizing:border-box;"],
            ["selector", ".template-header-container"]
        ]
    ]);

$homePageSpecialBlockGroup = $options->addGroup(__("bearcms.themes.mini.options.Intro"));
$homePageSpecialBlockGroup
    ->addOption("homePageSpecialContentBlockVisibility", "list", __("bearcms.themes.mini.options.Visibility"), [
        "values" => [
            [
                "value" => "1",
                "name" => __("bearcms.themes.mini.options.Visible")
            ],
            [
                "value" => "0",
                "name" => __("bearcms.themes.mini.options.Hidden")
            ]
        ]
    ])
    ->addOption("homePageSpecialContentBlockCSS", "css", "", [
        "cssTypes" => ["cssPadding", "cssMargin", "cssBorder", "cssRadius", "cssShadow", "cssBackground", "cssSize"],
        "cssOutput" => [
            ["rule", ".template-homepage-special-content-block", "box-sizing:border-box;"],
            ["selector", ".template-homepage-special-content-block"]
        ]
    ]);
$homePageSpecialBlockElementsGroup = $homePageSpecialBlockGroup->addGroup(__("bearcms.themes.mini.options.Elements"));
$homePageSpecialBlockElementsGroup
    ->addElements('homePageSpecialContentBlockElements', '.template-homepage-special-content-block');

$homePageSpecialBlockContainerGroup = $homePageSpecialBlockGroup->addGroup(__("bearcms.themes.mini.options.Container"));
$homePageSpecialBlockContainerGroup
    ->addOption("homePageSpecialContentBlockContainerCSS", "css", "", [
        "cssTypes" => ["cssPadding", "cssMargin", "cssBorder", "cssRadius", "cssShadow", "cssBackground", "cssSize"],
        "cssOutput" => [
            ["rule", ".template-homepage-special-content-block-container", "box-sizing:border-box;"],
            ["selector", ".template-homepage-special-content-block-container"]
        ]
    ]);

$contentGroup = $options->addGroup(__("bearcms.themes.mini.options.Content"));
$contentGroup
    ->addOption("contentCSS", "css", "", [
        "cssTypes" => ["cssPadding", "cssMargin", "cssBorder", "cssRadius", "cssShadow", "cssBackground", "cssSize"],
        "cssOutput" => [
            ["rule", ".template-content", "box-sizing:border-box;"],
            ["selector", ".template-content"]
        ]
    ]);

$contentElementsGroup = $contentGroup->addGroup(__("bearcms.themes.mini.options.Elements"));
$contentElementsGroup
    ->addElements('contentElements', '.template-content');
$contentElementsContainerGroup = $contentGroup->addGroup(__("bearcms.themes.mini.options.Container"));
$contentElementsContainerGroup
    ->addOption("contentContainerCSS", "css", "", [
        "cssTypes" => ["cssPadding", "cssMargin", "cssBorder", "cssRadius", "cssShadow", "cssBackground", "cssSize"],
        "cssOutput" => [
            ["rule", ".template-content-container", "box-sizing:border-box;"],
            ["selector", ".template-content-container"]
        ]
    ]);

$footerGroup = $options->addGroup(__("bearcms.themes.mini.options.Footer"));
$footerGroup
    ->addOption("footerVisibility", "list", __("bearcms.themes.mini.options.Visibility"), [
        "values" => [
            [
                "value" => "1",
                "name" => __("bearcms.themes.mini.options.Visible")
            ],
            [
                "value" => "0",
                "name" => __("bearcms.themes.mini.options.Hidden")
            ]
        ]
    ])
    ->addOption("footerCSS", "css", "", [
        "cssTypes" => ["cssPadding", "cssMargin", "cssBorder", "cssRadius", "cssShadow", "cssBackground", "cssSize"],
        "cssOutput" => [
            ["rule", ".template-footer", "box-sizing:border-box;"],
            ["selector", ".template-footer"]
        ]
    ]);

$footerElementsGroup = $footerGroup->addGroup(__("bearcms.themes.mini.options.Elements"));
$footerElementsGroup
    ->addElements('footerElements', '.template-footer');

$footerContainerGroup = $footerGroup->addGroup(__("bearcms.themes.mini.options.Container"));
$footerContainerGroup
    ->addOption("footerContainerCSS", "css", "", [
        "cssTypes" => ["cssPadding", "cssMargin", "cssBorder", "cssRadius", "cssShadow", "cssBackground", "cssSize"],
        "cssOutput" => [
            ["rule", ".template-footer-container", "box-sizing:border-box;"],
            ["selector", ".template-footer-container"]
        ]
    ]);

$windowGroup = $options->addGroup(__("bearcms.themes.mini.options.Window"));
$windowGroup
    ->addOption("bodyCSS", "css", "", [
        "cssTypes" => ["cssPadding", "cssBorder", "cssRadius", "cssShadow", "cssBackground"],
        "cssOutput" => [
            ["selector", ".template-body"]
        ]
    ]);

$pagesGroup = $options->addGroup(__('bearcms.themes.mini.options.Pages'));
$pagesGroup
    ->addPages();
