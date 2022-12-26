<!DOCTYPE html>
<html>
<link rel="stylesheet" href="cats.css">
<?php
session_start();
require_once('Config.php');
?>
<link rel="stylesheet" href="trial.css">
<link rel="stylesheet" href="index.css">
<header class="header" style="background-color:#efeef1; ">
  <?php include 'header.php'; ?>
</header>
<center>
  <div style="background-image: url('bgg.jpg');background-repeat: none;">
    <div class="wrapper">
      <?php
      $connection  = mysqli_connect(SERVER, DBUSER, DBPASS, DBNAME);
      if (!$connection) {
        echo "Error connecting to MySQL: " . mysqli_connect_error();
        die;
      }
      $search = isset($_POST['search']) ? $_POST['search'] : '';
      $result = mysqli_query($connection, "SELECT * FROM animals WHERE a_name LIKE '$search' OR a_gender LIKE '$search' OR price LIKE '$search' OR month LIKE '$search' OR type LIKE '$search';");
      if (mysqli_num_rows($result) > 0) {
        while ($row = $result->fetch_assoc()) {
      ?> <div>
            <button class="button"> <?php echo '<img src="images/' . $row["a_image"] . '" style="height: 90%;width: 90%;margin-left: auto;margin-right: auto;border-radius: 13px;"/>';
                                    if ($row["price"] == 0) { ?>
                <p>Up for adoption</p>
              <?php } else {
                                      echo $row["price"];
                                    }
              ?>
            </button>

            <div class="inner_button">
              <button id=favorite onclick="location.href='sell.php'">Sell</button>
              <?php if ($_SESSION['fname'] == 'admin') { ?>
                <form method="POST">
                  <button id=application class="inner_button" value="<?php $row["id"] ?>" onclick="location.href='delete_pet.php'">
                  <img src="images/delete.png" width="30" height="34">
                  </button>
                </form>
            </div>
          </div>
    <?php }
            }
          } else
            echo "0 results";
          $connection->close(); ?>
    </div>
    <footer><?php include 'footer.html'; ?></footer>
    </body>

</html>