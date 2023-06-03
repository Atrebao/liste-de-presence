<?php
include "db_conn.php";
$id = $_GET["id"];

if (isset($_POST["submit"])) {
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $email = $_POST['email'];
  $gender = $_POST['gender'];

  $sql = "UPDATE `crud` SET `first_name`='$first_name',`last_name`='$last_name',`email`='$email',`gender`='$gender' WHERE id = $id";

  $result = mysqli_query($conn, $sql);

  if ($result) {
    header("Location: index.php?msg=Data updated successfully");
  } else {
    echo "Failed: " . mysqli_error($conn);
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <title>Document</title>
</head>
<body>
<div class="blob"></div>
<div class="wrapper">
<?php
    $sql = "SELECT * FROM `crud` WHERE id = $id LIMIT 1";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
 ?>
  <form method="post">
    <h2>Modifier les informations</h2>
    <div class="input-box">
      <span class="icon"><ion-icon name="person"></ion-icon></span>
      <input type="text" name="nom" value="<?php echo $row['nom'] ?> required >
      <label for="nom">Nom</label>

    </div>

    <div class="input-box">
      <span class="icon"><ion-icon name="people"></ion-icon></span>
      <input type="text"name="prenom" value="<?php echo $row['prenom'] ?> required>
      <label for="prenom">Prenoms</label>

    </div>

    <div class="input-box">
      <span class="icon"><ion-icon name="mail"></ion-icon></span>
      <input type="email" name="email" value="<?php echo $row['email'] ?>  required >
      <label for="email">Email</label>
    </div>

    <div class="input-box">
      <span class="icon"><ion-icon name="call"></ion-icon></span>
      <input type="number" name="phone" value="<?php echo $row['telephone'] ?> required >
      <label for="phone">Telephone</label>
    </div>

    <button type="submit">Envoyer</button>
  </form>
</div>

</body>
</html>