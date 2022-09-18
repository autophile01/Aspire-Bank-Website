<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Transfer Money</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/table.css">
  <link rel="stylesheet" type="text/css" href="css/navbar.css">

  <style type="text/css">
    button {
      transition: 1.5s;
    }

    button:hover {
      background-color: #616C6F;
      color: white;
    }

    #diksha1 {
      background-color: rgb(22, 203, 194);
      color: white;
      font-weight: 100;
    }



    #diksha1:hover {
      transform: scale(1.2);
      /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
    }

    #diksha2 {
      background-color: white;
      color: rgb(22, 203, 194);
    }

    #diksha3 {
      background-color: rgba(255, 255, 255, 0.815);
      color: black;
      border: 4px solid rgb(22, 203, 194);
      border-radius: 5px;
    }

    #diksha4 {
      color: black;
    }

    #avishkar1 {
      color: rgb(9, 205, 195);
      font-size: 17px
    }

    #avishkar1:hover {
      color: white;
      background-color: rgb(9, 205, 195);
      border-radius: 5px
    }

    #avishkar2 {
      color: rgb(9, 205, 195);
      font-size: 17px
    }

    #avishkar2:hover {
      color: white;
      background-color: rgb(9, 205, 195);
      border-radius: 5px
    }

    #avishkar3 {
      font-family: 'Inter', sans-serif;
      font-size: 25px
    }

    #avishkar4 {
      color: rgb(9, 205, 195);
      font-size: 17px
    }

    #avishkar4:hover {
      color: white;
      background-color: rgb(9, 205, 195);
      border-radius: 5px
    }
  </style>
</head>

<body>
  <?php
  include 'config.php';
  $sql = "SELECT * FROM users";
  $result = mysqli_query($conn, $sql);
  ?>

  <?php
  include 'navbar.php';
  ?>

  <div class="container">
    <h2 class="text-center pt-4" id="diksha4">Our Customers</h2>
    <br>
    <div class="row">
      <div class="col">
        <div class="table-responsive-sm">
          <table id="diksha3" class="table table-hover table-sm table-striped table-condensed table-bordered">
            <thead>
              <tr id="diksha2">
                <th scope="col" class="text-center py-2">Id</th>
                <th scope="col" class="text-center py-2">Name</th>
                <th scope="col" class="text-center py-2">E-Mail</th>
                <th scope="col" class="text-center py-2">Balance</th>
                <th scope="col" class="text-center py-2">Details</th>
              </tr>
            </thead>
            <tbody>
              <?php
              while ($rows = mysqli_fetch_assoc($result)) {
              ?>
                <tr>
                  <td class="py-2"><?php echo $rows['id'] ?></td>
                  <td class="py-2"><?php echo $rows['name'] ?></td>
                  <td class="py-2"><?php echo $rows['email'] ?></td>
                  <td class="py-2"><?php echo $rows['balance'] ?></td>
                  <td><a href="selecteduserdetail.php?id= <?php echo $rows['id']; ?>"> <button type="button" class="btn" id="diksha1">Show Details/Transfer</button></a></td>
                </tr>
              <?php
              }
              ?>

            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>
