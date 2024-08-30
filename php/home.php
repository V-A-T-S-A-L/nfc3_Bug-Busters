<!DOCTYPE html>
<style>
    *{
    margin: 0;
    padding: 0;
    font-family: sans-serif;
}
.banner{
    width: 100%;
    height: 100vh;
    background-image: linear-gradient(rgba(0,0,0,0.75),rgba(0,0,0,0.75)),url(../img/bg-img.jpg);
    background-size: cover;
    background-position: center;
}
.navbar{
    width: 85%;
    margin: auto;
    padding: 35px 0;
    display: flex;
    align-items: center;
    justify-content: space-between; 
}
.logo{
    width: 185px;
    cursor: pointer;
}

.navbar ul li{
    list-style: none;
    display: inline-block;
    margin: 0 30px;
    position: relative;
}
.navbar ul li a{
    text-decoration: none;
    color: #fff;
    text-transform: uppercase;
}
.navbar ul li::after{
    content: '';
    height: 3px;
    width: 0;
    background: #009688;
    position: absolute;
    left: 0;
    bottom: -10px;
    transition: 0.5s;
}
.navbar ul li:hover::after{
    width: 100%;
}
.content{
    width: 100%;
    position:absolute;
    top: 50%;
    transform: translateY(-50%);
    text-align: center;
    color:#fff;
}
.content h1{
    font-size: 70px;
    margin-top: 80px;
}
.content p{
    margin: 20px auto;
    font-weight: 100;
    line height: 25px;
}
button{
    width: 200px;
    padding: 15px 0;
    text-align: center;
    margin: 20px 10px;
    border-radius: 25px;
    font-weight: bold;
    border: 2px solid #1fffe9;
    background: transparent;
    color: #fff;
    cursor: pointer;
    position: relative;
    overflow: hidden;
}
span{
    background: #1fffe9;
    height: 100%;
    width: 0;
    border-radius: 25px;
    position: absolute;
    left: 0;
    bottom: 0;
    z-index: -1;
    transition: 0.5s;

}
button:hover span{
    width: 100%;
}
button:hover{
    border: none;
}
.nav a{
    text-decoration: none;
    color: #fff;
    text-transform: uppercase;
}

</style>
<html>
    <head>
        <title>HOMEPAGE</title>
        <link rel="stylesheet"  href="../css/style.css">
        
    </head>
    <body>
        <div class="banner"> 
        <div class="navbar">
            <img src="../img/logo.png" class="logo">
            <ul>
                <li><a href="login.php">Login</a></li>
                <li><a href="signup.php">Signup</a></li>
                <li><a href="shelter_signup.php">Shelter Request</a></li>

            </ul>
        </div>    
        <div class="content">
            <h1>Adopt Pets</h1>
            <p>"Find Your Forever Friend!"</p>
            <div class="nav">
                <button type="button"><span></span><a href="http://www.frcrce.ac.in/" target="_blank">KNOW MORE</a></button>
            </div>
        </div>
        
        
        </div>
    </body>
</html>

