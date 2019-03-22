# Hello memo

#### node.js とライブラリのpuppeteerを使ってテストコードを書いていく!



## node.js とは

- サーバーサイド側のJavaScript
- await async Promise が大事である。
- ターミナルでnodeと押すとnodeの世界になる。



## 環境変数
* コンピュータの持ち物で、コンピュータが動いているときに使える変数

## デーモン (daemon)とは

* メモリ上で「さぁ、いつでもかかってこい」と待機している常駐プログラムのUNIX系OSにおける呼び名
* デーモンさんの名前には、最後に「d」を付けるのが慣例になっています。httpdやftpd、syslogdなど、後ろに「d」が付いていたら「あっ！こいつはデーモンさんだな！」と判断して、かまいません


 ## package.jsonとは

 - json形式で記載されたインストールしたパッケージを管理するための目録のような情報です。
 -  この情報を最初に初期化して、インストールや環境設定をするたびにきちんと目録を更新させることで、正しくnpmを使用することができます。その為、実務上でもnpm initはプロジェクト開始時などに必ず使用します。


## 分割代入とは

基本的な分割代入

let [x, y] = [10, 20];

x に 10 が, y に 20 が入る.


変数の値を交換

[x, y] = [y, x];

x には y の値が, y には x の値がそれぞれ入る. 一時変数いらずだ.


特定プロパティの値を一度に取得

let { a : x, b : y } = { a : 10, b : 20 };

x に 10 が, y に 20 が入る.


また, x や y という変数でなく a と b のように変数名とプロパティ名が同じで良いのならば, もう少し簡単に書くことができる.

let { a, b } = { a : 10, b : 20 };

実際の例でいうと, このような感じだ.

## 役にたったURLたち
[git 基礎](https://tracpath.com/bootcamp/learning_git_firststep.html)

[git 超入門](https://qiita.com/masashi127/items/2e103c3fba9d1b058961)

[gitのお話](http://kray.jp/blog/git-pull-rebase/)

[サルでもわかるgit](https://backlog.com/ja/git-tutorial/)







