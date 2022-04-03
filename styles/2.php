<?php

/*
 * Mini Theme addon for Bear CMS
 * https://github.com/bearcms/mini-theme-addon
 * Copyright (c) Amplilabs Ltd.
 * Free to use under the MIT license.
 */

$h1 = '"color":"#d3350b","font-weight":"bold","font-family":"googlefonts:Oswald","font-size":"24px","line-height":"150%"';
$h2 = '"color":"#d3350b","font-weight":"bold","font-family":"googlefonts:Oswald","font-size":"20px","line-height":"150%"';
$h3 = '"color":"#d3350b","font-weight":"bold","font-family":"googlefonts:Oswald","font-size":"16px","line-height":"150%"';
$text = '"color":"#000000","font-family":"Arial","font-size":"16px","line-height":"180%"';
$input = '"color":"#000000","font-family":"Arial","font-size":"16px","line-height":"42px","padding-left":"15px","padding-right":"15px","width":"100%","border-top":"1px solid #cccccc","border-bottom":"1px solid #cccccc","border-left":"1px solid #cccccc","border-right":"1px solid #cccccc","border-top-left-radius":"2px","border-top-right-radius":"2px","border-bottom-left-radius":"2px","border-bottom-right-radius":"2px","background-color":"#fff"';
$link = '"color":"#d3350b","font-family":"Arial","font-size":"16px","line-height":"180%","text-decoration":"underline"';
$button = '"color":"#000000","font-family":"Arial","font-size":"14px","line-height":"42px","padding-left":"15px","padding-right":"15px","height":"42px","border-top":"1px solid #cccccc","border-bottom":"1px solid #cccccc","border-left":"1px solid #cccccc","border-right":"1px solid #cccccc","background-color:hover":"#f5f5f5","background-color:active":"#eeeeee","border-top-left-radius":"2px","border-top-right-radius":"2px","border-bottom-left-radius":"2px","border-bottom-right-radius":"2px"';
$date = '"color":"#555555","font-family":"Arial","font-size":"12px","line-height":"180%"';
$userImage = '"width":"50px","height":"50px","margin-right":"8px","border-top-left-radius":"2px","border-top-right-radius":"2px","border-bottom-left-radius":"2px","border-bottom-right-radius":"2px"';
$separator = '"background-color":"#eee","height":"2px","margin-top":"40px","margin-bottom":"40px"';

