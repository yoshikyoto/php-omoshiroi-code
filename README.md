# PHP の面白いコード集

PHP には面白い仕様がいっぱいあります。

よくネタにされるのが、以下公式ドキュメントにある「PHP方の比較表」です。

https://www.php.net/manual/ja/types.comparisons.php

このリポジトリでは、こういった様々なPHPの仕様を検証していくリポジトリです。


## 空のJSON



## PHP の array

PHP の array はかなり特殊で、Array としても使えるし、 Hash としても使えるものになっています。

```php
$array = [1, 2, 3]
$hash = [
    "hoge" => 1,
    "fuga" => 2,
]
```

それゆえ、不思議な挙動をする場合があります。

### Array と Hash を混合したような形

```bash
cat array_slice_hanuke.php
php array_slice_hanuke.php
```

### Array の key の存在確認と Warning

```bash
cat arraynull.php
php arraynull.php
```

### array を json_encode する際の挙動の注意

```bash
cat empty_json.php
php empty_json.php
```

### array と string の挙動

```bash
cat string_array_access.php
php string_array_access.php
```