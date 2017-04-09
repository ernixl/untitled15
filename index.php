<! DOCTYPE ht ml >
<html>
<head>
</head>

<p>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $forename = $_POST["forename"];
        $surname = $_POST["surname"];
    }
    ?>

    <form action="<? echo $_SERVER["PHP_SELF"]; ?>" method="post">

        <label>Forename</label>
        <input type="text" name="forename">

        <label>Surname</label>
        <input type="text" name="surname">

<p><input type="submit" value="Submit"></p>
</form>

<?php
print "<h1>Hello {$forename} {$surname}</h1>";
?>

</body>
</html>