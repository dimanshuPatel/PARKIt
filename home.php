<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <!-- <link rel="stylesheet" href="register.css">
    <link rel="stylesheet" href="login.css"> -->
    <style>
        *{
    padding:0px;
    margin:0px;

    /* background-color: #E0D7C7; */

}   
/* .main .box{
    height: 80vh;
    width: 100%;
    opacity: 0.0;
    background-color: #000000;
} */

body{
    /* background-image: url('https://www.webplanex.com/wp-content/uploads/2022/05/Famous-car-parking-apps-500x500.jpg');

    background-repeat: no-repeat;
    background-size:cover;
     */
    /* margin-top: 2rem; */
} 

img{
    height: 40%;
    width: 50%;
    cursor: pointer;
    display: flex;
    flex-wrap: wrap;
    margin-left: 25%;
    margin-top:5%;
}
  nav{
    display: flex;
    justify-content: space-around;
    align-items: center;
    flex-wrap: wrap;
    background-color: #F3F3F3;
    padding: 0px;
    border-radius: 7px;
}

header{
    position: sticky;
    top: 0px;

}

nav:hover{
    background: #E0DEFF;
    color: #E0D7C7;
}
ul {
    list-style: none;
    display: flex;
    flex-wrap: wrap;
}

li{
    /* display: flex;
    flex-wrap: wrap; */
    padding: 10px;
    margin: 10px;
    border-radius: 30px;
    -webkit-border-radius: 30px;
    -moz-border-radius: 30px;
    -ms-border-radius: 30px;
    -o-border-radius: 30px;
    /* background-color: #E0D7C7; */
}

li:hover{
    background-color:#352CE8 ;
    color: white;
    cursor: pointer;
}

h1{
    text-align: center;
    color: #3e2a07;
    display: flex;
    justify-content: center;
    /* margin-left: 37%; */
}


a{
    color: #3e2a07;
    text-decoration: none;
}


figure{
   background-image: url(car\ p1.jpg);
   background-size: cover;
   height: 50vh;
   width: 100vw;
   /* filter:opacity(0.9) ;
   -webkit-filter:opacity(0.9) ; */
}

p{
   text-align: center;
   color: black;
   text-overflow: clip;
   padding-top: 8%;
   font-size: 2em;
   font-weight: 900;
}

/* .banner{
    color: darkorange;
    text-align: center;
    justify-content: center;
    align-items: center;
} */

section{
    background-color: #F3F3F3 ;
    text-align: center;
    color: #3e2a07;
    padding: 30px;
    margin: 30px;
}

footer{
    background-color:#F3F3F3;
    color: darkorange;
}
.bottom{
    display: flex;
    padding: 20px;
   justify-content: center;
   text-align: center;
   align-items: center;
}

/* .bottom .bottom2 {
    background-color: black;
    color: darkorange;
    
} */

#middle{
    margin-right: 20%;
}

        </style>
</head>

<body>
    
        <header>
            <nav>
                <span>
                    <a href="http://localhost/PARK_It/"> <img src="C:\xampp\htdocs\Park_It\Images\logo.jpg" alt="" width="53"> </a>
                </span>
                <span id="middle">
                    <ul>
                       <a href="http://localhost/PARK_It/"> <li>Home</li> </a>
                       <a href="http://localhost/PARK_It/About.php"> <li>About us</li></a>
                       <a href="contact.php"> <li>Contact us</li> </a>
                       <a href="http://localhost/PARK_It/booking(t).php"><li>Book now</li></a>
                    </ul>
                </span>
                <span>
                    <ul>
                        <a href="login.php">

                            <li>Login</li>

                        </a>

                        <a href="register.php">
                            <li>Sign-up</li>
                        </a>
                    </ul>
                </span>


                <div class="slogan  ">
                    <h1>
                        <span class="header">RESERVE.</span>RELAX.<span class="header">REPEAT.</span><span
                            class="header"></span>
                        </h1>
                </div>
            </nav>
        </header>

        <main>

        <img src="https://cdn.dribbble.com/users/2118336/screenshots/12113942/media/ec72a5e052af7792a64a1f3fd156af28.gif" alt="">
            

       <figure>
         <p>Worried about finding a parking spot?! <br> Park-IT with us in advance</p>
       </figure>
       <section>
        <article>  Save time not money because time is more than money!!</article>
        <article><h2> BOOK NOW!</h2>
</article>
<article>booking form will display here</article>
       </section>
    </main>


<footer class="bottom">
    <h3 >MEET THE TEAM</h3>
   <div class="bottom"><img src="logo final.png" alt="" width="15vw"></div>
   <div class="bottom">Khevna Patel</div>
   <div class="bottom">Dharmi Patel</div>
   <div class="bottom">Dimanshu Patel</div>
   <div class="bottom">Rajvi Doshi</div>
</footer>


</body>

</html>