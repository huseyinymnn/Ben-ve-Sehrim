<?php
    ob_start();
    $user='b201210034@sakarya.edu.tr';
    $pass='b201210034';

    if(isset($_POST['submit']))
    {
        $username=$_POST['eposta'];
        $password=$_POST['sifre'];

        if ($username==$user && $password==$pass)
        {
            header('location:hakkinda.html');
            exit();
        }
        else 
        {
            echo "E-Posta veya şifre hatalı";
        }
    }
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="main">
        <div class="form-box">
            
    <form class="input-group">
        <input type="email" class="input-field" placeholder="Kullanıcı adını giriniz!" name="eposta" required autofocus>
        <input type="password" class="input-field" placeholder="Şifrenizi giriniz!" name="sifre" required> 
        <button type="submit" class="submit-button">GİRİŞ</button>    
    </form>
        </div>
    </div>   

      
    
    
</body>
</html>