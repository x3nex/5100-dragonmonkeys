<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .red {
            background: red;
        }
        .green {
            background: green;
        }

        .blue {
            background: blue;
        }

    </style>
</head>
<body class="<?php if(isset($_GET['color'])) echo $_GET['color'] ?>">

<a href="?color=red">Red</a>
<a href="?color=green">Green</a>
<a href="?color=blue">Blue</a>


<?php
if(isset($_GET['color']))
{
    switch ($_GET['color']) {
        case "blue":
            echo "<img src='http://www.animals-zone.com/wp-content/uploads/2012/12/koalifications-meme-animals-zone.jpg'>";
            break;

        case "red":
            echo "<img src='http://imworld.aufeminin.com/story/20140423/cat-meme-218141_w650.jpg'>";
            break;

        case "green":
            echo "<img src='https://i.ytimg.com/vi/Jkom5Ajo0iQ/hqdefault.jpg'>";
            break;
    }
}
?>
</body>
</html>