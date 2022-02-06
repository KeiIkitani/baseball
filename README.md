

## Baseball Movie



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

<img width="400" alt="2022-01-31 (16)" src="https://user-images.githubusercontent.com/94359650/152684816-fdfc9eee-7798-4c66-92f0-5b46ebd7c4c7.png">
投稿一覧画面上部の「Movie Create」をクリックすることで、投稿作成画面へページ遷移する。
<br><br/>

投稿作成画面。
動画説明（動画のタイトルのようなもの）、相手チーム名、試合日、選手名、背番号、動画を登録する。
<br><br/>

### ・投稿一覧画面


投稿一覧画面。
投稿作成画面で登録された動画説明、相手チーム名、試合日、選手名が表示される。
<br><br/>
<img width="200" alt="2022-01-31 (10)" src="https://user-images.githubusercontent.com/94359650/152685296-e294e0e6-3c43-49a8-935a-e4ae80e4d3aa.png">
「read more」をクリックすることで、投稿詳細画面へページ遷移する。
<br><br/>
<img width="200" alt="2022-01-31 (6)" src="https://user-images.githubusercontent.com/94359650/152685085-694591ec-9483-4970-9aee-dd91b16eb952.png">
「Baseball Movie」をクリックすることで、投稿一覧画面へページ遷移する。
<br><br/>

### ・投稿詳細画面
<img width="700" alt="2022-01-31 (8)" src="https://user-images.githubusercontent.com/94359650/152685386-c0889378-c4c7-4f14-a42f-360b4b0dacf1.png">
投稿詳細画面。
<br><br/>

### ・コメント機能
<img width="656" alt="2022-01-31 (2)" src="https://user-images.githubusercontent.com/94359650/152685944-2d03d16d-3fe3-492a-964b-5fd113a5fcb7.png">
コメント欄に表示される表示名とコメントを入力し、「書き込む」をクリックすることで、コメントが入力フォームの下に投稿される。
コメントの表示名を自由な名前で投稿できるようにするため、あえて表示名を入力してもらう仕組みになっている。
投稿されたコメントは、表示名、コメント、コメント投稿時間が表示される。
<br><br/>

### ・投稿編集機能
<div class="row">
<img width="250" alt="2022-01-31 (11)" src="https://user-images.githubusercontent.com/94359650/152685462-12061082-64e6-474d-8072-fb6a7bcf865e.png">
<img width="300" alt="2022-01-31 (12)" src="https://user-images.githubusercontent.com/94359650/152685466-7af48324-eaab-419f-9724-31da93ef3353.png">
</div>
作成したユーザーとログインしたユーザーのIDが同じだった場合のみ投稿編集が可能。
右が投稿編集が可能で、左が投稿編集不可。
投稿詳細画面の上部にある「Movie Edit」をクリックすることで、投稿編集画面へページ遷移する。
<br><br/>

投稿編集画面。
デフォルトでそれまで入力されていた値が表示される。
それを書き換え、「保存」をクリックすることで、編集が終わり、投稿詳細画面にページ遷移する。
<br><br/>

### ・投稿削除機能
<img width="200" alt="2022-01-31 (19)" src="https://user-images.githubusercontent.com/94359650/152686197-8c663a64-d243-4cde-899c-b04474871895.png">
投稿編集画面の「保存」ボタンの下の「この投稿を削除する」をクリックすることで投稿が削除され、投稿一覧画面へページ遷移する。
<br><br/>

### ・キーワード検索機能


## テーブル構成

テーブル構成はこちらのURLからご覧ください。


## 
