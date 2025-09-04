<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }

        body>h1{
            text-align:center;
            color:maroon;
            margin-top : 20px;
        }

        body {
            background-color:gray;
        }
    </style>
</head>
<body>
    <h1>Functions</h1>

    <?php 
        // functions 
        function printText(){
            echo "Hello Mahi";
        }

        printText();


        //function with return something
        function add($a,$b){
            return $a+$b;
        }
        
        echo "</br>";
        echo add(4,5);
        echo "</br>";
        //function multiplay
        function multi($num1,$num2){
            return $num1*$num2;
        }
        $result=multi(10,2);
        echo $result;
    ?>
</body>
</html>