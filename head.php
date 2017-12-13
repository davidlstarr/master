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
<meta name="description" content="Established in 1981, Master Maintenance is a professional facility maintenance company that provides quality building services
                        to commercial and industrial businesses in Ohio, Kentucky, and Indiana. We pride ourselves in providing the most professional service in the industry.
                        Master Maintenance is a professional janitorial and building service company dedicated to meeting the needs of its customer as identified in the work specifications. We provide services to commercial, industrial, and institutional clients who value the importance of a clean environment.
                        The most vital component of its company is the people. Through proper selection, training, fair compensation, and respect, we are committed to developing a highly motivated work team.">
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
