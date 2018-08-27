<?php
/**
 * Created by PhpStorm.
 * User: dstarr
 * Date: 7/5/17
 * Time: 7:11 PM
 */
require_once(__DIR__ . '/local_or_live.php');
require_once(__DIR__ . '/cache_buster.php');
?>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="author" content="Master Maintenance" />
<meta name="Description" content="Master Maintenance - is a professional facility maintenance company that provides quality building cleaning services in Ohio (Columbus, Toledo, Cincinatti), Kentucky and Indiana.">
<meta name="Keywords" content="cleaning services, building cleaning, building cleaning services, cleaning industry, cleaning janitorial, Cincinatti, Lima, Toledo, Columbus, cleaning offices, cleaning service, cleaning services commercial, industrial cleaning business, building management services, carpet cleaning, ttile, wood, concrete, stone restoration, power washing, Mason, Minster, Toledo, Ft. Wayne, Indiana, janitorial business, janitorial cleaning, maintenance and cleaning services, office cleaning, office cleaning company, professional cleaning services, window cleaning, janitorial maintenance, janitorial office cleaning ">

<!-- Document title -->
<title>Master Maintenance</title>
<!-- Stylesheets & Fonts -->
<link href="https://fonts.googleapis.com/css?family=Fira+Sans:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />

<!--<link href="css/plugins.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">-->

<!-- Primary CSS -->
<?php if ($local == true) {
    echo "<link rel=\"stylesheet\" type=\"text/css\" media=\"screen, projection\" href=\"_css/styles.css" . $cache_buster_version . "\">\n";
}else{
    echo "<link rel=\"stylesheet\" type=\"text/css\" media=\"screen, projection\" href=\"_css/styles.min.css" . $cache_buster_version . "\">\n";
}?>
<?php include(__DIR__ . '/analytics_tracking.php'); ?>