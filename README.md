# sms253

## 安装

```
$ composer require liuhelong/sms253

$ php artisan vendor:publish --provider="Liuhelong\Sms253\ServiceProvider"
```
## 参数配置

配置253短信接口参数 建议在env文件中配置

## 使用
```php
<?php

*****
use Liuhelong\Sms253\Sms;

*****

$sms = new Sms;
$sms->send('mobile','message');

// 发送成功返回 true，否则抛出exception
