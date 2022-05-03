<?php

session_start();

require_once "connect.php";

$polaczenie = @new mysqli($host,$db_user,$db_password,$db_name);

if($polaczenie->connect_errno!=0)
{
    echo"Error:".$polaczenie->connect_errno;
}
else
{
    $login = $_POST['login'];
    $haslo = $_POST['haslo'];
    
    $sql = "SELECT*FROM uzytkownicy WHERE user='$login' AND pass='$haslo'";
    
    if($rezultat = @$polaczenie->query($sql))
    {
        $ilu_userow = $rezultat->num_rows;
        if($ilu_userow>0)
        {
            $wiersz = $rezultat->fetch_assoc();
            $_SESSION['user'] = $wiersz['user'];
            $_SESSION['wiek'] = $wiersz['wiek'];
            $_SESSION['email'] = $wiersz['email'];
            
            $rezultat->free_result();
            header('Location:glowna.php');
            
        }else{
            
        }
        
    }
    
    $polaczenie->close();
}

  
?>

<!DOCTYPE HTML>
<html lang=pl>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Ccompatible" content="IE=edge,chrome=1">
    <title>Immortalsi- Fanowska strona Diablo Immortal </title>
	<link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
   <h1>Parafrazujac Platona: Nawet martwi nie zobacza konca wojny!!!</h1>
</body>
</html>