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
  <link rel="stylesheet" href="css/boxes.css">
  <link rel="stylesheet" href="css/main.css">
  
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

  <!--cover-->
  <div class="cover">
    <img src="https://www.aljazeera.com/wp-content/uploads/2020/03/6a64c194478141ed9a60bd4a61973e66_18.jpeg?resize=770%2C513">
    <h1 class="bigTitle">اعتني بصحتك أثناء الحمل</h1>
    <a href="test.php" class="button">حالة الحمل</a>
  </div>
  
  <div class="bigWeek">
      <div class="week">الشهر 1</div>
      <div class="week">الشهر 2</div>
      <div class="week">الشهر 3</div>
      <div class="week">الشهر 4</div>
      <div class="week">الشهر 5</div>
      <div class="week">الشهر 6</div>
      <div class="week">الشهر 7</div>
      <div class="week">الشهر 8</div>
      <div class="week">الشهر 9</div>
      <div class="week">الشهر 10</div>
      <div class="week">الشهر 11</div>
      <div class="week">الشهر 12</div>
    </div>
  <!--info-->
  <div class="info" id="about">
    <h1 class="Title">عن ماذرتك</h1>
    <h3>نحن هنا نعتني بالأمهات الجدد ونهيئهم لدخول هذا العالم الرائع بدون خوف تجدين لدينا كل ماتحتاجينه بخصوص فترة حملك من شهر الاول الى وقت انتهاء فترة الرضاعه للطفلك</h3>
    <!--<video controls><source src="#" type="video/mp4"></video>-->

  </div>

  <div class="bigevents" >
    <h2 class="Title" >تجارب أمهات</h2>
    <div class="row">
       <div class="column"><div class="imgWrapper"><img src="img/logo.png"></div></div>
       <div class="column"><div class="imgWrapper"><img src="img/logo.png"></div></div>
       <div class="column"><div class="imgWrapper"><img src="img/logo.png"></div></div>
       <div class="column"><div class="imgWrapper"><img src="img/logo.png"></div></div>
    </div>
  </div>
  <script src="//code.jivosite.com/widget/noKbthXTWU" async></script>


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