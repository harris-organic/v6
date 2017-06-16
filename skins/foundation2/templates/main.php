{*
 * CubeCart v6
 * ========================================
 * CubeCart is a registered trade mark of CubeCart Limited
 * Copyright CubeCart Limited 2017. All rights reserved.
 * UK Private Limited Company No. 5323904
 * ========================================
 * Web:   http://www.cubecart.com
 * Email:  sales@cubecart.com
 * License:  GPL-3.0 https://www.gnu.org/licenses/quick-guide-gplv3.html
 *}
<!DOCTYPE html>
<html class="no-js" xmlns="http://www.w3.org/1999/xhtml" dir="{$TEXT_DIRECTION}" lang="{$HTML_LANG}">
   <head>
      <title>{$META_TITLE}</title>
      <meta charset="{$CHARACTER_SET}">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="{$CANONICAL}" rel="canonical">
      <link href="{$STORE_URL}/favicon.ico" rel="shortcut icon" type="image/x-icon">
      <link href="{$STORE_URL}/skins/{$SKIN_FOLDER}/css/normalize.css" rel="stylesheet">
      <link href="{$STORE_URL}/skins/{$SKIN_FOLDER}/css/foundation.css" rel="stylesheet">
      <link href="{$STORE_URL}/skins/{$SKIN_FOLDER}/css/cubecart.css" rel="stylesheet">
      <link href="{$STORE_URL}/skins/{$SKIN_FOLDER}/css/cubecart.common.css" rel="stylesheet">
      <link href="{$STORE_URL}/skins/{$SKIN_FOLDER}/css/cubecart.helpers.css" rel="stylesheet">
      {if !empty($SKIN_SUBSET)}
      <link href="{$STORE_URL}/skins/{$SKIN_FOLDER}/css/cubecart.{$SKIN_SUBSET}.css" rel="stylesheet">
      {/if}
      <link href="{$STORE_URL}/skins/{$SKIN_FOLDER}/css/jquery.bxslider.css" rel="stylesheet">
      <link href="{$STORE_URL}/skins/{$SKIN_FOLDER}/css/jquery.chosen.min.css" rel="stylesheet">
      <link href="//fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet" type='text/css'>
      {foreach from=$CSS key=css_keys item=css_files}
      <link href="{$STORE_URL}/{$css_files}" rel="stylesheet" type="text/css" media="screen">
      {/foreach}
      <meta name="description" content="{if isset($META_DESCRIPTION)}{$META_DESCRIPTION}{/if}">
      <meta name="keywords" content="{if isset($META_KEYWORDS)}{$META_KEYWORDS}{/if}">
      <meta name="robots" content="index, follow">
      <meta name="generator" content="cubecart">
      {if $FBOG}
      <meta property="og:image" content="{$PRODUCT.thumbnail}">
      <meta property="og:url" content="{$VAL_SELF}">
      {/if}
      {include file='templates/content.recaptcha.head.php'}
      <script src="{$STORE_URL}/skins/{$SKIN_FOLDER}/js/vendor/modernizr.min.js"></script>
      <script src="{$STORE_URL}/skins/{$SKIN_FOLDER}/js/vendor/jquery.js"></script>
      {include file='templates/element.google_analytics.php'}
      {foreach from=$HEAD_JS item=js}{$js}{/foreach}
   </head>
   <body>
        {foreach from=$BODY_JS_TOP item=js}{$js}{/foreach}
        {include file='images/icon-sprites.svg'}
   	  {if $STORE_OFFLINE}
   	  <div data-alert class="alert-box alert">{$LANG.common.warning_offline}<a href="#" class="close">&times;</a></div>
   	  {/if}
      <div class="off-canvas-wrap" data-offcanvas>
         <div class="inner-wrap">
            {include file='templates/box.off_canvas.right.php'}
            {include file='templates/box.off_canvas.left.php'}
            {include file='templates/box.eu_cookie.php'}
            <div id="header_wrapper">
               <div class="row">
                  <div class="large-12 columns">
                     {include file='templates/box.session.php'}
                     <div class="right text-right"><a href="?_a=account">{$LANG.account.my_account}</a></div>
                  </div>
               </div>
               <div class="row" id="top_header">
                  <div class="small-4 large-3 columns">
                     <a href="{$STORE_URL}" class="main-logo"><img src="{$STORE_LOGO}" alt="{$META_TITLE}"></a>
                  </div>
                  <div class="small-8 large-9 columns nav-boxes">
                     <div class="row" id="nav-actions">
                        <div class="small-12 columns">
                           {include file='templates/box.basket.php'}
                           {include file='templates/box.currency.php'}
                           {include file='templates/box.language.php'}
                           {include file='templates/box.search_link.php'}
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row hide" id="small-search">
               <div class="small-12 columns">
                  {include file='templates/box.search.php'}
               </div>
            </div>
            <div id="navigation-wrapper">
               <div class="row">
                  <div class="small-12 columns small-collapse">
                     {include file='templates/box.navigation.php'}
                     <div class="hide" id="val_lang_back">{$LANG.common.back}</div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="small-12 columns small-collapse">
                  {include file='templates/element.breadcrumb.php'} 
               </div>
            </div>
            <div class="row {$SECTION_NAME}_wrapper">
               <div class="small-12{if $SECTION_NAME!='home'} large-9{/if} columns" id="main_content">
                  {include file='templates/box.errors.php'}
                  {include file='templates/box.progress.php'}
                  {$PAGE_CONTENT}
               </div>
               {if $SECTION_NAME!='home'}
               <div class="large-3 columns show-for-large-up" id="sidebar_left">
                  {include file='templates/box.featured.php'}
                  {include file='templates/box.popular.php'}
                  {include file='templates/box.sale_items.php'}
               </div>
               {/if}
               <a href="#" class="back-to-top"><span class="show-for-small-only"><svg class="icon"><use xlink:href="#icon-angle-up"></use></svg></span><span class="show-for-medium-up"><svg class="icon"><use xlink:href="#icon-angle-up"></use></svg> {$LANG.common.top}</span></a>
            </div>
            <footer>
               <div class="stripe">
               </div>
               <div class="row">
                  <div class="medium-7 large-7 columns">
                     {include file='templates/box.documents.php'}
                  </div>
                  <div class="medium-5 large-5 columns">
                     {$SOCIAL_LIST}
                     <div class="row">
                        <div class="large-12 columns">
                           {include file='templates/box.newsletter.php'}
                           <div class="show-for-small-only">{$COPYRIGHT}</div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="small-7 columns">
                     {$COPYRIGHT}
                  </div>
                  <div class="small-5 columns">
                  {include file='templates/ccpower.php'}
                  </div>
               </div>
            </footer>
            <script src="{$STORE_URL}/skins/{$SKIN_FOLDER}/js/vendor/jquery.rating.min.js" type="text/javascript"></script>
            <script src="{$STORE_URL}/skins/{$SKIN_FOLDER}/js/vendor/jquery.validate.min.js" type="text/javascript"></script>
            <script src="{$STORE_URL}/skins/{$SKIN_FOLDER}/js/vendor/jquery.cookie.min.js" type="text/javascript"></script>
            <script src="{$STORE_URL}/skins/{$SKIN_FOLDER}/js/vendor/jquery.bxslider.min.js" type="text/javascript"></script>
            <script src="{$STORE_URL}/skins/{$SKIN_FOLDER}/js/vendor/jquery.chosen.min.js" type="text/javascript"></script>
            {foreach from=$BODY_JS item=js}{$js}{/foreach}
            {foreach from=$JS_SCRIPTS key=k item=script}
            <script src="{$STORE_URL}/{$script|replace:'\\':'/'}" type="text/javascript"></script>
            {/foreach}
            <script>
               {literal}
               $(document).foundation({equalizer:{equalize_on_stack:true}});
               $('.bxslider').bxSlider({auto:true,captions:true});
               $('.chzn-select').chosen({width:"100%",search_contains:true});
               {/literal}
            </script>
            {$LIVE_HELP}
            {$DEBUG_INFO}
            {include file='templates/box.skins.php'}
            <a class="exit-off-canvas"></a>
            
         </div>
      </div>
   </body>
</html>