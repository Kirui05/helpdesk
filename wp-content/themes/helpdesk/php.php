<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>

<body>
    <?php
    // initializing a program in php using echo command
    echo "hello world";
    echo "<h1>Nicholas Site</h1>";
    echo "<hr>";

    // storing data using variables
    $name = "Nicholas";
    $age = "28";
    echo "There was once a man named $name <br>";
    echo "He was $age years old <br>";
    echo "He really liked the name $name <br>";
    echo "But didnt like being $age <br>";

    // data types in php
    // 1. string
    $phrase = "To be or not to be";
    // 2. integer
    $age = 30;
    // 3. float
    $gpa = 4.56;
    // 4. boolean
    $ismale = false;
    // 5. no value
    null
        ?>

    <?php
    // you dont always have to store the data in variables
    echo "To be or not to be <br> ";
    echo "30 <br> ";
    echo "4.56 <br> ";
    ?>

    <!-- lower and upper cases in strings, string length, position of letter, replace string -->
    <?php
    $school = "Giraffe Academy";
    echo strtolower("$school <br>");
    echo strtoupper("$school <br> ");
    echo strlen($school);
    echo $school[0];
    echo str_replace("Giraffe", "Panda", $school);
    ?>

    <!-- form in php -->
    <form action="php.php" method="get">
        Name: <br> <input type="text" name="name" placeholder="Enter name"> <br>
        <input type="submit">
    </form>
    <form action="php.php" method="get">
        Age: <br> <input type="number" name="age" placeholder="Enter age"> <br>
        <input type="submit">
    </form>
    <form action="php.php" method="post">
        Password: <br> <input type="password" name="password" placeholder="Enter password"> <br>
        <input type="submit">
    </form>
    <br>
    <?php echo $_GET["name"] ?>
    <?php echo $_GET["age"] ?>
    <?php echo $_POST["password"] ?>

    <!-- arrays -->
    <?php
    $friends = array("kevin", "karen", "oscar", "jimmy");
    $friends[0] = "nicholas";
    $friends[4] = "angela";
    echo $friends[3];
    echo count($friends);
    ?>

    <form action="php.php" method="post">
        Apples: <input type="checkbox" name="fruits[]" value="apples"><br>
        Oranges: <input type="checkbox" name="fruits[]" value="oranges"><br>
        Pears: <input type="checkbox" name="fruits[]" value="pears"><br>
        <input type="submit">
    </form>

    <?php
    $fruits = $_POST["fruits"];
    echo $fruits[1];
    ?>

    <!-- Associative arrays -->
    <?php
    $grades = array("Jim" => "A+", "Pam" => "B-", "Oscar" => "C+");
    echo $grades["Oscar"];
    // unlike normal arrays where we access elements using their index position, in associative arrays we access elements using a key e.g oscar, jim
    ?>
</body>

</html>