<?php 
include "db_conn.php";

if (isset($_POST["submit"])) {
   $prenom = $_POST['prenom'];
   $nom = $_POST['nom'];
   $email = $_POST['email'];
   $telephone = $_POST['phone'];

   $sql = "INSERT INTO `etudiant`(`id`, `nom`, `prenom`, `email`, `telephone`) VALUES (NULL,'$nom','$prenom','$email','$telephone')";

   $result = mysqli_query($conn, $sql);

   if ($result) {
      header("Location: index.php?msg=New record created successfully");
      
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
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    
    <title>Document</title>
</head>
<body>
<div class="blob"></div>
<div class="wrapper">
  <form action="index.php" method="post">
    <h2>Ajouter un participant</h2>
    <div class="input-box">
      <span class="icon"><ion-icon name="person"></ion-icon></span>
      <input type="text" name="nom" required >
      <label for="nom">Nom</label>

    </div>

    <div class="input-box">
      <span class="icon"><ion-icon name="people"></ion-icon></span>
      <input type="text"name="prenom" required>
      <label for="prenom">Prenoms</label>

    </div>

    <div class="input-box">
      <span class="icon"><ion-icon name="mail"></ion-icon></span>
      <input type="email" name="email" required >
      <label for="email">Email</label>
    </div>

    <div class="input-box">
      <span class="icon"><ion-icon name="call"></ion-icon></span>
      <input type="number" name="phone" required >
      <label for="phone">Telephone</label>
    </div>

    <button type="submit">Envoyer</button>
  </form>
</div>

</body>
</html>