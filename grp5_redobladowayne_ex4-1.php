<html>
    <head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BSIT 3L</title>
    <link rel="stylesheet" href="style1.css">
    </head>
    <body>
    <a href="Main.htm" class="button">Go Back</a>
    <br>
    <br>
    <div class="info">
    <?php
        echo '<h1>Youre Comment is successfully submitted</h1>';
        echo "Go back now to Main Page" ;
        ?>
        <br>

        <?php echo $_POST["name"]; ?> :
        <?php echo $_POST["comment"]; ?><br>
    </div>
    </body>
</html>
