# API

## タスク管理API

|key        |type  |description                                      |
|-----------|------|-------------------------------------------------|
|id         |int   |タスクのIDです。一意の値になります。             |
|status_id  |int   |ステータスのIDです。ステータスAPIで利用できます。|
|user_id    |int   |担当者のユーザーIDになります。                   |
|title      |string|タスクのタイトルです。                           |
|description|string|タスクの説明です。                               |
|deadline   |string|タスクの締切日です。                             |
|created_at |string|タスクを作成したときの日時になります。           |
|updated_at |string|タスクの内容を更新したときの日時になります。     |

### エンドポイントリスト

|Method|Path            |Description                                   |
|------|----------------|----------------------------------------------|
|GET   |`/api/task`    |登録されているタスク一覧を配列で取得できます。|
|GET   |`/api/task/{id}`|`{id}`で指定したタスクのみを取得します。      |
|POST  |`/api/task`    |新規タスクを作成します。                      |
|PUT   |`/api/task/{id}`|`{id}`で指定したタスクの内容を更新できます。  |
|DELETE|`/api/task/{id}`|`{id}`で指定したタスクを論理削除します。      |

### GET: `/api/task`

#### リクエストパラメータ

なし

#### レスポンスデータ

```json
[
    {
        "id": 1,
        "status_id": 2,
        "user_id": 5,
        "title": "Dr.",
        "description": "I must sugar my hair.\" As a duck with its legs hanging down, but generally, just as well as if it began ordering people about like that!' But she waited patiently. 'Once,' said the Lory, who at last.",
        "deadline": null,
        "created_at": "2023-03-19T14:51:01.000000Z",
        "updated_at": "2023-03-19T14:51:01.000000Z"
    },
    {
        "id": 2,
        "status_id": 1,
        "user_id": 10,
        "title": "Prof.",
        "description": "She stretched herself up on tiptoe, and peeped over the fire, stirring a large flower-pot that stood near the entrance of the Rabbit's voice along--'Catch him, you by the officers of the moment they.",
        "deadline": null,
        "created_at": "2023-03-19T14:51:01.000000Z",
        "updated_at": "2023-03-19T14:51:01.000000Z"
    },
    …
    …
    …
]
```


### GET:`/api/task/{id}`

#### リクエストパラメータ

`id`は[GET:`/api/task`](#GET:-`/api/task`)から取得できるidを使用してください。

#### レスポンスデータ

`id`を1とした場合、以下のようなレスポンスデータが取得できます。

```json
{
    "id": 1,
    "status_id": 2,
    "user_id": 5,
    "title": "Dr.",
    "description": "I must sugar my hair.\" As a duck with its legs hanging down, but generally, just as well as if it began ordering people about like that!' But she waited patiently. 'Once,' said the Lory, who at last.",
    "deadline": null,
    "created_at": "2023-03-19T14:51:01.000000Z",
    "updated_at": "2023-03-19T14:51:01.000000Z"
}
```

### POST: `/api/task/`

#### リクエストパラメータ

|key        |default    |require|description                                             |
|-----------|-----------|-------|--------------------------------------------------------|
|status_id  |1          |x      |デフォルト値は'Draft'のstatus.idが割り当てられています。|
|user_id    |           |○      |ユーザーIDです。                                        |
|title      |None title.|x      |タスクのタイトルです。                                  |
|description|null       |x      |タスクの説明です。                                      |
|deadline   |null       |x      |タスクの締切日です。                                    |

例として、以下のようなJSONリクエストを作成してください。

```json
{
    "status_id": 1,
    "user_id": 1,
    "title": "test_task",
    "description": "task description test test test",
    "deadline": "2023/4/1"
}
```


#### レスポンスデータ

例のようなJSONでリクエストすると以下のようなレスポンスが得られます。

```json
{
    "created_data": {
        "id": 114,
        "status_id": 1,
        "user_id": 1,
        "title": "test_task",
        "description": "task description test test test",
        "deadline": "2023-04-01",
        "created_at": "2023-03-27T15:26:30.000000Z",
        "updated_at": "2023-03-27T15:26:30.000000Z"
    },
    "request_date": {
        "status_id": 1,
        "user_id": 1,
        "title": "test_task",
        "description": "task description test test test",
        "deadline": "2023/4/1"
    }
}
```

### PUT: `/api/task/{id}`

#### リクエストパラメータ

`id`は[GET:`/api/task`](#GET:-`/api/task`)から取得できるidを使用してください。

|key        |type  |description                                             |
|-----------|------|--------------------------------------------------------|
|status_id  |int   |デフォルト値は'Draft'のstatus.idが割り当てられています。|
|user_id    |int   |ユーザーIDです。                                        |
|title      |int   |タスクのタイトルです。                                  |
|description|string|タスクの説明です。                                      |
|deadline   |string|タスクの締切日です。                                    |

例として`/api/task/114`に対し、以下のようなJSONリクエストを作成してください。

```json
{
    "status_id": 1,
    "user_id": 1,
    "title": "test_update",
    "description": "task description test test test",
    "deadline": "2023/4/1"
}
```


#### レスポンスデータ

例のようなJSONでリクエストすると以下のようなレスポンスが得られます。

```json
{
    "updated_data": {
        "id": 114,
        "status_id": 1,
        "user_id": 1,
        "title": "test_update",
        "description": "task description test test test",
        "deadline": "2023-04-01",
        "created_at": "2023-03-27T15:26:30.000000Z",
        "updated_at": "2023-03-27T15:40:44.000000Z"
    },
    "request_date": {
        "status_id": 1,
        "user_id": 1,
        "title": "test_update",
        "description": "task description test test test",
        "deadline": "2023/4/1"
    }
}
```

### DELETE: `/api/task/{id}`

#### リクエストパラメータ

`id`は[GET:`/api/task`](#GET:-`/api/task`)から取得できるidを使用してください。

#### レスポンスデータ

`id`を1とした場合、以下のようなレスポンスデータが取得できます。

```json
{
    "deleted_task_info": {
        "id": 114,
        "module_id": 1,
        "status_id": 1,
        "user_id": 1,
        "title": "test_update",
        "description": "task description test test test",
        "deadline": "2023-04-01",
        "created_at": "2023-03-27T15:26:30.000000Z",
        "updated_at": "2023-03-27T15:45:03.000000Z",
        "deleted_at": "2023-03-27T15:45:03.000000Z"
    }
}
```
