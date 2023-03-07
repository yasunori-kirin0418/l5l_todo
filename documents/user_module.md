# User

## テーブル設計

### usersテーブル
|#|Column  |Data            |Primary_key|Not_null|Default       |Length|Comment   |
|-|--------|----------------|-----------|--------|--------------|------|----------|
|1|id      |unsigned_integer|○          |○       |auto_increment|      |ユーザーID|
|2|name    |varchar         |x          |○       |              |255   |ユーザー名|
|3|password|varchar         |x          |○       |              |255   |パスワード|
|4|email   |varchar         |x          |○       |              |255   |E-mail    |
