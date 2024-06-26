<!DOCTYPE html>
<html lang="ar">

<head>
  <meta charset="UTF8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Tajawal&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.0/css/all.css">
  
  <!--pwa-->
  <title>ماذرتك</title>
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/boxes.css">
</head>

<body  onload="document.body.style.opacity='1' ">
  
  <!--menu-->
  <header class="header">
    <a href="index.php" class="logo">ماذرتك</a>
    <input class="menu-btn" type="checkbox" id="menu-btn" />
    <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
    <ul class="menu">
    <li class="menu-choice"><a href="index.php" class="active">الرئيسية</a></li>
      <li class="menu-choice"><a href="exp.php">استشارة مختص</a></li>
      <li class="menu-choice"><a href="preg.php">حمل</a></li>
      <li class="menu-choice"><a href="#">رضاعة</a></li>
      <li class="menu-choice"><a href="covid.php">كوفيد19</a></li>
      <li class="menu-choice social-top"><a href="#" >تسجيل الدخول</a></li>
    </ul>
  </header>


  <!--Form-->
  <div class="bigevents" >
    <h2 class="Title" >استشارين</h2>
    <div class="row">
       <div class="column"><div class="imgWrapper"><img src="https://images.all-free-download.com/images/graphicthumb/vector_doctor_design_elements_set_533210.jpg"></div><h3>أخصائي نساء وولادة</h3></div>
       <div class="column"><div class="imgWrapper"><img src="https://images.all-free-download.com/images/graphicthumb/vector_doctor_design_elements_set_533210.jpg"></div><h3>أخصائي تغذيه</h3></div>
    </div>
  </div>

  <!--footer-->
  <div  class="footer" id="footer">    

    <div class="middle">
      
      <div  class="social">
        <a href="#" class="fab fa-facebook" target="_blank"></a>
        <a href="#" class="fab fa-twitter" target="_blank"></a>
        <a href="#" class="fab fa-whatsapp" target="_blank"></a>
        <a href="#" class="fab fa-instagram" target="_blank"></a>
      </div>
    </div>      
  </div>

  <div  class="copyright">
    <p> جميع الحقوق محفوظه &copy; <span id="year"></span>&nbsp;<a href="index.php">لماذرتك</a></p>
    <script>document.getElementById("year").innerHTML=(new Date().getFullYear())</script>
  </div>


</body>

</html>