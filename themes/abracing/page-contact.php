<?php
/*Template Name: Contact*/
get_header();
$thisID = get_the_ID();
$telephone = get_field('telephone', 'options');
$address = get_field('address', 'options');
$gurl = get_field('gurl', 'options');
$gmaplink = !empty($gurl)?$gurl: 'javascript:void()';
$mapcode = get_field('gmap_code', $thisID);
?>




<?php get_footer(); ?>