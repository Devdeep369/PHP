<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Website</title>
</head>
<body>
    Thsis is my first php website

    <?php
    echo "Hello devdeep welcome to php";
    $var1 = 3;
    $var2 = 4;
    echo "<br>";
    // arithmathic op
    echo "The sum of 2 var = ";
    echo $var1 + $var2;
    echo "<br>";
    echo "The var1 - var2 = ";
    echo $var1 - $var2;
    echo "<br>";
    echo "The var1 * var2 = ";
    echo $var1 * $var2;
    echo "<br>";
    echo "The var1 / var2 = ";
    echo $var1 / $var2;
    echo "<br>";

    //assignment operator
    // echo "<h1> Assignment operator</h1>";
    $newVar = $var1;
    echo "The value of new var is = ";
    echo $newVar;
    echo "<br>";
    
    // comparison operator
    echo "The value of 1==4 is ";
    echo var_dump(1==4);
    echo "<br>";

    echo "The value of 1!=4 is ";
    echo var_dump(1!=4);
    echo "<br>";

    echo "The value of 1<=4 is ";
    echo var_dump(1<=4);
    echo "<br>";

    //increment operator

    // echo $var1++;
    // echo $var1--;
    // echo ++$var1;
    // echo --$var1;
    echo "<br>";

    //LOGICAL OPRATOR
    // and (&&); both cond need to be true
    // or (||); one of the cond need to be true 
    // xor = one true and one false needed
    // if both true than XOR will false
    //(not) !

    // Datatypes in PHP
    // 1. String
    // 2. Integer
    // 3. Boolean
    // 4. Float
    // 5. Object
    // 6. Array


    // Arrays
    $lang = array("Html", "CSS", "Javascipt", "Mysql", "PHP");
    // echo count($lang);

    // iterating arrys using while loop
    $a = 0;
    while ($a < count($lang)) {
        echo "<br>The Value of lang : ";
        echo $lang[$a];
        $a++;
    }
    echo "<br>";         
    // for loop
    for ($i=0; $i < 10; $i++) { 
        echo "<br>The value of for loop is : ";
        echo $i;
    }
    echo "<br>";         
     
    // Foreach
    foreach ($lang as $value) {
        echo "<br>The value of Foreach is ";
        echo $value;
    }
    echo "<br>";         

    // function
    function print4(){
        echo "Four";
    }
    print4();
    print4();

    function printnum($num){
        echo "<br>Your num is : ";
        echo $num;
    }
    printnum(369);
    printnum(432);

?>
</body>
</html>