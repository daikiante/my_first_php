<?php

// if

$x = 99 * 99;
$y = 77 * 77;


if ($x > 9800) {
  echo '変数xは9800より大きいです。';
}


if ($y > 6000) {
  echo '変数yは6000より大きいです。';
}



// else

$age = 24;
    
if ($age >= 30) {
  echo 'あなたは30歳以上です。';
} else {
  echo 'あなたは30歳未満です。';
}


// elseif (Python == elif, PHP == elseif)

$x = 1071;

if ($x % 3 == 0 && $x % 7 == 0) {
  echo 'xは3の倍数かつ7の倍数です。';
} elseif ($x % 3 == 0) {
  echo 'xは3の倍数ですが7の倍数ではありません。';
} elseif ($x % 7 == 0) {
  echo 'xは7の倍数ですが3の倍数ではありません。';
} else {
  echo 'xは7の倍数でも3の倍数でもありません。';
}


?>