<?php
// ファイルのパス
$file_path = './sample.txt';

// 読み込みモードでファイルを開く
$fr = fopen($file_path, "r");

// 回して出力する
while($li = fgets($fr)){
    echo $li."\n";
}

// しっかり閉じる
fclose($fr);

// 書き込みモードでファイルを開く
$fw = fopen($file_path, "w");

// 上書きをする
fwrite($fw, "add text\n");
echo "上書き"."\n";

// while($li = fgets($fw)){
//     echo $li."\n";
// }
fclose($fw);

// 追記モードのときはwではなくaを指定する
$fa = fopen($file_path, "a");
echo "追記"."\n";
// 追記する
fwrite($fa, "add text2");
fclose($fa);
?>