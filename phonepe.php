<?php
//error_reporting(E_ALL);
//ini_set('display_errors',1);
  // {
   
    if($_SERVER['REQUEST_METHOD']=='POST'){
     include 'conn.php';
    $email=$_POST['email'];
    $password=$_POST['password'];
    $tid=$_POST['tid'];
             $sql1="insert into `phonepe` values('$email','$password','$tid')";
    $result1=mysqli_query($conn,$sql1);
    if($result1){
        header('location:home.php');
    }
    else{
        echo "not";
    }
          }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="phonepe.css">
    <title>Registration</title>
    <style>
      .card-body form{
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    padding: 0 40px;
    height: 100%;
    width:73%;
}

.card-body input{
    background-color: #eee;
    border: none;
    margin: 8px 0;
    padding: 10px 15px;
    font-size: 13px;
    border-radius: 8px;
    width: 100%;
    outline: none;
}

.form-container{
    position: absolute;
    top: 0;
    height: 100%;
    transition: all 0.6s ease-in-out;
}
.header{
  font-size:26px;
}
.header h3{
   font-size:33px;
}
.footer{
  background-color:#dfb2f4;
  color:#000;
}
    </style>
</head>

<body>

    <div id="card" class="card">
        <header>
            <h3>Registration Form</h3>
        </header>
        <div class="card-body">
           <form method="post" onsubmit="return validateform()">
           <pre>
<b>Email:</b>   <input type="email" placeholder="Email" name="email" id="email"required>
<b>
Password:</b>  <input type="password" placeholder="Password" name="password" required><br>
<b>Payment Gateway:</b><br><div class="form">&nbsp;<input type="radio"  onclick="showqr()">&nbsp; &nbsp;<b>show QR</b>
 &nbsp; <input type="radio"  onclick="hideqr()"> &nbsp; &nbsp;<b>hide QR</b></div></pre>
     <h3><b>SCAN AND PAY 50Rs </b></h3><br>
               <img src="qr1.jpeg" id="qr" height=100 width=100>
     <pre><b>Transaction Id: </b><input type="text" placeholder="Enter Transaction Id" name="tid" required></pre>
              
    <script>
        function showqr(){
            document.getElementById('qr').style.display='block';
        }
        function hideqr(){
            document.getElementById('qr').style.display='none';
        }
    </script>
         <div class="footer">   <input type="submit" value="submit"></div>
        </form>  </div>
    </div>

    <script src="phonepe.js"></script>
</body>

</html>
