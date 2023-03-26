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


### API Endpoint

各エンドポイントへのリクエストで取得できるデータは、`Content-Type: application/json`です。

#### /api/task

|Method|Path            |Description                                   |
|------|----------------|----------------------------------------------|
|GET   |`/api/task/`    |登録されているタスク一覧を配列で取得できます。|
|GET   |`/api/task/{id}`|`{id}`で指定したタスクのみを取得します。      |
|POST  |`/api/task/`    |新規タスクを作成します。                      |
|PUT   |`/api/task/{id}`|`{id}`で指定したタスクの内容を更新できます。  |
|DELETE|`/api/task/{id}`|`{id}`で指定したタスクを論理削除します。      |

リクエストパラメータについては[task.md](./documents/task.md)をご覧ください。


## Memo

`l5l`とは、`laravel`という名称でリポジトリを作成したくなかったため`l5l`と省略しています。特別な意味はありません。
