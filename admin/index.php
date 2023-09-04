<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: ../index.php');
    exit();
}
$username = $_SESSION['username'];
include "../include/config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://img.freepik.com/premium-vector/indonesia-map-flag-vector-map-icon-with-highlighted-indonesia_292608-17949.jpg?w=2000" type="image/x-icon">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>17 Agustus</title>
</head>

<body>

    <div class="container">
        <!-- Sidebar Section -->
        <?php include "include/menu.php"?>
        <!-- End of Sidebar Section -->
        
        <!-- Main Content -->
        <main>
        <?php
        if(isset($_REQUEST['page'])){
            $page = $_REQUEST['page'];
            switch ($page) {
                case 'kategori':
                    include "content/kategori.php";
                    break;
                case 'peserta':
                    include "content/peserta.php";
                    break;
                case 'lomba':
                    include "content/lomba.php";
                    break;
                case 'index':
                    include "content/index.php";
                    break;
                case 'logout':
                    include "logout.php";
                    break;
            }
        } else {
    ?>
            <?php include "content/index.php"?>
            <?php }?>
        </main>
        <!-- End of Main Content -->
        <?php include "include/profile.php"?>

        </div>


    </div>
    <script src="index.js"></script>
</body>

</html>

