<!DOCTYPE html>
<html>
<head>
    <title>Select Fruits</title>
</head>
<body>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <select name="firstSelect" onchange="document.cookie='selectedFruit='+this.value">
            <option value="apple" <?php if(isset($_COOKIE['selectedFruit']) && $_COOKIE['selectedFruit'] === 'apple') echo 'selected'; ?>>Apple</option>
            <option value="banana" <?php if(isset($_COOKIE['selectedFruit']) && $_COOKIE['selectedFruit'] === 'banana') echo 'selected'; ?>>Banana</option>
            <option value="orange" <?php if(isset($_COOKIE['selectedFruit']) && $_COOKIE['selectedFruit'] === 'orange') echo 'selected'; ?>>Orange</option>
            <option value="grape" <?php if(isset($_COOKIE['selectedFruit']) && $_COOKIE['selectedFruit'] === 'grape') echo 'selected'; ?>>Grape</option>
            <option value="kiwi" <?php if(isset($_COOKIE['selectedFruit']) && $_COOKIE['selectedFruit'] === 'kiwi') echo 'selected'; ?>>Kiwi</option>
        </select>
        <input type="submit" name="submit" value="Submit">
    </form>

    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <select name="secondSelect[]" multiple>
            <?php
            if (isset($_COOKIE['selectedFruit'])) {
                $selectedFruit = $_COOKIE['selectedFruit'];
                echo "<option value='$selectedFruit'>$selectedFruit</option>";
                echo "<script>document.cookie = 'selectedFruit=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;';</script>";
            }
            ?>
        </select>
        <input type="submit" name="move" value="Move Selected">
    </form>

    <?php
    if (isset($_POST['move'])) {
        if (isset($_COOKIE['selectedFruit'])) {
            $selectedFruit = $_COOKIE['selectedFruit'];
            echo "<script>document.getElementById('firstSelect').querySelector('option[value=\"$selectedFruit\"]').remove();</script>";
        }
    }
    ?>
</body>
</html>
