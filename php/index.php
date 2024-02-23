<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        ::-webkit-scrollbar {
            display: none;
        }



        .home {
            display: flex;
            flex-direction: column;
            justify-content: center;
            gap: 25px;
        }
    </style>
</head>

<body>
    <div class="home">
        <?php
        require_once("header.php");
        ?>


        <?php
        require_once("home.php");
        ?>




        <?php
        require_once("footer.php");
        ?>
    </div>
</body>

</html>