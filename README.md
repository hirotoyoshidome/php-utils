# php_utils

* PHPでのソースを配置していく
* 基本的な記法
* ライブラリ管理ツールのcomposerを利用してみる(インストール自体はDockerで実行済み)
* ファイル操作
* 関数とか、クラスとか
* var_dumpとは？？←未実施
* ラムダ式みたいに書ける??←未実施

## 実行環境
https://github.com/hirotoyoshidome/docker_for_php_scratch

こちらより

```
docker run -it -w /usr/src -v $PWD:/usr/src --rm dev_myphp:latest /bin/bash
```
コンテナ内でスクリプトを実行する
