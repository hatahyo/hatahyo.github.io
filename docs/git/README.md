

# gitでよく使うコマンド

### git status  
- 現在の状態を見る

### git add
- ステージングエリアにあげる

### git diff
- どこを編集したのか見る

### git init
- 作業ディレクトリにGitを使う宣言をする

### git rm [削除したいファイル]
- ファイルごと削除

### git log
- gitのlogを確認

### git show <コミットA>
- コミットAの詳細をみる

### git branch
- ブランチの一覧　
- ブランチの作成

### git checkout <ブランチ名>
- ブランチの移動

##  git checkout -b <ブランチ名>
***新しいブランチを作成しさらに移動してくれる***

### git merge
- リモートブランチと同期したデータ、追跡ブランチをローカルリポジトリに取り込む

### git fetch
- ローカルリポジトリをリモートリポジトリに同期する

### git pull
- mergeとfetchをまとめて行う

### git push
- ローカルブランチのデータをリモートブランチに送る（最新のもの）

### git revert  <コミットA>
- コミットAの状態に戻す

### git revese
- 履歴を綺麗にする、まとめてコミットを取り込む

### git remote add origin リポジトリA
- リポジトリAを追加する

### git reset --hard HEAD
- 直前に戻る

### git reset --hard　(ID)
- 指定されたlogに戻る

## git stash
***変更を一時的にストック***

### git commit -m"aaa" --no-verify
- lintをかけないでコミットする時に使う


### git push --set-upstream origin 
- upstream branchがないのでgit push --set-upstream origin (ブランチ)でセットしてってこと


