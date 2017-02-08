<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

</head>
<body style="background-color: <?php echo $_GET['boja'] ?>">
<?php
if ($_GET['strana'] == 'home'):
    ?>
    <h1>Home page</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda at, dicta distinctio dolor eaque, facere fuga
        in maiores maxime minus necessitatibus officiis, perspiciatis quos repudiandae sed soluta tempore voluptate
        voluptatibus.</p>
    <?php
elseif ($_GET['strana'] == "aboutus"):
    ?>
    <h1>About us page</h1>
    <?php
endif;
?>
<ul>
    <li>
        <a href="?strana=home">Home</a>
    </li>
    <li>
        <a href="?strana=aboutus">About us</a>
    </li>
</ul>
GET, POST
<form action="/class6/obradi.php" method="POST">

    <label for="name">Unesite ime:</label>
    <input type="text" id="name" name="name">
    <br>
    <label for="lastname">Unesite prezime:</label>
    <input type="text" id="lastname" name="lastname">

    <label for="pass">Password</label>
    <input type="password" name="pass" id="pass">
    <br>
    <label>Unesi pol</label>

    <label for="muski">Muski</label>
    <input type="radio" id="muski" name="pol" value="muski">

    <label for="zenski">Zenski</label>
    <input type="radio" id="zenski" name="pol" value="zenski">

    <label for="grad">Odaberi grad</label>
    <select name="grad" id="grad">
        <option value="nis">Nis</option>
        <option value="ns">NS</option>
        <option value="bg">Beograd</option>
    </select>
    <br>
    <button>Posalji</button>
</form>

</body>
</html>