# puppeter


## puppeterとは

* Chromeに対応するnodeライブラリーである。


## puppeterでできること

1. ページのスクリーンショットとPDFを生成します。
2. SPA（シングルページアプリケーション）をクロールして、事前にレンダリングされたコンテンツ（「SSR」（Server-Side Rendering））を生成します。
3. フォーム送信、UIテスト、キーボード入力などを自動化する
4. 最新の自動テスト環境を作成します。最新のJavaScriptおよびブラウザ機能を使用して、最新バージョンのChromeでテストを直接実行します。
5. サイトのタイムライントレースをキャプチャして、パフォーマンスの問題を診断するのに役立ちます。
6. Chrome拡張機能をテストします。

## puppeterの使い方
* 基本的にはJabaScriptを作成してnodeコマンドを実行するだけ
* 使いこなすにはpuppeterのAPIについて詳しなる必要がある

## puppteerの操作でてこずったとこ
1. 要素の指定　page.$$eval(クラス指定)

![例]スクリーンショット 2019-02-07 14.36.53.png

 await page.waitForSelector(
    '.tt-modal-wrapper > .tt-modal-container > .tt-modal-buttons > .primary',
    { hidden: true }
  )
  * hidden:true 
  * 要素が消えてくれるまで待ってくれる。

  * await page.waitFor(1000)
  * かっこの中の時間待ってくれる。