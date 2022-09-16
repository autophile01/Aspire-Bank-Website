<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/a5b1cec7fa.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
  <title>Home Page</title>
  <style>
    *body {
      margin: 0;

    }

    .header {
      overflow: hidden;
      padding: 10px 10px;
    }

    .header a {
      float: left;
      text-align: center;
      padding: 12px;
      text-decoration: none;
      font-size: 18px;
      line-height: 25px;
      border-radius: 4px;
    }

    .header a.logo {
      font-size: 35px;
      font-weight: bold;
      position: relative;
      left: 90px;
      top: 3px;
    }

    .header a {
      font-family: 'Noto Sans', sans-serif;
      color: white;
      font-size: 15px;
      font-weight: 600;
    }

    .header-right {
      float: right;
    }

    .active {
      position: relative;
      left: -5vw;
    }

    a.active1 {
      position: relative;
      left: 4vw;
    }

    .active2 {
      position: relative;
      left: -12vw;
    }

    .AspireLogo {
      position: relative;
      left: 50px;
      top: -55px;
    }

    body {
      background-image: url(MyImages/groupwork9.png);
      background-size: 1600px 100vh;
      background-repeat: no-repeat;
    }

    .AspireLogo img {
      border-radius: 100%;
    }

    a:active,
    a:hover {
      color: rgb(32, 224, 215);
    }

    .header-right {
      position: relative;
      left: 10px;
    }

    pre.bankpros {
      font-family: 'Inter', sans-serif;
      font-size: 60px;
      font-weight: -30;
      position: relative;
      top: 7vh;
      left: 40px;
      color: white;
    }

    .button1 {
      background-color: rgb(32, 224, 215);
      border: none;
      border-radius: 5px;
      color: white;
      padding: 15px 45px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      position: relative;
      left: 170px;
      top: -5vh;
      cursor: pointer;
    }

    .button1:hover {
      color: rgb(32, 224, 215);
      border: 1px solid rgb(32, 224, 215);
      background-color: transparent;
    }

    div.form1 {
      width: 400px;
      height: 500px;
      margin: 15vh 40vw 25px 38vw;
      background-color: white;
      border-radius: 5px;
      position: relative;
      top: -550px;
      right: -320px;
    }

    h1.register {
      color: white;
      text-align: center;
      position: relative;
      top: 50px;
      font-size: 50px;
    }

    div.form2 {
      padding-left: 70px;
      padding-top: 20px;
      position: relative;
      left: -0.7vw;
      top: -3vh;
    }

    div.form2 input {
      padding: 15px 55px;
      text-align: left;
      border: 1px solid grey;
      border-radius: 5px;
    }

    ::placeholder {
      font-size: 15px;
      position: relative;
      left: -35px;
    }

    input[type=submit].button2 {
      background-color: rgb(32, 224, 215);
      border: none;
      color: white;
      padding: 15px 108px;
      text-decoration: none;
      cursor: pointer;
      font-size: 15px;
      font-weight: 600;
      text-align: center;
    }

    input[type=submit].button2:hover {
      color: rgb(32, 224, 215);
      border: 1px solid rgb(32, 224, 215);
      background-color: transparent;
    }

    .form2 p#register {
      font-family: 'Inter', sans-serif;
      font-size: 35px;
      color: black;
      position: relative;
      left: -10px;
      word-spacing: 0px;
    }

    .form2 p#journey {
      font-family: 'Inter', sans-serif;
      font-size: 17px;
      color: grey;
      position: relative;
      left: 12px;
      top: -10px;
    }

    .singlet1 {
      background-color: rgb(32, 224, 215);
      height: 45vh;
      width: 18vw;
      border-radius: 5px;
      color: white;
      position: relative;
      left: 200px;
      top: -300px;
    }

    .singlet2 {
      background-color: rgb(32, 224, 215);
      height: 45vh;
      width: 18vw;
      border-radius: 5px;
      color: white;
      position: relative;
      left: 300px;
      top: -300px;
    }

    .singlet3 {
      background-color: rgb(32, 224, 215);
      height: 45vh;
      width: 18vw;
      border-radius: 5px;
      color: white;
      position: relative;
      left: 400px;
      top: -300px;
    }

    div.offer p {
      font-family: 'Inter', sans-serif;
      font-size: 50px;
      position: relative;
      font-weight: 30px;
      font-stretch: condensed;
      top: -425px;
      text-align: center;
    }

    div.services p {
      font-family: 'Inter', sans-serif;
      color: grey;
      font-size: 20px;
      position: relative;
      font-weight: 30px;
      font-stretch: condensed;
      top: -450px;
      text-align: center;
    }

    .trio {
      height: 2vh;
      width: 60vw;
      display: flex;
      background-color: transparent;
      position: relative;
      top: -110px;

    }

    .trio>div {
      background-color: rgb(32, 224, 215);
      padding: 10px;
      font-size: 30px;
    }

    div.part2logo img {
      border-radius: 50%;
      position: relative;
      top: -400px;
      left: 45vw;
    }

    .icon1 {
      position: relative;
      top: -350px;
      left: 300px;
    }

    .icon2 {
      position: relative;
      top: -430px;
      left: 1100px;
    }

    .icon3 {
      position: relative;
      top: -510px;
      left: 700px;
    }

    #button3 {
      background-color: white;
      border: ipx solid black;
      border-radius: 5px;
      color: black;
      padding: 15px 25px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      position: relative;
      left: 55px;
      top: 30vh;
      cursor: pointer;
    }

    #button3:hover {
      color: white;
      border: 3px solid black;
      background-color: black;
    }

    #button4 {
      background-color: white;
      border: ipx solid black;
      border-radius: 5px;
      color: black;
      padding: 15px 25px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      position: relative;
      left: 60px;
      top: 30vh;
      cursor: pointer;
    }

    #button4:hover {
      color: white;
      border: 3px solid black;
      background-color: black;
    }

    #button5 {
      background-color: white;
      border: ipx solid black;
      border-radius: 5px;
      color: black;
      padding: 15px 25px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      position: relative;
      left: 40px;
      top: 30vh;
      cursor: pointer;
    }

    #button5:hover {
      color: white;
      border: 3px solid black;
      background-color: black;
    }

    a {
      font-family: 'Inter', sans-serif;
      font-weight: 600;
    }

    .lastimage {
      position: relative;
      left: 200px;
      height: 10vh;
    }

    .footer p {
      font-size: 15px;
      padding: 20px;
      font-family: 'Inter', sans-serif;
      text-align: center;
      color: white;
      background-color: black;
    }

    #lastimage {
      position: relative;
      border-radius: 50%;
      left: 270px;
      top: -20px;
    }

    .lastinfo pre {
      font-family: 'Poppins', sans-serif;
      position: relative;
      left: 450px;
      top: -230px;
      font-size: 20px;
    }

    #lastimage {
      transition: transform .2s;
      /* Animation */
      width: 200px;
      height: 200px;
      margin: 0 auto;
    }

    #lastimage:hover {
      transform: scale(1.5);
      /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
    }

    p#divider {
      font-weight: 1000px;
      color: grey;
      position: relative;
      top: -200px;
    }
  </style>
