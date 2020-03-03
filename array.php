<?php

// 配列

    // array() -> 配列を作る関数
    $colors = array('赤', '青', '黄');
    
    echo $colors[0];
    
    // 配列の最後に'白'を追加
    $colors[] = '白';
    
    echo $colors[3];
    



// 連想配列

    // array('キー'=>'バリュー', 'キー'=>'バリュー' ...);
    $scores = array(
        '数学' => 70,
        '英語' => 90,
        '国語' => 80
        );
      
      // 国語に5を足して出力する
      $scores['国語'] += 5;
      
      echo $scores['国語'];
?>