<?php require_once('./config.php'); ?>
 <!DOCTYPE html>
<html lang="en" class="" style="height: auto;">

<head>
  <title> Series 1 Resort </title>
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>
<style>

 

* {
  border: none;
}

@font-face {
  font-family: 'Poppins-Bold';
  src: url(uploads/Poppins-Bold.ttf);
  font-weight: 900;
}



body {
  background: url(uploads/bg.png);
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;

  overflow-x: hidden;
}

#header {
  
  height:100vh;
  width:calc(100%);
  position:relative;
  top:-1em;
  
}

#header:before {
  content:"";
  position:absolute;
  height:calc(100%);
  width:calc(100%);
  
}

#header>div {
  position:absolute;
  height:calc(100%);
  width:calc(100%);
  z-index:2;
}

#top-Nav a.nav-link.active {
  color: #343a40;
  font-weight: 900;
  position: relative;
}

#top-Nav a.nav-link.active:before {
  content: "";
  position: absolute;
  width: 33.33%;
  left: 33.33%;
  bottom: 0;
}

.label-series1 {
  position: absolute;
 
  left: 490px;
  top: 280px;

  

}






</style>
<?php require_once('inc/header.php') ?>




  <body class="layout-top-nav layout-fixed layout-navbar-fixed" style="height: auto;">
  
  <img src="uploads/series1-label.png" class="label-series1"></img>

    <div class="wrapper">
     <?php $page = isset($_GET['page']) ? $_GET['page'] : 'home';  ?>
     <?php require_once('inc/topBarNav.php') ?>
     <?php if($_settings->chk_flashdata('success')): ?>
      <script>
        alert_toast("<?php echo $_settings->flashdata('success') ?>",'success')
      </script>
      <?php endif;?>    

      <!-- Content Wrapper. Contains page content -->
     
      <?php 
          $rooms = $conn->query("SELECT * FROM room_list where delete_flag =0 and status = 1 order by name asc");
          while($row = $rooms->fetch_assoc()):
          ?>
           
        <?php endwhile; ?>

        <section class="content ">
          <div class="container">
            <?php 
              if(!file_exists($page.".php") && !is_dir($page)){
                  
              }else{
                if(is_dir($page))
                  include $page.'/index.php';
                else
                  include $page.'.php';

              }
            ?>
          </div>
        </section>
        
   
        <div class="modal fade rounded-0" id="confirm_modal" role='dialog'>
    <div class="modal-dialog modal-md modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header rounded-0">
        <h5 class="modal-title">Confirmation</h5>
      </div>
      <div class="modal-body rounded-0">
        <div id="delete_content"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id='confirm' onclick="">Continue</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
      </div>
    </div>
  </div>
  <div class="modal fade rounded-0" id="uni_modal" role='dialog'>
    <div class="modal-dialog modal-md modal-dialog-centered rounded-0" role="document">
      <div class="modal-content rounded-0">
        <div class="modal-header rounded-0">
        <h5 class="modal-title"></h5>
      </div>
      <div class="modal-body rounded-0">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id='submit' onclick="$('#uni_modal form').submit()">Save</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
      </div>
      </div>
    </div>
  </div>
  <div class="modal fade rounded-0" id="uni_modal_right" role='dialog'>
    <div class="modal-dialog modal-full-height  modal-md" role="document">
      <div class="modal-content">
        <div class="modal-header rounded-0">
        <h5 class="modal-title"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span class="fa fa-arrow-right"></span>
        </button>
      </div>
      <div class="modal-body rounded-0">
      </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="viewer_modal" role='dialog'>
    <div class="modal-dialog modal-md" role="document">
      <div class="modal-content">
              <button type="button" class="btn-close" data-dismiss="modal"><span class="fa fa-times"></span></button>
              <img src="" alt="">
      </div>
    </div>
  </div>
        

        
</div>
      <!-- /. CONNECTED ITO SA RESEVATION -->
      
   

      <?php require_once('inc/footer.php') ?> 
 
  
      <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

  </body>
</html>
