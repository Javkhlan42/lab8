<html>

<head>
    <title>Listbox transfer</title>
</head>

<?php

$fruits_in_first_list = array("Apple", "Orange", "Kiwi", "Watermelon", "Grape");
$fruits_in_second_list = array();

?>

<body>

    <?php


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $selectedfruit = $_POST["first_list"];
        $print_fruit = $selectedfruit;
        $index = array_search($selectedfruit, $fruits_in_first_list);
        if ($index !== false) {
            unset($fruits_in_first_list[$index]);

            array_push($fruits_in_second_list, $selectedfruit);

            echo "<select name='second_list'>";
            foreach ($fruits_in_second_list as $fruit) {
                echo "<option value='$fruit'>$fruit</option>";
            }
            echo "</select>";
            printf("You moved a(n) %s!", $print_fruit);
        }
    }

    ?>



    <p>Select a fruit to move to a second list box</p>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
        <select name="first_list">

            <?php
            foreach ($fruits_in_first_list as $fruit) {
                echo "<option value='$fruit'>$fruit</option>";
            }
            ?> <br />
        </select>

        <input type="submit" value="Add to list box!" />
    </form>




</body>

</html>