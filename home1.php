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

.right{
font-size:100px;
margin-left:18%;
margin-top:12%;
}
.right1{
margin-left:53%;
font-size:20px;
margin-top:-9%;
color:purple;

}
.right h1{
font-size:100px;
margin-top:12%;
margin-right:12%;
}
.last{
display:flex;
}
.last1{
  margin-top:6%;
  margin-left:8%;
  border-radius:100%;
}
</style>
</head>
<body>
      <header>
      <a href="#" class="logo">YogaTutor</a>
      <nav>
        <a href="#home" class="active">Home</a><a href="abt.html">About Us</a><a href="contactus.php">Contact Us</a>
        <a href="phonepe.php">Register</a></nav></header>
        <div class="last"><div align="left" class="last1"><img src="sony1.jpeg" alt="yoga postures" width=500 height=500></div>
 <div class="right"> <h1 align="right">YOGA<BR>TUTOR</h1></div></div>
 <div class="right1"><h2>--Elevate your being with the practice of yoga--</h2></div>


</body>
</html>
