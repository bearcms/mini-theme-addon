<?php

/*
 * Mini Theme addon for Bear CMS
 * https://github.com/bearcms/mini-theme-addon
 * Copyright (c) Amplilabs Ltd.
 * Free to use under the MIT license.
 */

$h1 = '"color":"#ffffff","font-family":"googlefonts:Caveat","font-size":"28px","line-height":"150%","text-align":"center"';
$h2 = '"color":"#ffffff","font-family":"googlefonts:Caveat","font-size":"24px","line-height":"150%","text-align":"center"';
$h3 = '"color":"#ffffff","font-family":"googlefonts:Caveat","font-size":"20px","line-height":"150%","text-align":"center"';
$text = '"color":"#ffffff","font-family":"Arial","font-size":"14px","line-height":"180%"';
$input = '"color":"#ffffff","font-family":"Arial","font-size":"14px","line-height":"42px","background-color":"rgba(255,255,255,0)","padding-left":"15px","padding-right":"15px","width":"100%","border-top-left-radius":"6px","border-top-right-radius":"6px","border-bottom-left-radius":"6px","border-bottom-right-radius":"6px","border-top":"2px solid #555555","border-left":"2px solid #555555","border-right":"2px solid #555555","border-bottom":"2px solid #555555"';
$link = '"color":"#ffffff","font-family":"Arial","font-size":"14px","line-height":"180%","text-decoration":"underline"';
$button = '"color":"#ffffff","font-family":"Arial","font-size":"14px","line-height":"42px","background-color":"rgba(255,255,255,0)","padding-left":"15px","padding-right":"15px","height":"42px","border-top-left-radius":"6px","border-top-right-radius":"6px","border-bottom-left-radius":"6px","border-bottom-right-radius":"6px","border-top":"2px solid #555555","border-left":"2px solid #555555","border-right":"2px solid #555555","border-bottom":"2px solid #555555"';
$date = '"color":"#aaaaaa","font-family":"Arial","font-size":"12px","line-height":"180%"';
$userImage = '"width":"50px","height":"50px","margin-right":"8px","border-top-left-radius":"6px","border-top-right-radius":"6px","border-bottom-left-radius":"6px","border-bottom-right-radius":"6px"';
$separator = '"background-color":"#666666","height":"2px","margin-top":"40px","margin-bottom":"40px","margin-left":"auto","margin-right":"auto"';
$image = '"border-top-left-radius":"6px","border-top-right-radius":"6px","border-bottom-left-radius":"6px","border-bottom-right-radius":"6px"';

$getElementsStyles = function ($prefix) use ($text, $h1, $h2, $h3, $input, $link, $button, $date, $userImage, $separator, $image) {
    return [
        $prefix . 'HeadingLargeCSS' => '{' . $h1 . '}',
        $prefix . 'HeadingMediumCSS' => '{' . $h2 . '}',
        $prefix . 'HeadingSmallCSS' => '{' . $h3 . '}',
        $prefix . 'TextCSS' => '{' . $text . '}',
        $prefix . 'TextLinkCSS' => '{' . $link . '}',
        $prefix . 'LinkCSS' => '{' . $link . '}',
        $prefix . 'ImageCSS' => '{' . $image . '}',
        $prefix . 'ImageGalleryImageCSS' => '{' . $image . '}',
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
        $prefix . 'BlogPostsPostTitleCSS' => '{' . $link . ',"font-family":"Arial","font-size":"22px"}',
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
        $prefix . 'SearchBoxButtonCSS' => '{' . $button . ',"width":"42px","height":"100%","background-image":"url(addon:bearcms\/mini-theme-addon:assets\/s9/s.png)","background-position":"center center","background-repeat":"no-repeat","background-attachment":"scroll","background-size":"60% 60%","border-top-left-radius":"0","border-bottom-left-radius":"0"}',
    ];
};

