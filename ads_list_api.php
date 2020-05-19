<?php
error_reporting();
#Database Connection

include('config.php');

#code for higest cpi value 

$sql=mysqli_query($con, "select * from ads_lists where ads_cpi=(select max(ads_cpi) from ads_lists)");
$sql_query=mysqli_fetch_array($sql);
$ads_name=$sql_query['ads_name'];
$ads_url=$sql_query['ads_url'];
$ads_image=$sql_query['ads_image'];
$ads_cpi=$sql_query['ads_cpi'];
$ads_list_id=$sql_query['ads_list_id'];

#code for 2nd higest cpi ads

$sec_sql=mysqli_query($con, "select * from ads_lists order by ads_cpi desc limit 1,1");
$sql_sec_query=mysqli_fetch_array($sec_sql);
$ads_sec_name=$sql_sec_query['ads_name'];
$ads_sec_url=$sql_sec_query['ads_url'];
$ads_sec_image=$sql_sec_query['ads_image'];
$ads_sec_cpi=$sql_sec_query['ads_cpi'];
$ads_sec_list_id=$sql_sec_query['ads_list_id'];

?>