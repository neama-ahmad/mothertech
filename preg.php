<!DOCTYPE html>
<html lang="ar">

<head>
  <meta charset="UTF8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Tajawal&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.0/css/all.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css">
  
  <!--pwa-->
  <link rel="manifest" href="/manifest.json">
  <title>ماذرتك</title>
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/boxes.css">
</head>
<style>
    body {
        opacity: 0;
        transition: opacity 3s;
    }
    h3{
        color: #444;
        padding:0px;
    }
    h2{
      color:#3e6cad;
    }
    .bigTitle {
        z-index:1;
        padding:20px 40px;
        line-height:2.5;
    }
    .info{
        flex-direction:row;
       background-color:#fff;
       border:1px solid #ddd;
    }
    
    .last{
        flex-direction:column
    }
    .btn{
      border:3px solid #3e6cad;
      color:#111;
      background-color:#fff;
      padding:9px 30px;
    }
   .conter{
      display: flex;
       flex-direction: column;
       align-items: center;
       justify-content: center;
       height:350px;
       width:100%;
    }
    .numbers{
    
       display: flex;
       flex-direction: column;
       align-items: center;
       justify-content: center;
       height:300px;
       width:40%;
       margin:12px;
       padding:20px;
       color:#3e6cad
    }
    .numbers h4{
      color:#555;
      font-size:18px;
      padding:20px;
    }
    .line{
       padding-bottom: 0px;
       margin-bottom: 0px;
    }

    .fas , .fab{
      font-size: 50px;
      color: #3e6cad
    }
    .ex{
        font-size: 18px;
        color: #666;
    }
    .last img{
        height:80%;
        width:50%;
    }
    @media(max-width:900px){
      
    .h2{
      font-size:24px;
    }
    .serv{
        height: 500px;
    }

    .last{
      height:450px;
    }

    .fas , .fab{
      font-size: 35px;
    }
    .ex{
        font-size: 16px;
    }
    .info .button{
        padding: 12px 30px;
        font-size: 16px;
    }
    .h2{
      font-size:24px;
    }

    .conter{
      display: flex;
       flex-direction: column;
       align-items: center;
       justify-content: center;
       height:300px;
       width:100%;
    }
    .numbers{
       display: flex;
       flex-direction: column;
       align-items: center;
       justify-content: center;
       height:200px;
       width:50%;
       color:#3e6cad
    }

    h1{
      font-size:26px;
    }
    
    .title{
      font-size:22px;
    }

    .last img{
        height:100%;
        width:100%;
    }

  
    
  }
</style>

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


  
  <div class="cover">
      <h1 class="bigTitle">هل انتى ام جديده ؟ وتريدين معرفة كل مايخص رحلتك الجديده لعالم الأمومه نحن معك خطوه بخطوه من بداية حملك إلى ان تلدي بسلامه </h1>
       <img src="https://static.independent.co.uk/s3fs-public/thumbnails/image/2019/06/13/10/pregnant-woman-main.jpg?width=990&auto=webp&quality=75">
  </div>

  
  <div class="bigevents" >
    <h2 class="Title" >أدوات</h2>
      <div class="row">
       <div class="column">
          <i class="fas fa-clipboard"></i>
          <h4 class="ex">ورقة عمل خطة عمل الولادة</h4>
          <a href="#" class="button btn">أحصلي على الورقة</a>
        </div>  
        <div class="column">
          <i class="fas fa-tasks"></i>
          <h4 class="ex">اختبار صحتك مع الحمل</h4>
          <a href="test.php" class="button btn">أبدأي الإختبار</a>
        </div>
      </div>
  </div>

  <div class="info last">
    <h2>موضوعات</h2>
    <div class="conter">
      <div class="numbers">
      <h4>غذاء الحامل</h4>
      <img src="http://images.agoramedia.com/wte3.0/gcms/Eating-Vegetarian-and-Vegan-During-Pregnancy-722x406.jpg?width=414">
      </div>
      <a href="#">قراءة المقالة</a>
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