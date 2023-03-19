# Task

## テーブル設計

### tasksテーブル

|# |Column              |Data            |Primary_key|Not_null|Default                                      |Length|Comment               |
|--|--------------------|----------------|-----------|--------|---------------------------------------------|------|----------------------|
|1 |id                  |unsigned_integer|○          |○       |auto_increment                               |      |タスクID              |
|2 |module_id           |unsigned_integer|x          |○       |                                             |      |モジュールID          |
|3 |status_id           |unsigned_integer|x          |○       |                                             |      |ステータスID          |
|4 |user_id             |unsigned_integer|x          |x       |                                             |      |担当者ID(ユーザーID)  |
|5 |title               |varchar         |x          |○       |                                             |255   |タイトル              |
|6 |description         |text            |x          |x       |                                             |      |説明                  |
|7 |deadline            |date            |x          |x       |                                             |      |締切日                |
|8 |created_at          |datetime        |x          |○       |current_timestamp                            |      |作成日                |
|9 |updated_at          |datetime        |x          |○       |current_timestamp on update current_timestamp|      |更新日                |
|10|deleted_at          |datetime        |x          |○       |                                             |      |削除日                |


### statusesテーブル

|#|Column|Data            |Primary_key|Not_null|Default       |Length|Comment     |
|-|------|----------------|-----------|--------|--------------|------|------------|
|1|id    |unsigned_integer|○          |○       |auto_increment|      |ステータスID|
|2|name  |varchar         |x          |○       |              |255   |ステータス名|