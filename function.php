<?php

    // 関数helloを定義
    function hello() {
     echo 'Hello, world!'; 
    }
    
    // 関数helloを呼び出す
    hello();
    
    echo '<br>';
    // 関数printRectangleAreaを定義
    function printRectangleArea($height, $width) {
      echo $height * $width;
    }
    
    // 引数を(5, 10)としてprintRectangleAreaを呼び出す
    printRectangleArea(5, 10);
    
?>