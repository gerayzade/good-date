# GoodDatePHP
PHP class used to convert date from "yymmdd" format to a human-readable string in a given language.
## How to use
```php
include "/path/to/php/gooddate.php";
// including php class:

$baddate = "170102";
// 17 (yy), 01 (mm), 02 (dd) 

$gooddate = new GoodDate($baddate);
// constructing new gooddate

echo $gooddate->convertDate('en');
// printing date as a human-readable string in English language: 2 Jan 2017
```
## Supported languages: 
<ul>
<li>English (<b>en</b>)</li>
<li>Russian (<b>ru</b>)</li>
<li>Azerbaijani (<b>az</b>)</li>
</ul>