</head>

<body>
  <div class="header">
    <div class="header">
      <a href="telegram.com" class="logo">Aspire Bank</a>
      <div class="header-right">
        <a class="active" href="transfermoney.php">Transfer Money</a>
        <a href="transactionhistory.php" class="active1">Check History</a>
        <a href="index.php" class="active2">Register Now!</a>
      </div>
    </div>
    <div class="AspireLogo"><img src="MyImages/AspireLogo.png" height="50px" width="50px"></div>
    <div>
    </div>
    <pre class="bankpros">
        Aspire to save more
        for your future
        with us
      </pre>
  </div>

  <a href="aboutus.php"><button class="button1" type="button">About Us</button></a>

  <div class="form1">

    <div class="form2">
      <p id="register">
        Register Yourself!
      </p>
      <p id="journey">
        Start your saving journey now
      </p>
      <form action="insert.php" method="POST">
        <input type="text" id="Name" name="name" placeholder="Enter Your Name"><br><br>
        <input type="text" id="Email" name="email" placeholder="Enter Your Email"><br><br><input type="text" id="MobNo" name="MobNo" placeholder="Enter Mobile Number"><br><br>
        <input type="number" id="Balance" name="balance" placeholder="Enter Current Balance"><br><br>
        <input type="submit" class="button2" name="submit" value="Register">
      </form>
    </div>
  </div>
  <div class="part2"></div>
  <div class="threeinone">
    <div class="part2logo"><img src="MyImages\AspireLogo.png" height="100px" width="100px"></div>
    <div class="offer">
      <p>What we offer for you</p>
    </div>
    <div class="services">
      <p>Explore the services we offer to know more</p>
    </div>
  </div>
  <div class="trio">

    <div class="singlet1"><a href="transfermoney.php"><button id="button3" type="button">Our
          Customers</button></a>
    </div>
    <div class="singlet2">
      <a href="transfermoney.php"><button id="button4" type="button">Transfer Money</button></a>
    </div>
    <div class="singlet3">
      <a href="transactionhistory.php"><button id="button5" type="button">Transaction
          History</button></a>
    </div>
  </div>
  <div class="icon1">
    <i class="fa-solid fa-people-group" style="font-size:80px;color:white;"></i>
  </div>
  <div class="icon2">
    <i class="fa-solid fa-clock-rotate-left" style="font-size:80px;color:white;"></i>
  </div>
  <div class="icon3">
    <i class="fa-solid fa-comments-dollar" style="font-size:80px;color:white;"></i>
  </div>

  <p id="divider">_________________________________________________________________________________________________________________________________________________________________________________________________</p>

  <img src="MyImages\Aish.jpg" id="lastimage" height="230px" width="230px">
  <div class="lastinfo">
    <pre>
                           <b>Task :</b> Create a simple Basic Banking System Website
                           <b>Front End :</b> HTML, CSS, Bootstrap, Javascript
                           <b>Back End :</b> PHP
                           <b>Database :</b> MySQL
                           <b>Name :</b> Aishwarya Vilas Motghare
                           <b>Position :</b> Web Development & Designing intern at THE SPARKS FOUNDATION</pre>
  </div>
  <footer class="footer">
    <p>
      THE SPARKS FOUNDATION<br>
      Copyright ©2022 All rights reserved | This project is made by Aishwarya Vilas Motghare
    </p>
  </footer>
</body>

</html>