# l5l_todo

***experimental repository...***

Laravel9で作られたTodoアプリのフリをした`laravel-modules`を使用したplaygroundです。


## Description

基本機能としてAPIのみを提供します。
GUIの実装予定はありません。

[nWidart/laravel-modules](https://github.com/nWidart/laravel-modules)を使用して、各機能をモジュール化させています。
各モジュールについては、[こちら](./documents/modules.md)を確認してください。

現状、Todoアプリとして作成していますが、本質はlaravelで機能をモジュール化させることで、拡張性と保守性を両立させる実験です。

## Usage

### Initialize

```bash
make init
make migrate

# ダミーデータが必要であれば実行してください。
make seed_db
```

makeで使えるコマンドについては`make help`で確認してください。


### API Endpoints

各エンドポイントへのリクエストで取得できるデータは、`Content-Type: application/json`です。

リクエストパラメータやレスポンスについては[api.md](./documents/api.md)をご覧ください。

テストに[Postman](https://www.postman.com/) を使用しています。
Postmanで使用している[プロファイル](./documents/l5l_todo.postman_collection.json) を用意してあります。

## ::NOTE::

現時点では、完璧な機能として完成はしていません。
最低限の機能として、`tasks`テーブルに対してのCRUD処理と`statuses`テーブルからステータスのリストを取得する機能が実装されています。

### Memo

`l5l`とは、`laravel`という名称でリポジトリを作成したくなかったため`l5l`と省略しています。特別な意味はありません。
