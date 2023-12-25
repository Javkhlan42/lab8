<html>
    <head><title>Temprature conversation</title></head>
    <body>
        <?php $Celsius = $_GET['Celsuis']; ?>
        <form action="?=php echo $_SERVER['PHP_SELF']; ?>" method="GET">
            Celsius Temprature:
            <input type="text" name="Celsuis" value="<?php echo $Celsius; ?>" /><br />
            <input type="submit" value="convert to fahrenheit" />
        </form>
        <?php if (!is_null($Celsius)) {
            $fahrenheit = ($Celsius*9/5)+32;
            printf("%.2fF is %.2fC", $Celsius, $fahrenheit);
        } ?>
        

    </body>
</html>