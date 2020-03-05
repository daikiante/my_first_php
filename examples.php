<?php
$prices = array(1000, 650, 750, 800);
echo '$pricesの値: ';
foreach ($prices as $price) {
  echo $price.' ';
}
echo '<br>';
echo '-----';
echo '<br>';

$totalPrice = 0;
$maxPrice = 0; // 最高価格を入れるための変数
foreach ($prices as $price) {
  $totalPrice += $price;
  // $maxPriceに入っている価格より大きければ
  if ($price > $maxPrice) {
    // その価格で$maxPriceを上書きする
    $maxPrice = $price;
  }
}
echo '合計金額は'.$totalPrice.'円です';
echo '<br>';
echo '最高価格は'.$maxPrice.'円です';
?>