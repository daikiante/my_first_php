<?php

    // 関数getCircleAreaを定義
    function getCircleArea($radius) {
      return $radius * $radius * 3;
    }
    
    // 関数getCircleAreaを呼び出して、戻り値を変数$circleAreaに代入
    $circleArea = getCircleArea(5);
    
    // $circleAreaをechoする
    echo $circleArea;

?>