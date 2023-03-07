# Task

## テーブル設計

### tasksテーブル

|# |Column              |Data            |Primary_key|Not_null|Default                                      |Length|Comment               |
|--|--------------------|----------------|-----------|--------|---------------------------------------------|------|----------------------|
|1 |id                  |unsigned_integer|○          |○       |auto_increment                               |      |タスクID              |
|2 |module_id           |unsigned_integer|x          |○       |                                             |      |モジュールID          |
|3 |status_id           |unsigned_integer|x          |○       |                                             |      |ステータスID          |
|4 |category_id         |unsigned_integer|x          |○       |                                             |      |カテゴリーID          |
|5 |author_id           |unsigned_integer|x          |○       |                                             |      |作成者ID(ユーザーID)  |
|6 |user_id             |unsigned_integer|x          |x       |                                             |      |担当者ID(ユーザーID)  |
|7 |title               |varchar         |x          |○       |                                             |255   |タイトル              |
|8 |description         |text            |x          |x       |                                             |      |説明                  |
|9 |deadline            |date            |x          |x       |                                             |      |締切日                |
|10|created_at          |datetime        |x          |○       |current_timestamp                            |      |作成日                |
|11|updated_at          |datetime        |x          |○       |current_timestamp on update current_timestamp|      |更新日                |


### statusesテーブル

|#|Column|Data            |Primary_key|Not_null|Default       |Length|Comment     |
|-|------|----------------|-----------|--------|--------------|------|------------|
|1|id    |unsigned_integer|○          |○       |auto_increment|      |ステータスID|
|2|name  |varchar         |x          |○       |              |255   |ステータス名|


#### status_taskテーブル(中間テーブル)

|#|Column   |Data            |Primary_key|Not_null|Default       |Length|Comment     |
|-|---------|----------------|-----------|--------|--------------|------|------------|
|1|status_id|unsigned_integer|○          |○       |auto_increment|      |ステータスID|
|2|task_id  |unsigned_integer|○          |○       |auto_increment|      |タスクID    |


### categoriesテーブル

|#|Column|Data            |Primary_key|Not_null|Default       |Length|Comment     |
|-|------|----------------|-----------|--------|--------------|------|------------|
|1|id    |unsigned_integer|○          |○       |auto_increment|      |カテゴリーID|
|2|name  |varchar         |x          |○       |              |255   |カテゴリ名  |


#### category_taskテーブル(中間テーブル)

|#|Column     |Data            |Primary_key|Not_null|Default       |Length|Comment     |
|-|-----------|----------------|-----------|--------|--------------|------|------------|
|1|category_id|unsigned_integer|○          |○       |auto_increment|      |カテゴリーID|
|2|task_id    |unsigned_integer|○          |○       |auto_increment|      |タスクID    |
