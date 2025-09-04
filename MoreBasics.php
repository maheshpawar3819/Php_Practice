<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }
        .container{
            max-width: 80%;
            background-color:gray;
            margin:auto;
            padding:24px;
            text-align:center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Learning php</h1>
        <?php
            $age=5;

            if($age > 18){
                echo "You are eligible";
            }elseif($age < 7){
                echo "You are too small";
            }else{
                echo "You cannot eligible";
            }

            //Arrays
            $languages=array("js","python","go","java");
            // echo $languages[1];
            echo count($languages);

            //loops
            //while loop
            // $a=0;
            // while($a <= 10){
            //     echo "the value of a is :";
            //     echo $a;
            //     echo "</br>";
            //     $a++;
            // }

            //itterating arrays in php in while loop
            // $a=0;
            // while ($a < count($languages)){
            //     echo "value of languages ";
            //     echo "<b>$languages[$a]</b>";
            //     echo "</br>";
            //     $a++;
            // }

            //For Loop
            // for($a=0;$a < 10;$a++){
            //     echo '</br> the value of a is : ';
            //     echo $a;
            // }

            //foreach
            // foreach($languages as $value){
            //     echo "</br> the values are ";
            //     echo $value;
            // }

            // example 2 foreach
            // $names= array("mahesh","pranav","samir","sauragh","swapnil");
            // foreach($names as $value){
            //     echo "</br> $value";
            // }

            // example 3 foreach
            $frameworks=array('Next js','Django','laravel');
            foreach($frameworks as $value){
                echo "</br> $value";
            }
        ?>
    </div>
</body>
</html>