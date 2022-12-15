<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Test</title>
</head>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (
        isset($_POST["firstname"]) &&
        isset($_POST["lastname"]) &&
        isset($_POST["age"]) &&
        !empty($_POST["firstname"]) &&
        !empty($_POST["lastname"]) &&
        !empty($_POST["age"])
    ) {
        $connection = new mysqli("localhost", "root", "", "w3school");
        $firstName = $_POST["firstname"];
        $lastName = $_POST["lastname"];
        $age = $_POST["age"];
        $query = "INSERT INTO test(age, first_name, last_name) VALUES (?, ?, ?);";
        $stmt = $connection->prepare($query);
        $stmt->bind_param("iss", $age, $firstName, $lastName);
        $result = $stmt->execute();
        if ($result) {
            echo "OKK";
        } else {
            echo "Error";
        }
        $stmt->close();
    }
}


?>

<body>
    <form action="<?php
                    $_SERVER["PHP_SELF"];
                    ?>" method="post">
        <label for="firstname">
            <input type="text" name="firstname" id="firstname" placeholder="First Name">
        </label>
        <br><br>
        <label for="lastname">
            <input type="text" name="lastname" id="lastname" placeholder="Last Name">
        </label>
        <br><br>
        <label for="age">
            <input type="text" name="age" id="age" placeholder="Age">
        </label>
        <br><br>
        <input type="submit" value="submit">
    </form>
</body>

</html>