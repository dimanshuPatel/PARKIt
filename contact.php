<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        *{
    padding: 0;
    margin: 0;
    scroll-behavior: smooth;
    box-sizing:border-box;
}
body{
    width: 100%;
    height: 100vh;
    display: flex;
    flex-direction: column;
    justify-content: center;
    place-items: center;
    color:white;
    background: url(https://static.vecteezy.com/system/resources/thumbnails/004/495/548/small/light-soft-color-blue-low-poly-crystal-background-polygon-design-pattern-low-poly-illustration-low-polygon-background-free-vector.jpg);
    background-repeat: no-repeat;
    background-size: cover;
}
.contact-container{
    max-width: 960px;
    margin: auto;
    width: 100%;
    display: grid;
    grid-template-columns: repeat(2,1fr);
    gap: 1.5rem;
    background: #363953;
    box-shadow: 0 0 1rem hsla(0 0 0 / 16%);
    overflow: hidden;
}
.form-container{
    padding:20px;
}
.form-container h3{
    font-size: 1.2rem;
    font-weight: 600;
    margin-bottom: 1rem;
}
.contact-form{
    display: grid;
    row-gap: 1rem;
}
.contact-form input{
    width: 100%;
    border: none;
    outline: none;
    background:#2c2f48;
    padding: 10px;
    font-size:0.9rem;
    color: #fff;
    border-radius: 0.4rem;
}
.contact-form textarea{
    resize: none;
    height: 200px;
}
.contact-form .send-button{
    border: none;
    outline: none;
    background: aqua;
    font-size: 1rem;
    font-weight: 500;
    text-transform: uppercase;
    cursor: pointer;
}
.contact-form .send-button:hover{
    background: hsl(181,100%,44%,0.8);
    transition: 0.3 all linear;
}
.map iframe{
    width: 100%;
    height: 100%;
}
@media(max-width:964px){
    .contact-container{
        margin: 0 auto;
        width: 90%;
    }
}
@media(max-width:700px){
    .contact-container{
        grid-template-columns: 1fr;
        gap: 1rem;
        margin-top: 20rem !important;

    }
    .map iframe{
        height: 400px;
    }
}


        </style>
</head>
<body>
    <section>
        <div class="contact-container">
            <div class="form-container">
                <h3>Message-us</h3>
                <form action="_handle(c).php" class="contact-form" method="post">
                <label for="uname" class="form-label">User Name</label>
                <input type="text" placeholder="Your Name" name="uname" required>
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email"  placeholder="Enter your Email.."required>
                <textarea name="mesg"  cols="30" rows="10" placeholder="Write Message Here..."required></textarea>
                <input type="submit" value="send" class="send-button">

            </form>
            </div>
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d235014.29918790405!2d72.41493012913726!3d23.020158084541748!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e848aba5bd449%3A0x4fcedd11614f6516!2sAhmedabad%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1709026697163!5m2!1sen!2sin"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>
    
</body>
</html>