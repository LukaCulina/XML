<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Registracija</title>
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript" src="jquery-1.11.0.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
    <script src="PWA/XML/validacija2.js"></script>
    <script src="validacija2.js"></script>
</head>

<body>
<?php 

 if(isset($_POST['register'])){
    $ime=$_POST['ime'];
    $prezime=$_POST['prezime'];
    $email=$_POST['email'];
    $usern=$_POST['username'];
    $pass=$_POST['password'];

    $xml = simplexml_load_file('korisnici.xml');

    $korisnik = $xml->addChild('korisnik');
    $korisnik->addChild('ime', $ime);
    $korisnik->addChild('prezime', $prezime);
    $korisnik->addChild('email', $email);
    $korisnik->addChild('username', $usern);
    $korisnik->addChild('password', $pass);
    
    $xml->asXML('korisnici.xml');
    header('Location:login.php');
    
}

?>

    <form action=" " method="post"name="registracija">

        <h1>Registracija</h1>

        <label for="username">Ime</label>
        <input type="text" name="ime" id="ime" />

        <label for="username">Prezime</label>
        <input type="text" name="prezime" id="prezime" />

        <label for="email">Email</label>
        <input type="email" name="email" id="email" />

        <label for="username">Korisničko ime</label>
        <input type="text" name="username" id="username" />

        <label for="password">Lozinka</label>
        <input type="password" name="password" id="password" />

        <button type="submit" name="register">Registracija</button>
        <p>Već imate račun? <a href="login.php">Login</a></p>
        

    </form>

    

</body>

</html>