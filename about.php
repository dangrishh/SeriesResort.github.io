<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<style>
    body {
        background: url(uploads/blur-background.png);
        background-repeat: no-repeat;
        
        overflow-x: hidden;
       
    }

    #hide-book-button {
        display: none;
    }

    .description {
        position: absolute;
        left: 200px;
        top: 300px;
    
    }
    .follow {
        position: absolute;
        left: 900px;
        top: 300px;
    
    }
    .email {
        position: absolute;
        left: 1400px;
        top: 300px;
    
    }

    .copyright {
        position: absolute;
        left: 658px;
        top: 900px;
        color: white;
    
    }

    #hide-label, .label-series1 {
        display: none;
    }

    #div-visitor {
      display: none;
    }
    
</style>

<body>

    <div class="copyright">
        <strong>Copyright © <?php echo date('Y') ?></strong>
        All rights reserved | Block Is Made With By <b>LadeFranklinDaniel</b> 
    </div>
    
<img src="uploads/info-description.png" class="description" data-aos="fade-in" data-aos-duration="1000">
<img src="uploads/follow.png" class="follow" data-aos="fade-in" data-aos-duration="2000">
<img src="uploads/email.png" class="email" data-aos="fade-in" data-aos-duration="3000">

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

</body>
</html>


