<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <form action="site.php" method="get">
            <input type="number" name="num1" value="0">
            <br>
            <input type="number" name="num2" value="0">
            <br>
            <input type="submit">
        </form>

        Answer: <?php echo $_GET["num1"] + $_GET["num2"]; ?>
    </body>
</html>
