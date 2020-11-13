<?php
/**
 * Created by PhpStorm.
 * User: dstarr
 * Date: 7/5/17
 * Time: 7:18 PM
 */
require_once(__DIR__ . '/cache_buster.php');
?>
<script type="application/ld+json">
{
  "@context": "http://schema.org/",
  "@type": "WebSite",
  "name": "Master Maintenance",
  "url": "http://www.master-maintenance.com"
}
{
  "@context": "http://schema.org",
  "@type": "ProfessionalService",
  "name": "Master Maintenance",
  "image": "http://www.master-maintenance.com/_img/mm_logo-01.svg",
  "@id": "",
  "url": "http://www.master-maintenance.com",
  "telephone": "419-229-3192",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "301 West Elm St.",
    "addressLocality": "Lima",
    "addressRegion": "OH",
    "postalCode": "45801",
    "addressCountry": "US"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": 40.7369446,
    "longitude": -84.1081749
  },
  "openingHoursSpecification": {
    "@type": "OpeningHoursSpecification",
    "dayOfWeek": ,
    "opens": "",
    "closes": ""
  }
}
</script>
<!--Plugins-->
<!--<script src="_js/jquery.js<?php /*echo $cache_buster_version*/?>"></script>
<script src="_js/plugins.js<?php /*echo $cache_buster_version*/?>" defer></script>-->
<script src='https://www.google.com/recaptcha/api.js'></script>
<script src="/_js/script.min.js<?php echo $cache_buster_version; ?>" defer></script>
<!--Template functions-->
<!--<script src="_js/functions.js<?php /*echo $cache_buster_version*/?>" defer></script>-->

<!--<script id="__bs_script__">//<![CDATA[
    document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.js?v=2.18.12'><\/script>".replace("HOST", location.hostname));
    //]]></script>-->

