<?php

session_start();
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
<?php

    echo"<p>Witaj niesmiertelny: ".$_SESSION['user']."!";
    echo"<p><b>Wiek<b/>:".$_SESSION['wiek'];
    echo"<p><b>E-mail<b/>:".$_SESSION['email'];
?>

</body>
</html>