$getElementsStyles = function ($prefix) use ($text, $h1, $h2, $h3, $input, $link, $button, $date, $userImage, $separator) {
    $formFieldInput = $input;
    $formFieldLabel = $text;
    $formFieldHint = $text . ',"font-size":"12px","padding-bottom":"3px"';
    $formFieldContainer = '"padding-bottom":"15px"';
    $formFieldListOptionButton = $input . ',"width":"40px","height":"40px","background-position":"center center","background-repeat":"no-repeat","background-attachment":"scroll","background-size":"cover"';
    $formFieldListOptionText = $text . ',"padding-left":"15px","padding-top":"8px"';
    $formFieldListOptionTextbox = $input . ',"height":"40px","line-height":"38px","width":"250px","margin-left":"10px"';
    $formFieldListOptionContainer = '"margin-bottom":"5px"';
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
        $prefix . 'SearchBoxButtonCSS' => '{' . $button . ',"width":"42px","height":"100%","background-image":"url(addon:bearcms\/mini-theme-addon:assets\/s2/s.png)","background-position":"center center","background-repeat":"no-repeat","background-attachment":"scroll","background-size":"60% 60%","border-top-left-radius":"0","border-bottom-left-radius":"0"}',
        $prefix . 'StoreItemsItemNameCSS' => '{' . $link . ',"font-size":"22px"}',
        $prefix . 'StoreItemsItemDescriptionCSS' => '{' . $text . '}',
        $prefix . 'StoreItemsItemDescriptionContainerCSS' => '{"padding-top":"5px"}',
        $prefix . 'StoreItemsItemPriceCSS' => '{' . $text . '}',
        $prefix . 'StoreItemsItemPriceOriginalCSS' => '{' . $text . ',"text-decoration":"line-through","font-size":"12px"}',
        $prefix . 'StoreItemsItemPriceContainerCSS' => '{"padding-top":"5px"}',
        $prefix . 'FormFieldTextCSS' => '{' . $formFieldInput . '}',
        $prefix . 'FormFieldTextLabelCSS' => '{' . $formFieldLabel . '}',
        $prefix . 'FormFieldTextHintCSS' => '{' . $formFieldHint . '}',
        $prefix . 'FormFieldTextContainerCSS' => '{' . $formFieldContainer . '}',
        $prefix . 'FormFieldTextareaCSS' => '{' . $formFieldInput . ',"height":"140px"}',
        $prefix . 'FormFieldTextareaLabelCSS' => '{' . $formFieldLabel . '}',
        $prefix . 'FormFieldTextareaHintCSS' => '{' . $formFieldHint . '}',
        $prefix . 'FormFieldTextareaContainerCSS' => '{' . $formFieldContainer . '}',
        $prefix . 'FormFieldOpenedListSingleSelectLabelCSS' => '{' . $formFieldLabel . '}',
        $prefix . 'FormFieldOpenedListSingleSelectHintCSS' => '{' . $formFieldHint . '}',
        $prefix . 'FormFieldOpenedListSingleSelectOptionButtonCSS' => '{' . $formFieldListOptionButton . ',"border-top-left-radius":"50%","border-top-right-radius":"50%","border-bottom-left-radius":"50%","border-bottom-right-radius":"50%"}',
        $prefix . 'FormFieldOpenedListSingleSelectOptionButtonCheckedCSS' => '{"background-image":"url(addon:bearcms\/mini-theme-addon:assets\/radio-icon-111.svg)","background-size":"30px 30px"}',
        $prefix . 'FormFieldOpenedListSingleSelectOptionTextCSS' => '{' . $formFieldListOptionText . '}',
        $prefix . 'FormFieldOpenedListSingleSelectOptionTextboxCSS' => '{' . $formFieldListOptionTextbox . '}',
        $prefix . 'FormFieldOpenedListSingleSelectOptionContainerCSS' => '{' . $formFieldListOptionContainer . '}',
        $prefix . 'FormFieldOpenedListSingleSelectContainerCSS' => '{' . $formFieldContainer . '}',
        $prefix . 'FormFieldOpenedListMultiSelectLabelCSS' => '{' . $formFieldLabel . '}',
        $prefix . 'FormFieldOpenedListMultiSelectHintCSS' => '{' . $formFieldHint . '}',
        $prefix . 'FormFieldOpenedListMultiSelectOptionButtonCSS' => '{' . $formFieldListOptionButton . '}',
        $prefix . 'FormFieldOpenedListMultiSelectOptionButtonCheckedCSS' => '{"background-image":"url(addon:bearcms\/mini-theme-addon:assets\/checkbox-icon-111.svg)","background-size":"18px 18px"}',
        $prefix . 'FormFieldOpenedListMultiSelectOptionTextCSS' => '{' . $formFieldListOptionText . '}',
        $prefix . 'FormFieldOpenedListMultiSelectOptionTextboxCSS' => '{' . $formFieldListOptionTextbox . '}',
        $prefix . 'FormFieldOpenedListMultiSelectOptionContainerCSS' => '{' . $formFieldListOptionContainer . '}',
        $prefix . 'FormFieldOpenedListMultiSelectContainerCSS' => '{' . $formFieldContainer . '}',
        $prefix . 'FormFieldClosedListCSS' => '{' . $formFieldInput . '}',
        $prefix . 'FormFieldClosedListLabelCSS' => '{' . $formFieldLabel . '}',
        $prefix . 'FormFieldClosedListHintCSS' => '{' . $formFieldHint . '}',
        $prefix . 'FormFieldClosedListContainerCSS' => '{' . $formFieldContainer . '}',
        $prefix . 'FormSubmitButtonCSS' => '{' . $button . '}',
    ];
};

