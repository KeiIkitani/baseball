

## Baseball Movie
現在のコロナ禍で入場制限が多くの場所でかかっている。
スポーツをしている小学生、中学生の試合会場でも同じく、入場制限がかかり、
自分の子供がプレーしている姿を見て応援することができない親が増えている。
子供がプレーしている姿を動画で投稿し、プレーしている姿を見ることができない親に見てほしいという思いで、
「Baseball Movie」を作成した。<br><br/>

URL=http://rocky-brushlands-64303.herokuapp.com/

## 使用技術

- AWS
  - S3
  - EC2
  - Cloud9
- Laravel
- Bootstrap
- HTML
- PHP
- CSS
- Javascript
- Google Login API

## 機能一覧

- ユーザー登録、ログイン機能
- 動画投稿機能
  - 相手チーム名、試合日、選手名、背番号、動画説明登録機能
  - 動画登録機能
- 投稿編集機能
- 投稿削除機能
- キーワード検索機能
- コメント機能
- サムネイル画像作成機能

## 機能及びページ説明

### ・ユーザー登録機能 

<img width="700" alt="2022-01-31 (21)" src="https://user-images.githubusercontent.com/94359650/152684125-d8096df8-54f3-4f80-8a5c-d816ba7d3cc1.png">
ユーザー登録画面(会員登録画面)。
ユーザー登録またはログインを行うことで投稿一覧画面へページ遷移する。
<br><br/>

### ・ログイン機能

<img width="700" alt="2022-02-05 (3)" src="https://user-images.githubusercontent.com/94359650/152684348-c996569d-d92f-4f58-ac04-902b1aaeb1c1.png">
ログイン画面。
<br><br/>
<img width="200" alt="2022-02-05 (4)" src="https://user-images.githubusercontent.com/94359650/152684427-dc341fed-3422-4588-a5ec-29255913d4e6.png">
Google Loginも行うことが可能。
<br><br/>
<img width="200" alt="2022-01-31 (22)" src="https://user-images.githubusercontent.com/94359650/152684663-13b586c7-116e-4783-9274-ab837dd74a73.png">
クリックすることで、ログイン画面とユーザー登録画面へページ遷移することができる。

### ・動画投稿機能

<img width="200" alt="2022-02-07 (3)" src="https://user-images.githubusercontent.com/94359650/152742442-7790b782-b234-403b-bb63-0dddc587d860.png">
投稿一覧画面上部の「Movie Create」をクリックすることで、投稿作成画面へページ遷移する。
<br><br/>
<img width="700" alt="2022-02-09 (5)" src="https://user-images.githubusercontent.com/94359650/153169154-3ca90d8b-00e9-4a93-8a26-1bbd301365a2.png">
投稿作成画面。
動画説明（動画のタイトルのようなもの）、相手チーム名、試合日、選手名、背番号、動画、サムネイル画像を登録する。
<br><br/>

### ・投稿一覧画面

<img width="700" alt="2022-02-09 (7)" src="https://user-images.githubusercontent.com/94359650/153160828-5b456fd0-2a50-44e3-9787-1c91daab9912.png">
投稿一覧画面。
投稿作成画面で登録されたサムネイル画像、動画説明、相手チーム名、試合日、選手名が表示される。
<br><br/>
<img width="200" alt="2022-01-31 (10)" src="https://user-images.githubusercontent.com/94359650/152685296-e294e0e6-3c43-49a8-935a-e4ae80e4d3aa.png">
「read more」をクリックすることで、投稿詳細画面へページ遷移する。
<br><br/>
<img width="200" alt="2022-01-31 (6)" src="https://user-images.githubusercontent.com/94359650/152685085-694591ec-9483-4970-9aee-dd91b16eb952.png">
「Baseball Movie」をクリックすることで、投稿一覧画面へページ遷移する。
<br><br/>

### ・投稿詳細画面

