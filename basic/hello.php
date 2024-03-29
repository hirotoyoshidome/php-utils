<?php
echo "HELLO\n";

// 変数は$を接頭辞として付与すること
$greeting = 'good morning';
// 参照するときも$を付与する
echo $greeting;
// ダブルクォートで囲っても参照でき、それ以外の文字列も展開される
echo "$greeting\n";
$partone = "good";
$parttwo = "afternoon";
// .演算子で文字列連携をする(+演算子ではできないため注意)
echo "$partone"."$parttwo\n";

// 数値計算は+演算子で行う
echo (1 + 2)."\n";

// 分岐(記法はJavaと一緒)
$judge_int = 2;
if($judge_int <= 0){
    echo "0以下です"."\n";
}elseif($judge_int == 1){
    echo "1です"."\n";
}else{
    echo "1以上です"."\n";
}

// ループ(記法はJavaと一緒)
for($i = 0; $i < 5; $i++){
    echo ($i + 1)."\n";
}

// 配列
$ary = ['aa', 'bb'];
echo $ary[0]."\n";

// 連想配列
$ary2 = array(
    'one' => 1,
    'two' => 2
);
echo $ary2['two']."\n";

// foreach
foreach($ary2 as $key => $val){
    echo $key." : ".$val."\n";
}

// 関数定義
function addition($num1, $num2){
    return $num1 + $num2;
}
echo addition(1, 4)."\n";
?>