$result = [
    'headerCSS' => '{"max-width":"800px","margin-left":"auto","margin-right":"auto","padding-bottom":"30px","padding-top":"30px","border-bottom":"2px solid #eee"}',
    'headerLogoImageCSS' => '{"width":"50px"}',
    'headerLogoTextCSS' => '{"font-family":"googlefonts:Oswald","font-size":"25px","font-weight":"bold","color":"#d3350b","margin-top":"1px"}',
    'headerLogoContainerCSS' => '{"padding-right":"20px"}',
    'headerContainerCSS' => '{"padding-left":"15px","padding-right":"15px"}',
    'navigationCSS' => '',
    'navigationItemCSS' => '{"line-height":"43px","padding-left":"15px","padding-right":"15px","height":"44px","min-width":"44px","color":"#111111","text-decoration":"none","font-family":"Arial","font-size":"14px","text-align":"left","margin-left":"5px","background-color:hover":"#f5f5f5","background-color:active":"#eeeeee","border-top-left-radius":"2px","border-top-right-radius":"2px","border-bottom-left-radius":"2px","border-bottom-right-radius":"2px"}',
    'navigationMoreItemCSS' => '{"background-image":"url(addon:bearcms\/mini-theme-addon:assets\/s2/m.png)","background-position":"center center","background-repeat":"no-repeat","background-attachment":"scroll","background-size":"60% 60%"}',
    'navigationSearchButtonCSS' => '{"background-image":"url(addon:bearcms\/mini-theme-addon:assets\/s2/ms.svg)","background-position":"center center","background-repeat":"no-repeat","background-size":"22px 22px"}',
    'navigationStoreCartButtonCSS' => '{"background-image":"url(addon:bearcms\/mini-theme-addon:assets\/s2/mc.svg)","background-position":"center center","background-repeat":"no-repeat","background-size":"22px 22px"}',
    'navigationSubitemCSS' => '{"line-height":"42px","padding-left":"15px","padding-right":"15px","height":"42px","color":"#ffffff","text-decoration":"none","font-family":"Arial","font-size":"14px","background-color":"#333333","background-color:hover":"#444444","background-color:active":"#555555","text-align":"left"}',
    'navigationFirstSubitemCSS' => '{"border-top-left-radius":"2px","border-top-right-radius":"2px"}',
    'navigationLastSubitemCSS' => '{"border-bottom-left-radius":"2px","border-bottom-right-radius":"2px"}',
    'navigationSubitemsContainerCSS' => '{"padding-top":"5px","cursor":"default"}',
    'homePageSpecialContentBlockVisibility' => '1',
    'homePageSpecialContentBlockCSS' => '{"max-width":"800px","margin-left":"auto","margin-right":"auto","padding-top":"35px","padding-bottom":"35px","border-bottom":"2px solid #eee"}',
    'homePageSpecialContentBlockContainerCSS' => '{"background-color":"#fefefe","padding-left":"15px","padding-right":"15px"}',
    'contentCSS' => '{"max-width":"800px","margin-left":"auto","margin-right":"auto","padding-top":"35px","padding-bottom":"35px","min-height":"400px"}',
    'contentContainerCSS' => '{"background-color":"#fefefe","padding-left":"15px","padding-right":"15px"}',
    'footerVisibility' => '1',
    'footerCSS' => '{"max-width":"800px","margin-left":"auto","margin-right":"auto","padding-top":"35px","padding-bottom":"35px","border-top":"2px solid #eee"}',
    'footerContainerCSS' => '{"padding-left":"15px","padding-right":"15px"}',
    'bodyCSS' => '{"background-color":"#ffffff"}',
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
