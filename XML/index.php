<?php 
   session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Pocetna</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<div class="home">
    <div class="pocetna">
        <h1>Početna</h1>
        <h2>Pozdrav, <?php echo $_SESSION['username']; ?>.</h2>
        <div class="linkovi">
            <a href="promjena.php">Promijenite šifru</a>
            <a href="logout.php">Logout</a>
        </div>
    </div>  
    
</div>

</body>

</html>