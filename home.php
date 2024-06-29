<!DOCTYPE html>
<html>
<head>
<title>Head</title>
<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');
header{
   margin:0;
   padding:0;
   box-sizing:border-box;
   font-family:'Poppins',sans-serif;
 } 
 header{
    position:fixed;
    top:0;
    left:0;
    width:100%;
    padding: 20px 120px;
    background: #dfb2f4;
    display:flex;
    justify-content:space-between;
    align-items:center;
    z-index:100;
}
.logo{
   font-size:25px;
   color:black;
   text-decoration:none;
   font-weight:600;
 }
 nav a{
   font-size:18px;
   color:black;
   text-decoration:none;
   font-weight:500;
   margin-left:35px;
   transition:.3s;
 } 
 nav a:hover,
 nav a.active {
    color:white;
 }
.top{
  display:flex;
}
.top1{
  background-color:#dfb2f4;
  width:200px;
  height:235px;
  margin-left:60px;
  /*transition: .3s;*/
  margin-top:10px;
  transition:transform 0.5s;
}
.top1:hover{
  /*  transform:scale(0.9);*/
  transform:translateY(-10px);
}
.top img{
  padding-left:10px;
  padding-top:10px;
 border-radius: 10px 100px / 120px;
  }
.top h1{
   padding-bottom:10px;
   font-size:28px;
}
  #top1{
  margin-top:90px;
  }
  #top2{
  margin-top:-120px;
  margin-left:70px;
  }
.right{
margin-left:20%;
font-size:100px;

}
.right1{
margin-left:10%;
font-size:20px;
margin-top:5%;
color:purple;

}
.right h1{
font-size:100px;
padding-left:10px;
}
</style>
</head>
<body>
      <header>
      <a href="#" class="logo">YogaTutor</a>
      <nav>
        <a href="#home" class="active">Home</a><a href="abt.html">About Us</a><a href="contactus.php">Contact Us</a>
        <a href="first1.php">Logout</a></nav></header>
<div class="top" id="top1">
<div class="top1" onclick="fun1()">
<img src="surya1.jpg" alt="salutations" width=180 height=170>
<center><h1>Salutations</h1></center>
</div>
<div class="top1" onclick="fun2()"><img src="posture1.jpg" alt="yoga postures" width=180 height=170>
 <center><h1>Yoga Postures</h1></center>
</div> <div class="right"> <h1 align="right">YOGA<BR>TUTOR</h1></div></div>
<div class="top" id="top2">
<div class="top1" onclick="fun3()">
<img src="meditation.jpeg" alt="meditation" width=180 height=170>
<center><h1>Meditation</h1></center> 
</div>
<div class="top1" onclick="fun4()">
<img src="prana1.jpeg" alt="meditation" width=180 height=170>
<center><h1>Pranaayama</h1></center> 
</div><div class="right1"><h2>--Elevate your being with the practice of yoga--</h2></div></div>
<script>
        function fun1(){
            window.location.href='surya1.php';
        }
        function fun2(){
            window.location.href='yogapostures.html';
        }
        function fun3(){
            window.location.href='medi.php';
        }
        function fun4(){
            window.location.href='prana.html';
        }
        </script>

</body>
</html>