<img width="" alt="2022-02-09 (11)" src="https://user-images.githubusercontent.com/94359650/153161961-ea96b7a0-ccb6-4509-bde0-d7dbce47bde5.png">
投稿詳細画面。
<br><br/>

### ・コメント機能

<img width="700" alt="2022-01-31 (2)" src="https://user-images.githubusercontent.com/94359650/152685944-2d03d16d-3fe3-492a-964b-5fd113a5fcb7.png">
コメント欄に表示される表示名とコメントを入力し、「書き込む」をクリックすることで、コメントが入力フォームの下に投稿される。
コメントの表示名を自由な名前で投稿できるようにするため、あえて表示名を入力してもらう仕組みになっている。
投稿されたコメントは、表示名、コメント、コメント投稿時間が表示される。
<br><br/>

### ・投稿編集機能

<div class="row">
<img width="250" alt="2022-02-09 (14)" src="https://user-images.githubusercontent.com/94359650/153164955-71342e32-83d0-48c3-8de9-8aa3fa2ed131.png">
<img width="250" alt="2022-02-09 (19)" src="https://user-images.githubusercontent.com/94359650/153173556-7d56f9aa-e12d-4fc2-9689-b4085dd9ae73.png">

</div>
作成したユーザーとログインしたユーザーのIDが同じだった場合のみ投稿編集が可能。
右が投稿編集が可能で、左が投稿編集不可。
投稿詳細画面の上部にある「Movie Edit」をクリックすることで、投稿編集画面へページ遷移する。
<br><br/>
<img width="700" alt="2022-02-09 (3)" src="https://user-images.githubusercontent.com/94359650/153165183-270b00b3-0644-451b-bda7-53922dc700d3.png">
投稿編集画面。
デフォルトでそれまで入力されていた値が表示される。
それを書き換え、「保存」をクリックすることで、編集が終わり、投稿詳細画面にページ遷移する。
<br><br/>

### ・投稿削除機能
<img width="200" alt="2022-01-31 (19)" src="https://user-images.githubusercontent.com/94359650/152686197-8c663a64-d243-4cde-899c-b04474871895.png">
投稿編集画面の「保存」ボタンの下の「この投稿を削除する」をクリックすることで投稿が削除され、投稿一覧画面へページ遷移する。
<br><br/>

### ・キーワード検索機能
<img width="200" alt="2022-02-07 (2)" src="https://user-images.githubusercontent.com/94359650/152737924-6487466e-87fc-4350-a45a-e56932f1e032.png">
キーワード入力欄に、キーワード（試合日、相手チーム名、選手名、動画説明欄に入力したものなど）を入力し「検索」をクリックすることで、値にヒットしたものが表示される。
より多くのものが検索結果にヒットするような仕組みにした。
キーワード入力欄を空欄で「検索」をクリックすることで、すべての投稿が表示される。
<br><br/>

### ・サムネイル画像作成機能

<img width="200" alt="2022-02-09 (12)" src="https://user-images.githubusercontent.com/94359650/153165511-a81e4d98-db58-4339-a94b-03f21e3bc5ac.png">
「Image Create」をクリックすることで、サムネイル画像作成画面にページ遷移する。
<br><br/>
<img width="700" alt="2022-02-09 (16)" src="https://user-images.githubusercontent.com/94359650/153166534-7da50fd2-011b-43a5-acc7-dfd10c3e0b33.png">
サムネイル画像作成画面。
動画ファイルを選択し、サムネイル画像にしたいタイミングまで動画を動かす。
それにより、ページの下に動画のタイミングの画像が表示される。
そして、「ダウンロード」をクリックすることで、画像がダウンロードされる。
<br><br/>

## テーブル構成
<img width="700" alt="2022-02-09 (18)" src="https://user-images.githubusercontent.com/94359650/153171734-2df7bb15-be5a-4746-ad80-096ff6fb42ad.png">




