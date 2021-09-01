<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>หน้าหลัก - ครูปรารถนานันท์</title>

    <!-- CSS -->
    <link rel="stylesheet" href="app.css">

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

    
</head>
<body>
    
    <section class="container">
        
        <?php include('navbar.php'); ?>
            

        <!-- home index -->
        <div class="home">
            <div class="home-content">
                <h2>เรียนได้ทุกที่</h2>
                <h2>ออนไลน์ได้ทุกเมื่อ</h2>
                <p>บทเรียนคอมพิวเตอร์ ชั้นมัธยมศึกษาปีที่ 1 วิชา การออกแบบและเทคโนโลยี</p>
                <a href="learn.php" class="btn btn-goto">เข้าสู่บทเรียน</a>
            </div>

            <div class="home-image">
                <img src="img/logo.png" alt="">
            </div>
        </div>


  
      

    </section>

    <?php include('footer.php'); ?>

    <a href="#" class="back-to-top">
        <i class="fas fa-arrow-up"></i>
    </a>

    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

    <!-- navbar js -->
    <script src="js/sub-navbar.js"></script>
    <script src="js/navbarResponsive.js"></script>
</body>
</html>