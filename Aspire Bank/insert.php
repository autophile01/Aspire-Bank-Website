<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>

        <style>
                #sonia {
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
                        left: 6px;
                        top: -1vh;
                        cursor: pointer;
                }

                #sonia:hover {
                        color: black;
                        border: 1px solid black;
                        background-color: transparent;
                }

                .dabba {
                        text-align: center;
                        position: relative;
                        top: 30vh;
                }
        </style>
</head>

<body>

        <?php
        $server = "localhost";
        $username = "root";
        $password = "";
        $database = "sparksbank";

        $conn = mysqli_connect($server, $username, $password, $database);

        if (($_POST['submit'])) {



                $Name = $_POST['name'];
                $Email = $_POST['email'];
                $MobNo = $_POST['MobNo'];
                $Balance = $_POST['balance'];

                $insertquery = " insert into users(name,email,MobNo,balance) values('$Name','$Email','$MobNo','$Balance') ";
                $res = mysqli_query($conn, $insertquery);
                //save my insertquery to $con

                if ($res) {


                        echo ("");
                } else {


                        echo ("data not inserted");
                }
        }

        ?>
        <div class="dabba">
                <h1>Thankyou for Registering!</h1>
                <p>We promise to give you an enriching experience with us...</p>
                <a href="index.php"><button id="sonia" type="button">OK</button></a>
        </div>




</body>

</html>