<!DOCTYPE html>
<html>
    <head>
        <title>yoga</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900');
    .top{
        height:500%;
        width:100%;
        background-color: #dfb2f4;
        z-index: -10;
    }
    .top1{
       height:600%;
       width:100%;
       background-color: #dfb2f4;
       display: flex;
       justify-content: center;
       align-items: center;
    }

.top-head{
    display: flex;
    justify-content: center;
    align-items: center;
    color:black;
    font-size: 47px;
    font-style:normal;
    padding-top:10%;
    margin:0;
}
.box{
     position: relative;
     width:500px;
     border:1px solid #000;
     margin:0 auto;
     perspective: 1000px;
     
}
.box .box-img img{
   
    border-radius: 300px;
}
.box .box-img{
    transform: rotateY(0);
    transition:all 0.5s ease-in-out 0s;
}
.box:hover .box-img{
    transform: rotateY(-90deg);
}
.box-content{
     position: absolute;
     width:100%;
     height:100%;
     top:0;
     left:0;
     padding: 150px 20px;
     border:1px solid black;
     box-sizing: border-box;
     text-align: center;
     color:#fff;
     background: rgba(0,0,0,0.7);
     transform: rotateY(90deg);
     transition: all 0.5s ease-in-out 0s;
}
 .box:hover .box-content{
    transform: rotateY(0);
 }
 .container{
    display: flex;
    overflow-x: auto;
    white-space: nowrap;
    justify-content: flex-start; /* Adjust to left-align the cards */
    align-items: center;
    flex-wrap: nowrap;
    gap: 20px;
    padding: 20px 0;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
    padding-left: 20px;
    scrollbar-width: thin; /* Firefox */
    -ms-overflow-style: none; /* Internet Explorer/Edge */
    
}

.container::-webkit-scrollbar-thumb {
    background-color: transparent; /* Make the thumb (dragging area) transparent */
}
.container::-webkit-scrollbar {
    width: 6px; /* Adjust the width as needed */
}
.container .card{
    position: relative;
    display: flex;
    flex: 0 0 auto;
    justify-content: center;
    align-items: flex-start;
    width: 400px;
    height:380px;
    background:#fff;
    border-radius: 20px;
    box-shadow: 0 35px 80px rgba(0,0,0,0.15);
    transition: 0.5s;
}
.container .card:hover{
      height:400px;
      overflow: visible;

}
.container .card .imgbx{
    position: absolute;
    top: 20px;
    width: 200px;
    height: 200px;
    background: #333;
    border-radius: 12px;
    overflow: hidden;
    transition: 0.5s;
    transform: translateY(0);
}
.container .card:hover .imgbx{
    top:-100px;
    scale:0.75;
    box-shadow: 0 15px 45px rgba(0,0,0,0.2);
    z-index: 8;
}
.container .card .imgbx img{
    position: absolute;
    top:0;
    left:0;
    width:100%;
    height:100%;
    object-fit: cover;
}

.container .card .content{
    position: absolute;
    top:252px;
    width:450px;
    padding:0 30px;
    height:20px;
    overflow:hidden;
    text-align:center;
    transition:0.5s;
}
.container .card:hover .content{
    top:130px;
    height:300px;
}
.container .card .content h3{
    font-size: 1.4em;
    font-weight:700;
    color:var(--clr);
}
.container .card .content p{
    color:#333;
}
.container .card .content a{
    position: relative;
    top:15px;
    display: inline-block;
    padding: 12px 25px;
    background: var(--clr);
    color:#fff;
    font-weight: 500;
    text-decoration: none;
    border-radius: 8px;
}
.cls-1{
    height: 530px;
    margin-top: 15px;
    width: auto;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color:none;
    border-radius: 50px;
  } 
  #ref-vid{
    font-size: 50px;
    font-weight: 800;
    color:rgb(17, 2, 8) ;
    display: flex;
    align-items: center;
    justify-content: center;
}
/*.ben{
    height:80px;
       width:100%;
       background-color: #dfb2f4;
       display:flex; 
       justify-content:center;   
}*/
.head1{
       height:900px;
       width:100%;
       background-color: #dfb2f4;
       padding-left:500px;
       padding-top:15px;
}
.img-1{
       margin-top:8%;
              padding-left:25%;
     
} 
.img-3{
   margin-top:3%;
   margin-left:14%;
}
.ben{
       height:600px;
       width:100%;
       background-color: #dfb2f4;    
}
.ben h1{
   padding-top:80px;
   font-size:60px;
}

</style>
<body>
    <div class="top1">
        <h1 class="top-head">MEDITATION</h1>
    </div>
    <br><br>
      <center><h1><b>7 CHAKRAS OF MEDITATION<b></b></h1></center>
    <div class="box">
   <div class="box-img"><img src="med2.jpeg" width=500 height=500 alt="meditation">
    </div>
    <div class="box-content">
        <p>
        The chakras are subtle energy centres that are aligned with
        the Central channel (Sushumnānāḍī) of the Kunḍalinī system. 
        There are seven main Kundalini chakras that are distributed along the Central channel.
        They provide subtle-energy to the functions of the body organs, mind and intellect. 
        However, they are primarily associated with the subtle-body of a person.
        Their names, in descending order from upwards to below, are as follows:</p>
    </div>
    </div><br><br><br>
