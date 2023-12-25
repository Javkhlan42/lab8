<html>
    <head><title>Temprature conversation</title></head>
    <body>
        <?php $fahrenheit = $_GET['fahrenheit']; ?>
        <form action="?=php echo $_SERVER['PHP_SELF']; ?>" method="GET">
            Fahrenheit Temprature:
            <input type="text" name="fahrenheit" value="<?php echo $fahrenheit; ?>" /><br />
            <input type="submit" value="convert to Celsius" />
        </form>
        <?php if (!is_null($fahrenheit)) {
            $Celsius = ($fahrenheit-32)*5/9;
            printf("%.2fC is %.2fF", $fahrenheit, $Celsius);
        } ?>
        

    </body>
</html>