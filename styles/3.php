<?php

/*
 * Mini Theme addon for Bear CMS
 * https://github.com/bearcms/mini-theme-addon
 * Copyright (c) Amplilabs Ltd.
 * Free to use under the MIT license.
 */

$h1 = '"color":"#ffffff","font-weight":"bold","font-family":"googlefonts:Merriweather","font-size":"22px","line-height":"150%"';
$h2 = '"color":"#ffffff","font-weight":"bold","font-family":"googlefonts:Merriweather","font-size":"18px","line-height":"150%"';
$h3 = '"color":"#ffffff","font-weight":"bold","font-family":"googlefonts:Merriweather","font-size":"14px","line-height":"150%"';
$text = '"color":"#ffffff","font-family":"Arial","font-size":"14px","line-height":"180%"';
$input = '"color":"#ffffff","font-family":"Arial","font-size":"14px","line-height":"42px","background-color":"transparent","padding-left":"15px","padding-right":"15px","width":"100%","border-top":"1px solid #555555","border-bottom":"1px solid #555555","border-left":"1px solid #555555","border-right":"1px solid #555555","border-top-left-radius":"4px","border-top-right-radius":"4px","border-bottom-left-radius":"4px","border-bottom-right-radius":"4px"';
$link = '"color":"#ffffff","font-family":"Arial","font-size":"14px","line-height":"180%","text-decoration":"underline"';
$button = '"color":"#ffffff","font-family":"Arial","font-size":"14px","line-height":"42px","padding-left":"15px","padding-right":"15px","height":"42px","border-top":"1px solid #555555","border-bottom":"1px solid #555555","border-left":"1px solid #555555","border-right":"1px solid #555555","background-color:hover":"#333333","background-color:active":"#444444","border-top-left-radius":"4px","border-top-right-radius":"4px","border-bottom-left-radius":"4px","border-bottom-right-radius":"4px"';
$date = '"color":"#888888","font-family":"Arial","font-size":"12px","line-height":"180%"';
$userImage = '"width":"50px","height":"50px","margin-right":"8px","border-top-left-radius":"4px","border-top-right-radius":"4px","border-bottom-left-radius":"4px","border-bottom-right-radius":"4px"';
$separator = '"background-color":"#555","height":"2px","margin-top":"40px","margin-bottom":"40px"';

$getElementsStyles = function ($prefix) use ($text, $h1, $h2, $h3, $input, $link, $button, $date, $userImage, $separator) {
    return [
        $prefix . 'HeadingLargeCSS' => '{' . $h1 . '}',
        $prefix . 'HeadingMediumCSS' => '{' . $h2 . '}',
        $prefix . 'HeadingSmallCSS' => '{' . $h3 . '}',
        $prefix . 'TextCSS' => '{' . $text . '}',
        $prefix . 'TextLinkCSS' => '{' . $link . '}',
        $prefix . 'LinkCSS' => '{' . $link . '}',
        $prefix . 'NavigationItemLinkCSS' => '{' . $link . '}',
        $prefix . 'CommentsCommentCSS' => '{"margin-bottom":"10px"}',
        $prefix . 'CommentsAuthorNameCSS' => '{' . $text . ',"font-size":"14px"}',
        $prefix . 'CommentsAuthorImageCSS' => '{' . $userImage . '}',
        $prefix . 'CommentsDateCSS' => '{' . $date . '}',
        $prefix . 'CommentsTextCSS' => '{' . $text . ',"font-size":"14px"}',
        $prefix . 'CommentsTextLinksCSS' => '{' . $link . ',"font-size":"14px"}',
        $prefix . 'CommentsTextInputCSS' => '{' . $input . ',"height":"120px","padding-top":"10px","padding-bottom":"10px","line-height":"180%"}',
        $prefix . 'CommentsSendButtonCSS' => '{' . $button . ',"margin-top":"10px"}',
        $prefix . 'CommentsShowMoreButtonCSS' => '{' . $link . ',"margin-bottom":"5px"}',
        $prefix . 'HtmlCSS' => '{' . $text . '}',
        $prefix . 'HtmlLinkCSS' => '{' . $link . '}',
        $prefix . 'BlogPostsPostTitleCSS' => '{' . $link . ',"font-size":"22px"}',
        $prefix . 'BlogPostsPostDateContainerCSS' => '{' . $date . ',"margin-top":"5px"}',
        $prefix . 'BlogPostsPostDateCSS' => '{' . $date . '}',
        $prefix . 'BlogPostsPostContentCSS' => '{"margin-top":"7px"}',
        $prefix . 'BlogPostsShowMoreButtonCSS' => '{' . $link . ',"margin-top":"5px"}',
        $prefix . 'ForumPostsTitleCSS' => '{' . $link . '}',
        $prefix . 'ForumPostsRepliesCountCSS' => '{' . $date . '}',
        $prefix . 'ForumPostsShowMoreButtonCSS' => '{' . $link . '}',
        $prefix . 'ForumPostsNewPostButtonCSS' => '{' . $link . '}',
        $prefix . 'ShareButtonCSS' => '{' . $button . '}',
        $prefix . 'SeparatorLargeCSS' => '{' . $separator . ',"width":"80%"}',
        $prefix . 'SeparatorMediumCSS' => '{' . $separator . ',"width":"60%"}',
        $prefix . 'SeparatorSmallCSS' => '{' . $separator . ',"width":"40%"}',
        $prefix . 'SearchBoxInputCSS' => '{' . $input . '}',
        $prefix . 'SearchBoxButtonCSS' => '{' . $button . ',"width":"42px","height":"100%","background-image":"url(addon:bearcms\/mini-theme-addon:assets\/s3/s.png)","background-position":"center center","background-repeat":"no-repeat","background-attachment":"scroll","background-size":"60% 60%","border-top-left-radius":"0","border-bottom-left-radius":"0"}',
        $prefix . 'StoreItemsItemNameCSS' => '{' . $link . ',"font-size":"22px"}',
        $prefix . 'StoreItemsItemDescriptionCSS' => '{' . $text . '}',
        $prefix . 'StoreItemsItemDescriptionContainerCSS' => '{"padding-top":"5px"}',
        $prefix . 'StoreItemsItemPriceCSS' => '{' . $text . '}',
        $prefix . 'StoreItemsItemPriceOriginalCSS' => '{' . $text . ',"text-decoration":"line-through","font-size":"12px"}',
        $prefix . 'StoreItemsItemPriceContainerCSS' => '{"padding-top":"5px"}',
    ];
};

