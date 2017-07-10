{*
    Global JavaScript
*}
<script src="{$site_root}/js/global.min.js?v={$js_version}"></script>

{*
    AddThis Sharing Code
*}
{if $addthis_id}
    <script async type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid={$addthis_id}"></script>
{/if}

{*
    Google Analytics Tracking Code
*}
{if $google_analytics_id}
    <script async>(function(i,s,o,g,r,a,m) { i['GoogleAnalyticsObject']=r;i[r]=i[r]||function() { (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o), m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');ga('create', '{$google_analytics_id}', 'auto');ga('require', 'displayfeatures');ga('require', 'linkid', 'linkid.js');ga('send', 'pageview');</script>
{/if}

{*
    Hotjar Tracking Code for http://christopherl.com
*}
{if $hotjar_id}
    <script async>(function(h,o,t,j,a,r) { h.hj=h.hj||function() { (h.hj.q=h.hj.q||[]).push(arguments) } ;h._hjSettings= { hjid:{$hotjar_id},hjsv:5 } ;a=o.getElementsByTagName('head')[0];r=o.createElement('script');r.async=1;r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;a.appendChild(r); } )(window,document,'//static.hotjar.com/c/hotjar-','.js?sv=');</script>
{/if}

<script async type="application/ld+json"> { "@context":"http://schema.org","@type":"{$schema.type}","name":"{$schema.name}","url":"{$site_domain}{$site_root}","telephone":"{$schema.telephone}","address": { "@type":"PostalAddress","streetAddress":"{$schema.street}","addressLocality":"{$schema.city}","addressRegion":"{$schema.region}","postalCode":"{$schema.postal_code}","addressCountry":"{$schema.country}" } ,{if $schema.type == 'Person'}"jobTitle":"{$schema.job_title}","affiliation":"{$schema.employer}","additionalName":"{$schema.also_known_as}",{/if}"sameAs":["{'", "'|implode:$schema.same_as}"] } </script>
