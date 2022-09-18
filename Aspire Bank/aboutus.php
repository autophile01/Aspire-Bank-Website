<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
    <style>
        .content,
        h1,
        h2,
        img {
            text-align: center;
        }

        img {
            border-radius: 50%;
            border: 2px solid black;
        }

        img:hover {
            transform: scale(1.5);
        }

        #impact {
            font-size: 25px;
            color: rgb(7, 162, 205);
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        }

        #info1,
        #info3 {
            justify-content: center;
            font-family: 'Inter', sans-serif;
            font-weight: 50;
        }

        #info2,
        #info4 {
            color: rgb(7, 162, 205);
            font-size: 25px;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        }

        #info4 {
            font-size: 40px;
            position: relative;
            top: -70px;
            font-weight: 600;
        }

        .button1 {
            background-color: rgb(7, 162, 205);
            border: none;
            border-radius: 5px;
            color: white;
            padding: 15px 45px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            position: relative;
            left: 20px;
            top: 3vh;
            cursor: pointer;
        }

        .button1:hover {
            color: rgb(7, 162, 205);
            border: 1px solid rgb(7, 162, 205);
            background-color: transparent;
        }
    </style>

</head>

<body>
    <a href="index.php"><button class="button1" type="button">Back</button></a>
    <div class="content"></div>
    <h1>About Us</h1>
    <h2 id="impact">Aspiring towards making an Impact<h2><br>
            <img src="MyImages\AspireLogo.png" width="150px" height="150px"><br>
            <pre id="info1">
    Since 2007, our Environmental Business Initiative has helped finance sustainable business<br> activities all across the globe. Our commitment provides financial and   intellectual  capital
    to develop solutions to climate change and other environmental challenges. We focus of low<br> carbon energy, energy efficiency, and sustainable transportation, in addition to addressing <br>conservation, land use, and more.
   <h2 id="info2">See how we’re making a difference </h2><pre id="info3">
    Being a diverse and inclusive workplace at Aspire Bank, we’re committed to cultivating dive
    rse and inclusive workplace and focusing on partnerships that drive  change  and  addresss<br> critical challenges facing our communities.Creating an inclusive environment starts at the<br> top and extends to all of our company.Our Board, its committees and our CEO play a key role
    in the oversight of our culture,holding management accountable for ethical an professional<br> and a commitment to being a diverse and inclusive workplace.</pre>
            <p id="info4">THANK YOU</p>
            </div>
</body>

</html>