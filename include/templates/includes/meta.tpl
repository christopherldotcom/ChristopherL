{* Misc Meta *}
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="robots" content="all, index, follow">
<meta name="apple-mobile-web-app-title" content="ChristopherL">

{* Basic Page Details *}
<title>{$page_title}</title>
<meta name="description" content="{$page_desc}" itemprop="description">
<meta itemprop="name" content="{$page_title}">

{* Twitter Card data *}
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="{$page_title}">
<meta name="twitter:description" content="{$page_desc}">
<meta name="twitter:creator" content="@chrislarrycarl">
<meta name="twitter:site" content="@chrislarrycarl">
<meta name="twitter:image" content="{$image_root}{$image_twitter}">

{* Open Graph data *}
<meta property="og:title" content="{$page_title}">
<meta property="og:type" content="article">
<meta property="og:url" content="{$site_domain}{$site_root}{$page_url}">
<meta property="og:image" content="{$image_root}{$image_facebook}">
<meta property="og:description" content="{$page_desc}">
<meta property="og:site_name" content="ChristopherL">

{* Misc Link *}
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sacramento|Noto+Sans:400,700">
<link rel="stylesheet" href="{$site_domain}{$site_root}/css/styles.css?v={$css_version}">
<link rel="apple-touch-icon" href="{$image_root}/img/apple-touch-icon.png">
<meta name="generator" content="ChristopherL {$site_version}">
<link rel="icon" href="{$image_root}/img/favicon.png">
<link rel="author" itemprop="author" href="{$site_domain}{$site_root}/humans.txt">
<link rel="sitemap" type="application/xml" title="Sitemap" href="{$site_domain}{$site_root}/sitemap.xml">

{if $google_plus_url}
    <link href="{$google_plus_url}" rel="publisher">
{/if}

{*
    Only output canonical for pages with a page url, we don't set this for the 404 page so that
    "missing" pages aren't indexed.
*}
{if $page_url}
    <link rel="canonical" href="{$site_domain}{$site_root}{$page_url}">
{/if}

{* No notice if we don't compress, so let them know in the meta *}
<meta name="copyleft" content="1999 - {date("Y")} ChristopherL">
<meta name="license" content="GNU GPL v2">
<meta name="download" content="https://github.com/christopherldotcom/ChristopherL">

{if $a_b_testing && $optimizely_id}
    <script src="https://cdn.optimizely.com/js/{$optimizely_id}.js"></script>
{/if}

{*
    Webmaster Tools
*}
<meta name="google-site-verification" content="{$google_verification}">
<meta name="msvalidate.01" content="{$bing_verification}">
