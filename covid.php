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
  <style>
    .info{
      height:800px;
      background-color:#fff;
      border-bottom:1px solid #ddd;
      padding:12px 100px;
      line-height:2;
    }
    .info h2{
      text-align:center;
    }
    .info p{
      text-align:center;
      font-size:18px;
    }
    @media(max-width:780px){
      .info{
      height:1000px;
      background-color:#fff;
      border-bottom:1px solid #ddd;
      padding:12px 40px;
      line-height:2;
    }
    .info h2{
      text-align:center;
      font-size:20px;
    }
    .info p{
      text-align:center;
      font-size:16px;
    }

    }
  </style>
  
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


  <!--info-->
  <div class="info">
    <h2>عدوى كوفيد-19  والولادة المبكرة</h2>
    <p>أظهرت العديد من الدراسات أن معدل الولادة المبكرة كان أعلى لدى الحوامل المصابات بعدوى كوفيد-19 مقارنة بعامة السكان. إلا أن الأدلة في هذه المرحلة من الجائحة غير حاسمة حول ما إذا كانت عدوى كوفيد-19 مرتبطة بالولادة المبكرة العفوية أو ما إذا كانت الولادات المبكرة نتيجة لقرارات طبية اُتخذت للولادة مبكرًا في إطار علاج كوفيد-19</p>
    <br/></br>
    <h2>انتقال كوفيد-19 من الحوامل إلى أجنتهن أثناء الحمل</h2>
    <p>على الرغم من وجود حالات بسبب انتقال سارس-كوفيد-2 من الأم إلى الجنين أثناء الحمل، إلا أن غالبية البيانات المنشورة لم تجد الفيروس في الأطفال حديثي الولادة أو المشيمة أو السائل الأمنيوسي أو حليب الثدي للأمهات المصابات بـكوفيد-19. أما بالنسبة للانتقال العمودي للعدوى (من الأم إلى الجنين قبل الولادة)، يبدو هذا أمرًا غير شائع، إلا أن وقوعه يرتبط عمومًا بحالات الولادة التي تتم خلال أسبوعين من العدوى.  </p>
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