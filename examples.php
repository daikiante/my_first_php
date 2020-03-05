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








$menus = array(
  array('name' => 'CURRY', 'price' => 900),
  array('name' => 'PASTA', 'price' => 1200),
  array('name' => 'COFFEE', 'price' => 600)
);

// この下にコードを書いてください
$total = 0;
$maxprice = 0;
$maxfood = 0;
foreach($menus as $menu) {
  if($maxprice < $menu['price']) {
   $maxprice = $menu['price'];
   $maxfood = $menu['name'];
  }
  echo $menu['name'].'は'.$menu['price'].'円です<br>';
  $total = $menu['price'];
}

echo '合計金額は'.$total.'円です<br>';
echo $maxfood.'が最高価格で'.$maxprice.'円です'

?>