$result = [
    'headerCSS' => '{"max-width":"800px","margin-left":"auto","margin-right":"auto","padding-right":"15px","padding-bottom":"15px","padding-left":"15px","padding-top":"15px"}',
    'headerLogoImageCSS' => '{"width":"50px"}',
    'headerLogoTextCSS' => '{"font-family":"googlefonts:Merriweather","font-size":"16px","font-weight":"bold","color":"#111111","margin-top":"12px"}',
    'headerLogoContainerCSS' => '{"padding-right":"20px"}',
    'headerContainerCSS' => '{"background-color":"#ffffff"}',
    'navigationCSS' => '',
    'navigationItemCSS' => '{"line-height":"43px","padding-left":"15px","padding-right":"15px","height":"44px","min-width":"44px","color":"#000000","text-decoration":"none","font-family":"Arial","font-size":"13px","text-align":"left","margin-left":"5px","background-color:hover":"#f5f5f5","background-color:active":"#eeeeee","border-top-left-radius":"4px","border-top-right-radius":"4px","border-bottom-left-radius":"4px","border-bottom-right-radius":"4px"}',
    'navigationMoreItemCSS' => '{"background-image":"url(addon:bearcms\/mini-theme-addon:assets\/s3/m.png)","background-position":"center center","background-repeat":"no-repeat","background-attachment":"scroll","background-size":"60% 60%"}',
    'navigationSearchButtonCSS' => '{"background-image":"url(addon:bearcms\/mini-theme-addon:assets\/s3/ms.svg)","background-position":"center center","background-repeat":"no-repeat","background-size":"22px 22px"}',
    'navigationStoreCartButtonCSS' => '{"background-image":"url(addon:bearcms\/mini-theme-addon:assets\/s3/mc.svg)","background-position":"center center","background-repeat":"no-repeat","background-size":"22px 22px"}',
    'navigationSubitemCSS' => '{"line-height":"42px","padding-left":"15px","padding-right":"15px","height":"42px","color":"#000000","text-decoration":"none","font-family":"Arial","font-size":"13px","background-color":"#eeeeee","background-color:hover":"#d5d5d5","background-color:active":"#dddddd","text-align":"left"}',
    'navigationFirstSubitemCSS' => '{"border-top-left-radius":"4px","border-top-right-radius":"4px"}',
    'navigationLastSubitemCSS' => '{"border-bottom-left-radius":"4px","border-bottom-right-radius":"4px"}',
    'navigationSubitemsContainerCSS' => '{"padding-top":"5px","cursor":"default"}',
    'homePageSpecialContentBlockVisibility' => '0',
    'homePageSpecialContentBlockCSS' => '{"background-color":"#222222","max-width":"800px","margin-left":"auto","margin-right":"auto","padding-top":"15px","padding-right":"15px","padding-bottom":"15px","padding-left":"15px","border-top-left-radius":"4px","border-top-right-radius":"4px","border-bottom-left-radius":"4px","border-bottom-right-radius":"4px"}',
    'homePageSpecialContentBlockContainerCSS' => '{"padding-top":"15px","padding-left":"5px","padding-right":"5px"}',
    'contentCSS' => '{"background-color":"#222222","max-width":"800px","margin-left":"auto","margin-right":"auto","padding-top":"15px","padding-right":"15px","padding-bottom":"15px","padding-left":"15px","min-height":"400px","border-top-left-radius":"4px","border-top-right-radius":"4px","border-bottom-left-radius":"4px","border-bottom-right-radius":"4px"}',
    'contentContainerCSS' => '{"padding-top":"15px","padding-left":"5px","padding-right":"5px"}',
    'footerVisibility' => '1',
    'footerCSS' => '{"background-color":"#222222","max-width":"800px","margin-left":"auto","margin-right":"auto","padding-top":"15px","padding-right":"15px","padding-bottom":"15px","padding-left":"15px","border-top-left-radius":"4px","border-top-right-radius":"4px","border-bottom-left-radius":"4px","border-bottom-right-radius":"4px"}',
    'footerContainerCSS' => '{"padding-top":"15px","padding-left":"5px","padding-right":"5px","padding-bottom":"15px"}',
    'bodyCSS' => '{"background-color":"#111111"}',
    'blogPostPageTitleCSS' => '{' . $h1 . '}',
    'blogPostPageDateContainerCSS' => '{"padding-top":"10px"}',
    'blogPostPageDateCSS' => '{' . $date . '}',
    'blogPostPageContentCSS' => '{"padding-top":"15px"}',
    'blogPostPageCommentsTitleContainerCSS' => '{"padding-bottom":"15px"}',
    'blogPostPageRelatedTitleContainerCSS' => '{"padding-bottom":"15px"}',
    'newForumPostPageTitleCSS' => '{' . $h1 . '}',
    'newForumPostPageContentCSS' => '{"padding-top":"15px"}',
    'newForumPostPageTitleLabelCSS' => '{' . $text . '}',
    'newForumPostPageTitleInputCSS' => '{' . $input . '}',
    'newForumPostPageTextLabelCSS' => '{' . $text . ',"margin-top":"10px"}',
    'newForumPostPageTextInputCSS' => '{' . $input . ',"height":"200px"}',
    'newForumPostPageSendButtonCSS' => '{' . $button . ',"margin-top":"10px"}',
    'forumPostPageTitleCSS' => '{' . $h1 . '}',
    'forumPostPageContentCSS' => '{"padding-top":"15px"}',
    'forumPostPageReplyCSS' => '{"margin-bottom":"10px"}',
    'forumPostPageReplyAuthorNameCSS' => '{' . $text . '}',
    'forumPostPageReplyAuthorImageCSS' => '{' . $userImage . '}',
    'forumPostPageReplyDateCSS' => '{' . $date . '}',
    'forumPostPageReplyTextCSS' => '{' . $text . '}',
    'forumPostPageReplyTextLinksCSS' => '{' . $link . '}',
    'forumPostPageTextInputCSS' => '{' . $input . ',"height":"200px"}',
    'forumPostPageSendButtonCSS' => '{' . $button . ',"margin-top":"10px"}',
    'storeItemPageNameCSS' => '{' . $h1 . '}',
    'storeItemPageOptionSelectCSS' => '{' . $input . ',"width":"","height":"42px","line-height":"40px"}',
    'storeItemPageOptionLabelCSS' => '{' . $text . '}',
    'storeItemPageOptionContainerCSS' => '{"padding-top":"15px"}',
    'storeItemPagePriceCSS' => '{' . $text . '}',
    'storeItemPagePriceOriginalCSS' => '{' . $text . ',"text-decoration":"line-through","font-size":"12px"}',
    'storeItemPagePriceContainerCSS' => '{"padding-top":"15px"}',
    'storeItemPageBuyButtonCSS' => '{' . $button . '}',
    'storeItemPageBuyButtonContainerCSS' => '{"padding-top":"15px"}',
    'storeItemPageDescriptionCSS' => '{' . $text . '}'
];
$result = array_merge($result, $getElementsStyles('homePageSpecialContentBlockElements'));
$result = array_merge($result, $getElementsStyles('contentElements'));
$result = array_merge($result, $getElementsStyles('footerElements'));
return $result;
