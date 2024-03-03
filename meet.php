<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Our Team Section</title>
  <script src="https://kit.fontawesome.com/6b6eaf576e.js" crossorigin="anonymous"></script>
	<!--<link rel="stylesheet" href="styles.css"> -->
     <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
  integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Allura|Josefin+Sans');

*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
h1{
  margin-top: 49px;
}
p{
  margin-left: 30px;
  margin-right: 30px;
  font-size: 25px;
}

body{
  font-family: 'Josefin Sans', sans-serif;
  background : url('https://static.vecteezy.com/system/resources/thumbnails/004/495/548/small/light-soft-color-blue-low-poly-crystal-background-polygon-design-pattern-low-poly-illustration-low-polygon-background-free-vector.jpg');
  background-repeat: no-repeat;
  background-size: cover;
}

.wrapper{
  margin-top: 10%;
}

.wrapper h1{
  font-family: 'Allura', cursive;
  font-size: 52px;
  margin-bottom: 60px;
  text-align: center;
}

.team{
  display: flex;
  justify-content: center;
  width: auto;
  text-align: center;
  flex-wrap: wrap;
}

.team .team_member{
  background: linear-gradient(#e48caf,#9f9ded);
  margin: 5px;
  margin-bottom: 50px;
  width: 300px;
  padding: 20px;
  line-height: 10px;
  color: white;
  content: justify;  
  position: relative;
  border-radius: 15px;
}

.team_member:hover {
  transform: scale(1.4); 
}

.team .team_member h3{
  color: #385ee9 ;
  font-size: 26px;
  margin-top: 50px;
}

.team .team_member p.role{
  color: black;
  margin: 12px 0;
  font-size: 12px;
  text-transform: uppercase;
}

/* .team .team_member .team_img{
  position: absolute;
  top: -50px;
  left: 50%;
  transform: translateX(-50%);
  width: 100px;
  height: 100px;
  background: black;
  border-radius: 40px;
} */

/* .team .team_member .team_img img{
  width: 100px;
  height: 100px;
  padding: 5px;
} */
.icons{
  font-size: 2rem;
  color: #fff;

}

    </style>
</head>
<body>
    <h1 class="container my-3"></h1>
    <h1 style="text-align: center"; my-2>Meet The Team</h1>
  <div class="wrapper">
  
    <div class="team">
      <div class="team_member">
        <h3>Khevna Patel</h3>
        <!-- <div class="team_img">
    <img src="https://mir-s3-cdn-cf.behance.net/project_modules/2800_opt_1/15345c41332353.57a1ce9141249.jpg" height="50%" width="50%" alt="Team_image">
</div> -->
        <p class="role">Front-end Developer</p>
        <div class="icons">
          <a href="#"><i class="fa-brands fa-instagram" style="color: #ffffff;"></i></a>
            <a href="#"><i class="fa-solid fa-envelope" style="color: #ffffff;"></i></a>
            <a href="#"><i class="fa-brands fa-linkedin" style="color: #ffffff;"></i></a>
        </div>
      </div>
      <div class="team_member">
        <!-- <div class="team_img">
          <img src="https://scarysymptoms.com/wp-content/uploads/2018/02/Woman-Confident-By-Rawpixel.com--800x760.jpg" height="50%" width="50%" alt="Team_image">
        </div> -->
        <h3>Dharmi Patel</h3>
        <p class="role">Front-end Developer</p>
        <div class="icons">
          <a href="#"><i class="fa-brands fa-instagram" style="color: #ffffff;"></i></a>
            <a href="#"><i class="fa-solid fa-envelope" style="color: #ffffff;"></i></a>
            <a href= "#"><i class="fa-brands fa-linkedin" style="color: #ffffff;"></i></a>
        </div></div>
      <div class="team_member">
        <!-- <div class="team_img">
          <img src="https://th.bing.com/th/id/OIP.V1KfTGJ1NTumVhitqzzcOAAAAA?rs=1&pid=ImgDetMain" height="50%" width="50%" alt="Team_image">
        </div> -->
        <h3>Dimanshu Patel</h3>
        <p class="role">Back-end Developer</p>
        <div class="icons">
          <a href="#"><i class="fa-brands fa-instagram" style="color: #ffffff;"></i></a>
            <a href="#"><i class="fa-solid fa-envelope" style="color: #ffffff;"></i></a>
            <a href= "#"><i class="fa-brands fa-linkedin" style="color: #ffffff;"></i></a>
        </div>
      
      </div>
      <div class="team_member">
        <!-- <div class="team_img">
          <img src="https://thumbs.dreamstime.com/b/portrait-thinking-business-woman-isolated-over-white-portrait-thinking-business-woman-isolated-over-white-background-116152318.jpg" height="50%" width="50%" alt="Team_image">
        </div> -->
        <h3>Rajvi Doshi</h3>
        <p class="role">Project Manager</p>
        <div class="icons">
          <a href="#"><i class="fa-brands fa-instagram" style="color: #ffffff;"></i></a>
            <a href="#"><i class="fa-solid fa-envelope" style="color: #ffffff;"></i></a>
            <a href= "#"><i class="fa-brands fa-linkedin" style="color: #ffffff;"></i></a>
        </div>
      </div>
    </div>
  </div>	
  
  </body>
  </html>