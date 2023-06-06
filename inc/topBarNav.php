
<!-- Navbar -->
<style>
       
    @font-face {
      font-family: 'Poppins-Bold';
      src: url(Poppins-Bold.ttf);
      font-weight: 700;
    }


    #top-Nav{
      position: fixed;
      top: 2.3em;
      

      margin-left: 400px;
      width: 993px;
      height: 107px;
      z-index: 1;
     

      left: calc(50% - 1806px/2 - 2px);
      border-radius: 50px;
      background: linear-gradient(206.01deg, rgba(255, 232, 232, 0.5) -93.22%, rgba(255, 232, 232, 0) 138.37%);
      backdrop-filter: blur(46.5px)

      
    }

    .text-sm .layout-navbar-fixed .wrapper .main-header ~ .content-wrapper, .layout-navbar-fixed .wrapper .main-header.text-sm ~ .content-wrapper {

      margin-top: calc(3.6) !important;
      padding-top: calc(3.2em) !important

      font-family: 'Poppins-Bold';
      
     
  }

  .nav-txt {
    color:white;
    font-size: 25px;
    margin-left: 0px;
    
  }
  .nav-link {
    margin-bottom: 25px;
    margin-left: 80px;
    
  }
  
  ul {
    position: absolute;
    top: 30px;
    margin-left: 40px;
    
    list-style: none;
    display: flex;
    
    z-index: 2;
  }


     
</style>
      
      <nav class="main-header navbar navbar-expand navbar-light border-0 text-sm " id='top-Nav'>
        
        <div class="container">
        
          <div class="collapse navbar-collapse order-3" id="navbarCollapse">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
              <li>
                <a href="?page=view_room&id=2" class="nav-link <?= isset($page) && $page =='home' ? "active" : "" ?>"><span class="nav-txt">HOME</span></a>
              </li>
              <li>
                <a href="./?page=rooms" class="nav-link <?= isset($page) && $page =='rooms' ? "active" : "" ?>"><span class="nav-txt" id="features-button">FEATURES</span></a>
              </li>
              <li>
                <a href="./?page=contacts" class="nav-link <?= isset($page) && $page =='contacts' ? "active" : "" ?>"><span class="nav-txt">CONTACTS</span></a>
              </li>

              <li>
                <a href="./?page=about" class="nav-link <?= isset($page) && $page =='about' ? "active" : "" ?>"><span class="nav-txt">ABOUT</span></a>
              </li>
              
            </ul>

            
          </div>
         
         
          </div>
        </div>
      </nav>
      <!-- /.navbar -->
    