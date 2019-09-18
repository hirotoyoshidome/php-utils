<?php
// /usr/local/bin/composer.phar install
// で関係ライブラリをインストールする
// composer.phar installで下記のファイルが作成される
require 'vendor/autoload.php';

// ライブラリ読み込み
use Carbon\Carbon;

$date = new Carbon('Asia/Tokyo');
echo $date."\n";

$dt = Carbon::create('Asia/Tokyo');
echo $dt."\n";

?>
