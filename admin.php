<!DOCTYPE html>
<html>
<head>
<style>
<!---------------form css ------------>

     
      h1, h3 {
      font-weight: 400;
      }
      h1 {
      font-size: 32px;
      }
      h3 {
      color: #1c87c9;
      }
      .main-block, .info {
      display: flex;
      flex-direction: column;
      }
      
      form {
      width: 100%; 
      padding: 25px 40px 50px 50px;
      margin-bottom: 20px;
      background:#75a3a3;
      }
      input, select {
      padding: 5px;
      margin-bottom: 20px;
      background: transparent;
      border: none;
      border-bottom: 1px solid #eee;
      }
      input::placeholder {
      color: #eee;
      }
     
      button {
      display: block;
      width: 200px;
      padding: 10px;
      margin: 20px auto 0;
      border: none;
      border-radius: 5px; 
      background: #1c87c9; 
      font-size: 14px;
      font-weight: 600;
      color: #fff;
      }
      button:hover {
      background: #095484;
      }
      @media (min-width: 568px) {
      .info {
      flex-flow: row wrap;
      justify-content: space-between;
      }
      input {
      width: 46%;
      }
      input.fname {
      width: 100%;
      }
      select {
      width: 48%;
      }
      }




<!---------------------end------------->
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #75a3a3;
  color: white;
}
</style>
</head>
<body align="center">
    
    <!---------------------------Database connection ------------------->
    <?php
    include('header.php');
    include('config.php');
    ?>
    
    <!---------------------------Form submition for Ad detais ---------------->
    <?php 
    if(isset($_POST['submit']))
    {
    $ad_anme=$_POST['ad_name'];
    $ad_url=$_POST['ad_url'];
    $ad_cpi=$_POST['ad_cpi'];
    $image = $_FILES['image']['name'];
    $target = "images/".basename($image);
    $url="http://www.glamwoodinteriors.com/mediatest/".$target;
    $sql=mysqli_query($con, "insert into ads_lists(ads_name,ads_url,ads_cpi,ads_image) values('$ad_anme','$ad_url','$ad_cpi','$url')");
    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
    
    }
    ?>
    
    <div class="main-block" align="center">
      <h1>Ad Details Form</h1>
      <form action="#" method="POST" enctype="multipart/form-data">
        <div class="info" align="center">
          <input type="text" name="ad_name" placeholder="Ad Name" required>
          <input type="text" name="ad_url" placeholder="Ad Url" required>
          <input type="text" name="ad_cpi" placeholder="Ad CPI" required>
          <input type="file" name="image" placeholder="select Image" required>
          
        </div>
        <button href="/" class="button" name="submit">Submit</button>
      </form>
    </div>
    
    
    
 <!------------------------------Displaying Ad List ----------------->
    <h2 align="center">Ad List</h2>
    <table id="customers" align="center">
        
  <tr>
    <th>Ad Name</th>
    <th>Ad CPI</th>
    <th>Ad Url</th>
     <th>Ad Image</th>
    <th>Ad Click Count</th>
    
  </tr>
    <?php
    $sql=mysqli_query($con, "select * from ads_lists ORDER BY ads_list_id DESC");
    
    while($row=mysqli_fetch_array($sql))
    {
    ?>


  <tr>
    <td><?php echo $row['ads_name']?></td>
    <td><?php echo $row['ads_cpi']?></td>
    <td width="440px"><?php echo $row['ads_url']?></td>
    <td><img src="<?php echo $row['ads_image']?>" width="50px" height="50px"></td>
    <td><?php echo $row['click_count']?></td>
  </tr>
  <?php
    }
    
    ?>
</table>
<br>
<?php
include('footer.php');
?>
</body>
</html>
