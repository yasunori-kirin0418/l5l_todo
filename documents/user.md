# User

## テーブル設計

### usersテーブル

|#|Column    |Data            |Primary_key|Not_null|Default                                      |Length|Comment   |
|-|----------|----------------|-----------|--------|---------------------------------------------|------|----------|
|1|id        |UNSIGNED BIGINT |○          |○       |AUTO_INCREMENT                               |      |ユーザーID|
|2|name      |VARCHAR         |x          |○       |                                             |255   |ユーザー名|
|3|password  |VARCHAR         |x          |○       |                                             |255   |パスワード|
|4|email     |VARCHAR         |x          |○       |                                             |255   |E-mail    |
|5|created_at|DATETIME        |x          |○       |CURRENT_TIMESTAMP                            |      |作成日    |
|6|updated_at|DATETIME        |x          |○       |CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP|      |更新日    |
