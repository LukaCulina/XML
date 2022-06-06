<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Promjena</title>
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript" src="jquery-1.11.0.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
    <script src="PWA/XML/validacija3.js"></script>
    <script src="validacija3.js"></script>
    
</head>

<body>
<?php 
$error = false;
$isto = false;
 if(isset($_POST['promjena'])){
    $oldpass=$_POST['old_password'];
    $newpass=$_POST['new_password'];
    $conpass=$_POST['con_password'];

    if($newpass == $oldpass){
        $isto = true;  
    } else {
        $xml = simplexml_load_file('korisnici.xml');
        foreach ($xml->korisnik as $korisnik) {
            if($oldpass == $korisnik->password){
                if($newpass == $conpass){
                    $korisnik->password = $newpass;
                    $xml->asXML('korisnici.xml');
                    header('Location:login.php');
                }
            } else{
                $error = true;
            }
        }    
    
    }
}


?>
    <form action="" method="post"name="promjena">

        <h1>Promijeni lozinku</h1>

        <label for="password">Stara Lozinka</label>
        <input type="password" name="old_password" id="old" />
        
        <?php if($error == true){
            echo "Unijeli ste pogrešnu lozinku.";
            $error == false;
        }?>

        <label for="password">Nova Lozinka</label>
        <input type="password" name="new_password" id="new" />

        <label for="password">Potvrdi Novu Lozinku</label>
        <input type="password" name="con_password" id="confirm" />

        <?php if($isto == true){
            echo "Nova lozinka ne može biti identična staroj!";
            $error == false;
        }?>

        <button type="submit" name="promjena">Promijeni</button>

        <a href="index.php">Home</a>
        <a href="login.php">Login</a>
        <a href="sign_up.php">Register</a>
    </form>

</body>

</html>