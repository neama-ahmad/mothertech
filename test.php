<?php 

/*require_once "config.php";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $role = 'buyer';

    $error = "";
    $check_email = mysqli_query($db, "SELECT email FROM user where email = '$email' ");
    if(mysqli_num_rows($check_email) > 0){
       
      $msg ="هذا الايميل موجود بالفعل يبدو أن لديك حساب سابق";
    }
    else{
        $result = mysqli_query($db, "INSERT INTO user (name,email,phone,address, password,role) VALUES ('$name','$email','$phone','$address', '$password','$role')");
       
      
        $msg="تم إنشاء الحساب فقط قم بتسجيل الدخول "; 
        

    }
   
}

$db->close();
*/

?>

<!DOCTYPE html>
<html lang="ar">

<head>
  <meta charset="UTF8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Tajawal&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.0/css/all.css">
  
  <title>ماذرتك</title>

  <!-- CSS here -->
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/about.css">

  <style>
      
    #login{
      padding-top: 150px;
      height:1200px;
      border:none;
    }
    .forget{
      color:indianred;
      font-size:16px;
      text-align:right;
    }
    .Title{
      color:#d66b7d;
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

  <!--Form-->
  <div class="userForm">
        <form method="POST" action="yourinfo.php" enctype="multipart/form-data">
            <h3 class="bigTitle">أجيبي على هذه الأسئلة حتى يمكننا مساعدتك عزيزتي</h3><br/>
            <input type="text" id="name"  name="name" placeholder="اسمك الكريم" class="forminput"  required >
            <input type="email" id="email"  name="email" placeholder="الايميل" class="forminput" required >
            <input type="tel" id="phone"  name="phone" class="forminput" placeholder="رقم الجوال(إختياري)"  >
            <input type="text" id="month"  name="month" class="forminput" placeholder="في أي شهر بالحمل؟"  required >
            <h4>هل قمت بفحوصات حمل؟</h4>
            <select name="check"  required>
            <?php
            $check = array("نعم","لا");
                foreach($check as $item){
                  echo '<option value="' . strtolower($item) . '">' . $item . '</option>';
                }
            ?>
           </select>
           <input type="text" id="lastcheck"  name="lastcheck" class="forminput" placeholder="في حال جاوبت بنعم..متى آخر مرة قمت بحفص؟" >
           <h4>هل تنناولين أي الفيتامينات؟</h4>
            <select name="vitamin"  required>
            <?php
            $vitamin = array("نعم","لا");
                foreach($vitamin as $item){
                  echo '<option value="' . strtolower($item) . '">' . $item . '</option>';
                }
            ?>
           </select>
           <input type="text" id="vitaminType"  name="vitaminType" placeholder=" إذا جاوبتي بنعم..مانوع الفيتامينات" class="forminput" >
           <h4>هل لديك أي نوع من الامراض؟</h4>
            <select name="diseas"  required>
            <?php
            $diseas = array("نعم","لا");
                foreach($diseas as $item){
                  echo '<option value="' . strtolower($item) . '">' . $item . '</option>';
                }
            ?>
           </select>
           <input type="text" id="diseasType"  name="diseasType" class="forminput" placeholder="في حال جاوبت بنعم..ما اسم المرض؟" >
           <h4>هل تقومين ببعض التمارين؟</h4>
            <select name="exercises"  required>
            <?php
            $exercises = array("نعم","لا");
                foreach($exercises as $item){
                  echo '<option value="' . strtolower($item) . '">' . $item . '</option>';
                }
            ?>
           </select>
           <input type="text" id="sleep"  name="sleep" placeholder="كم ساعه تقضينها للنوم  في اليوم؟" class="forminput" >
           <h4>هل هذا أول حمل لك ؟</h4>
            <select name="first"  required>
            <?php
            $first = array("نعم","لا");
                foreach($first as $item){
                  echo '<option value="' . strtolower($item) . '">' . $item . '</option>';
                }
            ?>
           </select>
           <h4>هل قمتي بفحص الدم؟</h4>
            <select name="blood"  required>
            <?php
            $blood = array("نعم","لا");
                foreach($blood as $item){
                  echo '<option value="' . strtolower($item) . '">' . $item . '</option>';
                }
            ?>
           </select>
           <h4>هل قمتي بفحص موجات فوق صوتيه؟</h4>
            <select name="ultrasound"  required>
            <?php
            $ultrasound = array("نعم","لا");
                foreach($ultrasound as $item){
                  echo '<option value="' . strtolower($item) . '">' . $item . '</option>';
                }
            ?>
           </select>
    
            <input type="submit"  id="btn-mom" name="btn-mom" class="button btn-send" value="إرسال" >
         </form>
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