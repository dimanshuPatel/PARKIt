<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Our Team Section</title>
	<link rel="stylesheet" href="styles.css">
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
  font-size: 40px;
}
p{
  margin-top: 35px;
  margin-left: 30px;
  margin-right: 30px;
  font-size: 30px;
  color:#111;
}

body{
  font-family: 'Josefin Sans', sans-serif;
  background-image : url('https://static.vecteezy.com/system/resources/previews/001/946/616/original/abstract-banner-web-geometric-hexagon-pattern-light-blue-orange-background-with-space-for-your-text-free-vector.jpg');
  background-repeat: no-repeat;
  background-size: cover;
/*  background-color: antiquewhite; */

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
  background: rgb(140, 66, 21);
  margin: 5px;
  margin-bottom: 50px;
  width: 300px;
  padding: 20px;
  line-height: 20px;
  color: #8e8b8b;  
  position: relative;
}

.team .team_member h3{
  color: rgb(230, 181, 113) ;
  font-size: 26px;
  margin-top: 50px;
}

.team .team_member p.role{
  color: #ccc;
  margin: 12px 0;
  font-size: 12px;
  text-transform: uppercase;
}

.team .team_member .team_img{
  position: absolute;
  top: -50px;
  left: 50%;
  transform: translateX(-50%);
  width: 100px;
  height: 100px;
  border-radius: 50%;
  background: rgb(230, 181, 113);
}

.team .team_member .team_img img{
  width: 100px;
  height: 100px;
  padding: 5px;
}

  </style>
</head>
<body>
  <h1 style="text-align: center;">About Us</h1>
  <p style="text-align: center;">What we have observed is that buying a vehicle is easier than finding a parking spot and an average Indian spends 20 minutes in finding a parking spot.

Just imagine you’re already running late and then you have to waste your time finding a parking spot but now you don’t have to as you can reserve it easily by using our website.

So we as a park-IT have come up with the idea of finding a parking spot and reserving it in advance.<br>
<br>
<a href="http://localhost/PARK_It/meet.php"><button type="button" class="btn btn-outline-primary">Meet Our Team</button></a></p>

</body>
</html>