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
        Name: <br> <input type="text" name="name"> <br>
        <input type="submit">
    </form>
    <br> 

    <?php echo $_GET["name"] ?>

</body>
</html>