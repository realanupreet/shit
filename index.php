<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP stuff :P</title>
</head>

<body>

    <?php
    echo ("Hello world");
    $charname = "John";
    $num = 45;
    echo "<hr> $num <hr>";
    $num = 90;
    echo "Hello $num $charname";

    $phrase = "hdnDD giraffe DDnk";
    $age = 60;
    $float = 6.63;
    echo $age;
    echo "<hr>";
    echo strtolower($phrase[5]);
    echo strlen($phrase);
    echo $phrase;
    echo "<br>";
    $phrase = str_replace("giraffe", "panda", $phrase);
    echo $phrase;
    echo "<br>";
    echo substr($phrase, 5, 2);
    echo min(sqrt(pow(4, 5)), 56);
    $nahme = "";
    ?>


    <form action="index.php" method="get">
        Name: <input type="text" name="name" id="name">
        <input type="submit">
    </form>
    <br>

    <?php

    $name = array("kevin", "barry");
    echo $name[1];

    $grades = array("shh" => "s", "ssd" => "df");
    echo $grades["ssd"];


    function sayHi($name)
    {
        echo " <hr>hello user $name <hr>";
    }

    sayHi("mickey");


    function cube($n)
    {
        return pow($n, 3);
    }
    echo cube(4);

    $isMale = true;
    if ($isMale) {
        echo "You are male";
    } else {
        echo "you are female";
    }
    switch ($grades) {
        case "A":
            echo "You did amazing";
            break;
        default:
            echo "invalid";
    }
    $i = 1;
    while ($i <= 5) {
        echo "<br>$i";
        $i++;
    }

    ?>
    Your name is 
    <?php echo $_GET["name"] ?? null;
class Book
{
var $title;
var $author;
var $pages;

function __construct()
{
echo "new book created";
}
}
class novels extends Book
{
}
$book1 = new Book;
$book1->title = "jk row";
echo $book1->title;
//custom data ; 
?>
    <?php
    $content = "We dont do content creation";
    include "footer.php"



    ?>


</body>

</html>