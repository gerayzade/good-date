# GoodDatePHP
PHP class used to convert date from "yymmdd" format to a human-readable string in a given language.
## How to use
```php
include "/path/to/php/gooddate.php";
// including php class:

$baddate = "170102";
// 17 (yy), 01 (mm), 02 (dd) 

$gooddate = new GoodDate($baddate);
// instantiation

echo $gooddate->convertDate('en');
// printing date as a human-readable string in English language: 2 Jan. 2017
```
## Supported languages
<ul>
<li>English (<b>en</b>)</li>
<li>Russian (<b>ru</b>)</li>
<li>Azerbaijani (<b>az</b>)</li>
<li>Germani (<b>de</b>)</li>
<li>French (<b>fr</b>)</li>
<li>Spanish (<b>es</b>)</li>
<li>Italian (<b>it</b>)</li>
</ul>

You can easily extend the class by declaring new array <b>$month_[lang]</b> with names of months in this language.
```php
private $month_en = array('Jan.', 'Feb.', 'Mar.', 'Apr.', 'May', 'June', 'July', 'Aug.', 'Sept.', 'Oct.', 'Nov.', 'Dec.');
```

