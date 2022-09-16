<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Transfer History</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/table.css">
  <link rel="stylesheet" type="text/css" href="css/navbar.css">
</head>
<style>
  #sakshi2 {
    border: 4px solid rgb(22, 203, 194);
  }


  #sakshi1 {
    background-color: white;
    color: rgb(22, 203, 194);
  }

  #sakshi3 {
    color: black;
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
</style>

<body>

  <?php
  include 'navbar.php';
  ?>

  <div class="container">
    <h2 id="sakshi3" class="text-center pt-4">Transfer History</h2>

    <br>
    <div class="table-responsive-sm">
      <table id="sakshi2" class="table table-hover table-striped table-condensed table-bordered">
        <thead>
          <tr id="sakshi1">

            <th class="text-center">Sender</th>
            <th class="text-center">Receiver</th>
            <th class="text-center">Amount</th>
            <th class="text-center">Date</th>
          </tr>
        </thead>
        <tbody>
          <?php

          include 'config.php';

          $sql = "select * from transaction";

          $query = mysqli_query($conn, $sql);

          while ($rows = mysqli_fetch_assoc($query)) {
          ?>

            <tr>

              <td class="py-2"><?php echo $rows['sender']; ?></td>
              <td class="py-2"><?php echo $rows['receiver']; ?></td>
              <td class="py-2"><?php echo $rows['balance']; ?> </td>
              <td class="py-2"><?php echo $rows['datetime']; ?> </td>

            <?php
          }

            ?>
        </tbody>
      </table>

    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>