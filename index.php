<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Hometask-1</title>
</head>
<body>
    <header>
        <div class="container">
                <p class="logo"><a href="#!">Logo</a></p>
            <nav>
                <ul>
                    <li>
                        <a href="#!">First</a>
                        <a href="#!">Second</a>
                        <a href="#!">Third</a>
                        <a href="#!">Fifth</a>
                        <a href="#!">Six</a>
                    </li>
                </ul>
            </nav>
        </div>
    <header>
    <section>
        <div class="math__amal">
           <span class="plus">
                <?php
                    $a = 15;
                    $b = 15;
                    echo "Find x<br>";
                    echo '$a = '.$a.";".'$b = '."$b"."<br>";
                    $c = '$a + $b = ?';
                    echo "$c<br>";
                    $d = $a + $b;
                    echo "Result is x = ($a + $b)<br>";
                    echo "x = {$d}<br>";
                ?>  
           <span class="minus">
                <?php
                    $e = 15;
                    $f = 15;
                    echo "Find y<br>";
                    echo '$e = '.$e.";".'$f = '."$f"."<br>";
                    $g = '$e - $f = ?';
                    echo "$g<br>";
                    $h = $e - $f;
                    echo "Result is y = ($e - $f)<br>";
                    echo "y = {$h}";
                ?>  
           </span>
           <span class="multiply">
                <?php
                    $i = 15;
                    $j = 15;
                    echo "Find z<br>";
                    echo '$i = '.$i.";".'$j = '."$j"."<br>";
                    $k = '$i * $j = ?';
                    echo "$k<br>";
                    $l = $i * $j;
                    echo "Result is z = ($i * $j)<br>";
                    echo "y = {$l}";
                ?>  
           </span>
           <span class="divide">
                <?php
                    $m = 15;
                    $n = 15;
                    echo "Find w<br>";
                    echo '$m = '.$m.";".'$n = '."$n"."<br>";
                    $o = '$m / $n = ?';
                    echo "$o<br>";
                    $p = $m / $n;
                    echo "Result is w = ($m / $n)<br>";
                    echo "w = {$p}";
                ?>  
           </span>
        </div>
        <div class="conditions">
            <span class="variables">
                <?php
                    $variable = '$a = 25; $b = 35; $c = 45;';
                    echo $variable;
                ?>
            </span>
            <span class="conditions__variables">
                <?php
                    $conditions = '$a < $c && $c > b';
                    echo $conditions;
                ?>
            </span>
            <span class="result">
                <?php
                    $res = 'Max value has $c';
                    echo $res;
                ?>
            </span>

        </div>






    </section>







</body>
</html>