<div class="top" height="5%" width="100%"><br><br><br><br><br>
    <div class="container">
        <div class="card" style="--clr:#c02e09;">
            <div class="imgbx">
                <img src="root.jpeg">
            </div>
            <div class="content">
                <h3>1.ROOT CHAKRA</h3>
                <p style="font-size:13px;"><pre>The root chakra,or Muladhara,is located at 
the base of your spine.It provides you with a base
or foundation for life,and it helps you feel 
grounded and able to withstand challenges.Your
root chakra is responsible for your sense of
 security and stability.</p>
<a href="https://en.wikipedia.org/wiki/Muladhara">Read More</a></pre>
            </div> 
        </div>
        <div class="card" style="--clr:#f39418;">
            <div class="imgbx">
                <img src="sacral.jpeg">
            </div>
            <div class="content">
                <h3>2.SACRAL CHAKRA</h3>
                <p><pre>The Sacral Chakra is the second energy center in
the body.It is the energy center for the vital force
which is the energy of circulation.It is associated
with the element of water and the vibrant color 
orange.This energy assists in letting go,
accepting change,transformation in life
<a href="https://en.wikipedia.org/wiki/Svadhishthana">Read More</a></p></pre>
            </div>
        </div>
        <div class="card" style="--clr:#e9e62d;">
            <div class="imgbx">
                <img src="solar.jpeg">
            </div>
            <div class="content">
                <h3>3.SOLAR PLEXUS CHAKRA</h3>
                <p><pre>The Solar Plexus Chakra,also known as 
the Manipura Chakra, is the third chakra in
the 7 chakra system. This energy center governs 
our ability to be confident, assertive,and make
decisions from a place of inner wisdom.It is also
the key to unlocking our personal power. 
<a href="https://en.wikipedia.org/wiki/Manipura">Read More</a></p></pre>
            </div>
        </div>
        <div class="card" style="--clr:#3c9712;">
            <div class="imgbx">
                <img src="heart.jpeg">
            </div>
            <div class="content">
                <h3>4.HEART CHAKRA</h3>
                <p><pre>It is the fourth primary chakra and serves as
our center of love for oneself and others,
compassion,empathy and forgiveness.It is
the source of deep and profound truths that 
cannot be expressed in words.</pre></p>
                <a href="https://en.wikipedia.org/wiki/Anahata">Read More</a>
            </div>
        </div>
        <div class="card" style="--clr:#0c69e2;">
            <div class="imgbx">
                <img src="throat.jpeg">
            </div>
            <div class="content">
                <h3>5.THROAT CHAKRA</h3>
                <p><pre>The throat chakra is situated in the centre of the
neck at the height of the thyroid gland which
regulates processing of energy in the body 
through temperature, growth and metabolism.
It is also linked to the mouth,jaws,tongue,
pharynx,palate,shoulders and neck.
<a href="https://en.wikipedia.org/wiki/Vishuddha">Read More</a></p></pre>
            </div>
        </div>
        <div class="card" style="--clr:#574c97;">
            <div class="imgbx">
                <img src="thirdeye.jpeg">
            </div>
            <div class="content">
                <h3>6.THIRD EYE CHAKRA</h3>
                <p><pre>The third eye chakra witnesses the internal screen
where memory and fantasy, images and archetypes,
intuition and imagination are displayed.From this,
 we create meaning and consciousness to everyday 
life.The third eye chakra is our gut feeling,our 
inner teacher, and our strong intuition.
<a href="https://en.wikipedia.org/wiki/Third_eye">Read More</a></p></pre>
            </div>
        </div>
        <div class="card" style="--clr:#38149c;">
            <div class="imgbx">
                <img src="crown1.jpeg">
            </div>
            <div class="content">
                <h3>7.CROWN CHAKRA</h3>
                <p><pre>This is the highest of the seven chakras.It is also
the lightest and most spiritual.This inspiring 
energy centre is on the top of your head,
pointing upwards, rather like the shining halo of 
light around the head of saints.This chakra is
linked with a beautiful,ethereal violet-white colour.</pre></p>
                <a href="https://en.wikipedia.org/wiki/Sahasrara">Read More</a>
            </div>
        </div>    
    </div>
    </div>
    <p id="ref-vid"> Reference Video</p>
    <div class="cls-1">
    <iframe width="760" height="500" src="https://www.youtube.com/embed/Kzr0R5YYtys" frameborder="0" allowfullscreen></iframe>
     </div><br><br>
     <div class="ben">
         <center><h1>Benifits of Meditation</h1></center>
        <div class="img-3">  <img src="beni.webp" align="center" hspace="70px" width=860 height=400 ></div>
     </div>
<body>
<html>
