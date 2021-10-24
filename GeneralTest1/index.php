<?php

//プログラミング問題(PHP)

//1.FizzBuzz

for($i=1; $i<=100; $i++){
    if($i % 3 === 0 && $i % 5 === 0){
        echo 'FizzBuzz';
    }elseif($i % 3 === 0){
        echo 'Fizz';
    }elseif($i % 5 === 0){
        echo 'Buzz';
    }else{
        echo $i;
    }
    echo '<br>'
}

//2.素数算出

for($i=1; $i<=10000; $i++){

    $int = 0; //約数の数

    //約数の数をカウントする
    for($j = 1; $j <= $i; $j++){
        if($i % $j == 0){
            $int += 1;
        }
    }

    //約数の数が2である(=素数)であれば出力する
    if($int == 2){
        echo $i;
        echo '<br>';
    }
}

//3.5次元配列

