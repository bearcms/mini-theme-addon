<?php

/*
 * Mini Theme addon for Bear CMS
 * https://github.com/bearcms/mini-theme-addon
 * Copyright (c) Amplilabs Ltd.
 * Free to use under the MIT license.
 */

$h1 = '"color":"#e37015","font-family":"googlefonts:Pacifico","font-size":"28px","line-height":"150%"';
$h2 = '"color":"#e37015","font-family":"googlefonts:Pacifico","font-size":"24px","line-height":"150%"';
$h3 = '"color":"#e37015","font-family":"googlefonts:Pacifico","font-size":"20px","line-height":"150%"';
$text = '"color":"#ffffff","font-family":"Arial","font-size":"16px","line-height":"180%"';
$input = '"color":"#3c3125","font-family":"Arial","font-size":"16px","line-height":"42px","padding-left":"15px","padding-right":"15px","width":"100%","border-top-left-radius":"2px","border-top-right-radius":"2px","border-bottom-left-radius":"2px","border-bottom-right-radius":"2px"';
$link = '"color":"#ffffff","font-family":"Arial","font-size":"16px","line-height":"180%","text-decoration":"underline"';
$button = '"color":"#3c3125","font-family":"Arial","font-size":"14px","line-height":"42px","padding-left":"15px","padding-right":"15px","height":"42px","background-color":"#ffffff","background-color:hover":"#f5f5f5","background-color:active":"#eeeeee","border-top-left-radius":"2px","border-top-right-radius":"2px","border-bottom-left-radius":"2px","border-bottom-right-radius":"2px"';
$date = '"color":"#857361","font-family":"Arial","font-size":"12px","line-height":"180%"';
$userImage = '"width":"50px","height":"50px","margin-right":"8px","border-top-left-radius":"2px","border-top-right-radius":"2px","border-bottom-left-radius":"2px","border-bottom-right-radius":"2px"';
$separator = '"background-color":"#634b31","height":"2px","margin-top":"40px","margin-bottom":"40px"';

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
        $prefix . 'SearchBoxButtonCSS' => '{' . $button . ',"width":"42px","height":"100%","background-image":"url(addon:bearcms\/mini-theme-addon:assets\/s5/s.png)","background-position":"center center","background-repeat":"no-repeat","background-attachment":"scroll","background-size":"60% 60%","border-top-left-radius":"0","border-bottom-left-radius":"0"}',
        $prefix . 'StoreItemsItemNameCSS' => '{' . $link . ',"font-size":"22px"}',
        $prefix . 'StoreItemsItemDescriptionCSS' => '{' . $text . '}',
        $prefix . 'StoreItemsItemDescriptionContainerCSS' => '{"padding-top":"5px"}',
        $prefix . 'StoreItemsItemPriceCSS' => '{' . $text . '}',
        $prefix . 'StoreItemsItemPriceOriginalCSS' => '{' . $text . ',"text-decoration":"line-through","font-size":"12px"}',
        $prefix . 'StoreItemsItemPriceContainerCSS' => '{"padding-top":"5px"}',
    ];
};

$result = [
    'headerCSS' => '{"max-width":"800px","margin-left":"auto","margin-right":"auto","padding-right":"15px","padding-bottom":"25px","padding-left":"15px","padding-top":"15px"}',
    'headerLogoImageCSS' => '{"width":"50px"}',
    'headerLogoTextCSS' => '{"font-family":"googlefonts:Pacifico","font-size":"24px","color":"#e37015","margin-top":"10px"}',
    'headerLogoContainerCSS' => '{"padding-right":"20px"}',
    'headerContainerCSS' => '{"background-color":"#ffffff","background-image":"url(addon:bearcms\/mini-theme-addon:assets\/s5/h.png)","background-position":"center bottom","background-repeat":"repeat-x","background-attachment":"scroll"}',
    'navigationCSS' => '{"padding-top":"9px"}',
    'navigationItemCSS' => '{"line-height":"43px","padding-left":"15px","padding-right":"15px","height":"44px","min-width":"44px","color":"#000000","text-decoration":"none","font-family":"Arial","font-size":"14px","text-align":"left","margin-left":"5px","background-color:hover":"#f5f5f5","background-color:active":"#eeeeee","border-top-left-radius":"2px","border-top-right-radius":"2px","border-bottom-left-radius":"2px","border-bottom-right-radius":"2px"}',
    'navigationMoreItemCSS' => '{"background-image":"url(addon:bearcms\/mini-theme-addon:assets\/s5/m.png)","background-position":"center center","background-repeat":"no-repeat","background-attachment":"scroll","background-size":"60% 60%"}',
    'navigationSearchButtonCSS' => '{"background-image":"url(addon:bearcms\/mini-theme-addon:assets\/s5/ms.svg)","background-position":"center center","background-repeat":"no-repeat","background-size":"22px 22px"}',
    'navigationStoreCartButtonCSS' => '{"background-image":"url(addon:bearcms\/mini-theme-addon:assets\/s5/mc.svg)","background-position":"center center","background-repeat":"no-repeat","background-size":"22px 22px"}',
    'navigationSubitemCSS' => '{"line-height":"42px","padding-left":"15px","padding-right":"15px","height":"42px","color":"#ffffff","text-decoration":"none","font-family":"Arial","font-size":"14px","background-color":"#e37015","background-color:hover":"#d1650f","background-color:active":"#bf5b0b","text-align":"left"}',
    'navigationFirstSubitemCSS' => '{"border-top-left-radius":"2px","border-top-right-radius":"2px"}',
    'navigationLastSubitemCSS' => '{"border-bottom-left-radius":"2px","border-bottom-right-radius":"2px"}',
    'navigationSubitemsContainerCSS' => '{"padding-top":"5px","cursor":"default"}',
    'homePageSpecialContentBlockVisibility' => '0',
    'homePageSpecialContentBlockCSS' => '{"max-width":"800px","margin-left":"auto","margin-right":"auto","padding-top":"30px","padding-right":"15px","padding-bottom":"30px","padding-left":"15px"}',
    'homePageSpecialContentBlockContainerCSS' => '{}',
    'contentCSS' => '{"max-width":"800px","margin-left":"auto","margin-right":"auto","padding-top":"30px","padding-right":"15px","padding-bottom":"30px","padding-left":"15px","min-height":"400px","border-top-left-radius":"2px","border-top-right-radius":"2px","border-bottom-left-radius":"2px","border-bottom-right-radius":"2px"}',
    'contentContainerCSS' => '{"background-color":"#3c3125"}',
    'footerVisibility' => '1',
    'footerCSS' => '{"max-width":"800px","margin-left":"auto","margin-right":"auto","padding-top":"30px","padding-right":"15px","padding-bottom":"30px","padding-left":"15px"}',
    'footerContainerCSS' => '',
    'bodyCSS' => '{"background-color":"#2b2219"}',
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
