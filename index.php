<?php
include "db_conn.php";
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
      <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    
    <title>Document</title>
    
</head>
<body>
    
    <button class="add-button">
        <span class="icon"><ion-icon name="person-add"></ion-icon></span>
        <a href="add.php" class="btn btn-dark mb-3" class="add_new">Add New</a>
    </button>
    <div class="wrapper2">
        

        <?php
            if (isset($_GET["msg"])) {
            $msg = $_GET["msg"];
            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            ' . $msg . '
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
            }
            ?>
        

            <table class="table table-hover text-center">
            <thead class="table-dark">
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Nom</th>
                <th scope="col">Prenoms</th>
                <th scope="col">Email</th>
                <th scope="col">Telephone</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                
             <?php
                $sql = "SELECT * FROM `etudiant`";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
             ?>
                <tr>
                    <td><?php echo $row["id"] ?></td>
                    <td><?php echo $row["nom"] ?></td>
                    <td><?php echo $row["prenom"] ?></td>
                    <td><?php echo $row["email"] ?></td>
                    <td><?php echo $row["telephone"] ?></td>
                    <td>
                    <a href="edit.php?id=<?php echo $row["id"] ?>" class="link-dark"><ion-icon name="create"></ion-icon></a>
                    <a href="delete.php?id=<?php echo $row["id"] ?>" class="link-dark"><ion-icon name="trash"></ion-icon></a>
                    </td>
                </tr>
                <?php
                }
                ?>
                 

            </tbody>
            </table>
        


    </div>
</body>
</html>