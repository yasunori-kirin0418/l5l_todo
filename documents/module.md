# Module

## テーブル設計

### modulesテーブル

|#|Column    |Data            |Primary_key|Not_null|Default                                      |Length|Comment     |
|-|----------|----------------|-----------|--------|---------------------------------------------|------|------------|
|1|id        |UNSIGNED_INTEGER|○          |○       |AUTO_INCREMENT                               |      |モジュールID|
|2|name      |varchar         |x          |○       |                                             |255   |モジュール名|
|5|created_at|DATETIME        |x          |○       |CURRENT_TIMESTAMP                            |      |作成日      |
|6|updated_at|DATETIME        |x          |○       |CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP|      |更新日      |

### module_userテーブル(中間テーブル)

|#|Column   |Data            |Primary_key|Not_null|Default       |Length|Comment         |
|-|---------|----------------|-----------|--------|--------------|------|----------------|
|1|id       |UNSIGNED_INTEGER|○          |○       |AUTO_INCREMENT|      |モジュール管理ID|
|2|module_id|UNSIGNED_INTEGER|x          |○       |              |      |モジュールID    |
|3|user_id  |UNSIGNED_INTEGER|x          |○       |              |      |ユーザーID      |
|4|enabled  |BOOLEAN         |x          |○       |              |      |モジュール有効化|