$result = [
    'headerCSS' => '{"max-width":"800px","margin-left":"auto","margin-right":"auto","padding-right":"15px","padding-bottom":"25px","padding-left":"15px","padding-top":"29px"}',
    'headerLogoImageCSS' => '{"width":"50px"}',
    'headerLogoTextCSS' => '{"font-family":"googlefonts:Caveat","font-weight":"bold","font-size":"25px","color":"#000000","margin-top":"7px"}',
    'headerLogoContainerCSS' => '{"padding-right":"20px"}',
    'headerContainerCSS' => '{}',
    'navigationCSS' => '{"max-width":"50px"}',
    'navigationItemCSS' => '{"line-height":"43px","padding-left":"15px","padding-right":"15px","height":"44px","min-width":"44px","color":"#111111","text-decoration":"none","font-family":"Arial","font-size":"13px","text-align":"left","margin-left":"5px","border-top-left-radius":"6px","border-top-right-radius":"6px","border-bottom-left-radius":"6px","border-bottom-right-radius":"6px","border-top":"2px solid rgba(0,0,0,0)","border-left":"2px solid rgba(0,0,0,0)","border-right":"2px solid rgba(0,0,0,0)","border-bottom":"2px solid rgba(0,0,0,0)","border-top":"2px solid #222222","border-left":"2px solid #222222","border-right":"2px solid #222222","border-bottom":"2px solid #222222"}',
    'navigationMoreItemCSS' => '{"background-image":"url(addon:bearcms\/mini-theme-addon:assets\/s9/m.png)","background-position":"center center","background-repeat":"no-repeat","background-attachment":"scroll","background-size":"60% 60%"}',
    'navigationSubitemCSS' => '{"line-height":"42px","padding-left":"15px","padding-right":"15px","height":"42px","color":"#ffffff","text-decoration":"none","font-family":"Arial","font-size":"13px","background-color":"#01738e","background-color:hover":"#00657d","background-color:active":"#00596e","text-align":"left"}',
    'navigationFirstSubitemCSS' => '{"border-top-left-radius":"6px","border-top-right-radius":"6px"}',
    'navigationLastSubitemCSS' => '{"border-bottom-left-radius":"6px","border-bottom-right-radius":"6px"}',
    'navigationSubitemsContainerCSS' => '{"padding-top":"5px","cursor":"default"}',
    'homePageSpecialContentBlockVisibility' => '0',
    'homePageSpecialContentBlockCSS' => '{"max-width":"800px","margin-left":"auto","margin-right":"auto","padding-top":"30px","padding-right":"15px","padding-bottom":"30px","padding-left":"15px"}',
    'homePageSpecialContentBlockContainerCSS' => '{}',
    'contentCSS' => '{"background-color":"#130401","box-shadow":"0 1px 3px 0 #333","max-width":"800px","margin-left":"auto","margin-right":"auto","padding-top":"30px","padding-right":"20px","padding-bottom":"30px","padding-left":"20px","min-height":"400px","border-top-left-radius":"20px","border-top-right-radius":"20px","border-bottom-left-radius":"20px","border-bottom-right-radius":"20px"}',
    'contentContainerCSS' => '{"padding-bottom":"40px"}',
    'footerVisibility' => '0',
    'footerCSS' => '{"max-width":"800px","margin-left":"auto","margin-right":"auto","padding-top":"30px","padding-right":"15px","padding-bottom":"30px","padding-left":"15px"}',
    'footerContainerCSS' => '{}',
    'bodyCSS' => '{"background-image":"url(addon:bearcms\/mini-theme-addon:assets\/s9/b.jpg)","background-position":"center center","background-repeat":"no-repeat","background-attachment":"fixed","background-size":"cover"}',
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
];
$result = array_merge($result, $getElementsStyles('homePageSpecialContentBlockElements'));
$result = array_merge($result, $getElementsStyles('contentElements'));
$result = array_merge($result, $getElementsStyles('footerElements'));
return $result;
