<!DOCTYPE html>
<html lang="en">
  <head>
   <?php
   include('header.php');
   ?>
    <title>Media Test</title>
    
    <script>
   function addClick(id) {
    let linkId = id;
    console.log(linkId);
    $.ajax({
        method: "POST",
        url: "click_count.php",
        data: {
            "linkId": linkId,
        },
        success() {
            // Update your page count here
        },
    });
}

     </script>

   
  </head>
  <body>
      <?php
      
      include('ads_list_api.php');
      ?>

      <div id="wrapper" class="homepage-1"> <!-- wrapper -->
          
         
          
          <div id="content"> <!-- Content -->
              <div class="container">
                  <div class="home-content">
                     <h3 align="center">Two Ad Slot</h3>
                      <div class="cat-offers">
                          <div class="row">
                               
                              <div class="col-md-4">
                                    <div class="cat-desc">
                                          <div class="cat-inner">
                                              <h4>Higest <span>CPI Ad Slot (<?php echo $ads_name ?>)</span></h4>
                                              
                                          </div>
                                    </div>
                                  <div class="cat-sec-1">
                                      
                                       <a href="<?php echo $ads_url ?>" onclick="addClick(Ad Name-<?php echo $ads_list_id ?>)" target="_blank">
                                      <img src="<?php echo $ads_image ?>" class="img-responsive" alt="Higest cpi ad" style="weight:500px;height:350px"></a>

                                  </div>
                              </div>
                             
                              <div class="col-md-4">
                                    <div class="cat-desc">
                                           <div class="cat-inner">
                                              <h4>2nd Higest <span>CPI (Ad Name:- <?php echo $ads_sec_name ?>)</span></h4>
                                              
                                           </div>
                                    </div>
                                    
                                  <div class="cat-sec-3">
                                      
                                      <a href="<?php echo $ads_sec_url ?>"  onclick="addClick(<?php echo $ads_sec_list_id ?>)"  target="_blank"> 
                                      <img src="<?php echo $ads_sec_image ?>" class="img-responsive" alt="2nd higest cpi ads" style="weight:500px;height:350px"></a>
                                      
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              
              
              
              
          </div> <!-- Content -->
          
          <?php
          include('footer.php')
          ?>

  
  </body>
</html>