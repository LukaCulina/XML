<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Prijava</title>
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript" src="jquery-1.11.0.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
    <script src="PWA/XML/validacija.js"></script>
    <script src="validacija.js"></script>
</head>

<body>
<?php 
$error1  = false;
$error2  = false;
 if(isset($_POST['login'])){
    $usern=$_POST['username'];
    $pass=$_POST['password'];

    $xml = simplexml_load_file('korisnici.xml');

    foreach ($xml->korisnik as $korisnik) {
        if($usern == $korisnik->username){
            if($pass == $korisnik->password){
                session_start();
                $_SESSION['username'] = $usern;
                header('Location:index.php');
                die;
            } else{
                $error2 = true;
                break;
            } 
        } else{
            $error1 = true;
        }
            
    }
    
}

?>
    <form action="" method="post"name="prijava">

        <h1>Prijava</h1>

        <input type="text" name="username" id="username"  placeholder="Korisničko ime"/>
        <?php if($error1 == true){  
            echo "Korisničko ime ne postoji.";
            $error1 == false;
        }?>
        <input type="password" name="password" id="password" placeholder="Lozinka"/>
        <?php if($error2 == true){
            echo "Unijeli ste pogrešnu lozinku.";
            $error2 == false;
        }?>
        <button type="submit" name="login">Prijava</button>

        <p>Nemate račun? <a href="sign_up.php">Register</a></p>
        

    </form>

    

</body>

</html>