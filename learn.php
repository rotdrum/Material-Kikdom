<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เข้าสู่บทเรียน - ครูปรารถนานันท์</title>

    <!-- CSS -->
    <link rel="stylesheet" href="app.css">

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
</head>
<body>

    <section class="container">

        <?php include('navbar.php'); ?>


        <section class="content-edu">
            <h1>วิชา การออกแบบและเทคโนโลยี ม.1</h1>

            <div class="accordion">
                <div class="accordion__item">
                    <div class="accordion__header" style="text-decoration: none;" onclick='window.location="learnplan.php";' >แผนการจัดการเรียนรู้</div>
                </div>    
                <div class="accordion__item">
                    <div class="accordion__header" style="text-decoration: none;" onclick='window.location="";' >แบบทดสอบก่อนเรียน (Google Form)</div>
                </div>
                <div class="accordion__item">
                    <div class="accordion__header">หน่วยที่ 1 เทคโนโลยีในชีวิตประจำวัน</div>
                    <div class="accordion__body">
                        <a class="accordion__link" href="learn1.php">1) เทคโนโลยีในชีวิตประจำวัน​</a><br>
                        <a class="accordion__link" href="learn1next.php">2) เทคโนโลยีในชีวิตประจำวัน​ (ต่อ)</a><br>
                    </div>
                </div>
                <div class="accordion__item">
                    <div class="accordion__header">หน่วยที่ 2 ระบบเทคโนโลยี</div>
                    <div class="accordion__body">
                        <a class="accordion__link" href="learn2.php">1) ระบบเทคโนโลยี</a><br>
                        <a class="accordion__link" href="learn2next.php">2) ระบบเทคโนโลยี (ต่อ)</a><br>
                    </div>
                </div>
                <div class="accordion__item">
                    <div class="accordion__header">หน่วยที่ 3 การจัดการข้อมูลสารสนเทศ</div>
                    <div class="accordion__body">
                        <a class="accordion__link" href="learn3.php">1) การจัดการข้อมูลสารสนเทศ</a><br>
                        <a class="accordion__link" href="learn3next.php">2) การจัดการข้อมูลสารสนเทศ (ต่อ)</a><br>
                    </div>
                </div>
                <div class="accordion__item">
                    <div class="accordion__header" style="text-decoration: none;" onclick='window.location="";' >แบบทดสอบหลังเรียน (Google Form)</div>
                </div>
                
               
    
               
            </div>


        </section>
    </section>



    </br>
    </br>
    </br>
    </br>
    </br>
    <?php include('footer.php'); ?>



    <a href="#" class="back-to-top">
        <i class="fas fa-arrow-up"></i>
    </a>

    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

    <!-- navbar js -->
    <script src="js/sub-navbar.js"></script>
    <script src="js/navbarResponsive.js"></script>
    <script src="js/accordion.js"></script>
    
</body>
</html>