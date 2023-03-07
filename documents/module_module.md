# Module

## テーブル設計

### modulesテーブル

|#|Column  |Data            |Primary_key|Not_null|Default       |Length|Comment     |
|-|--------|----------------|-----------|--------|--------------|------|------------|
|1|id      |unsigned_integer|○          |○       |auto_increment|      |モジュールID|
|2|name    |varchar         |x          |○       |              |255   |モジュール名|


### module_userテーブル(中間テーブル)

|#|Column   |Data            |Primary_key|Not_null|Default       |Length|Comment         |
|-|---------|----------------|-----------|--------|--------------|------|----------------|
|1|id       |unsigned_integer|○          |○       |auto_increment|      |モジュール管理ID|
|2|module_id|unsigned_integer|x          |○       |              |      |モジュールID    |
|3|user_id  |unsigned_integer|x          |○       |              |      |ユーザーID      |
|4|enabled  |boolean         |x          |○       |              |      |モジュール有効化|
