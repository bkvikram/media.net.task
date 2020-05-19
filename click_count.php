<?php
#Database Connection
include('config.php');

# Updating Counting

if(isset($_POST['linkId']))
{
   $id = $_POST['linkId'];

    //count increment
    $sql = "UPDATE ads_lists SET click_count = click_count + 1 WHERE ads_list_id = '$id'";
    mysqli_query($con, $sql);
}
?>