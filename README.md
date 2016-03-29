# toplan/phpsms for laravel 4 
laravel 5 版本请使用 https://github.com/toplan/laravel-sms
#install
``` composer require 'hardywen/phpsms-l4' '~1.0' ```

#config
config/app.php 两个数组加入：
```php
providers = [
  'Hardywen\PhpSms\PhpSmsServiceProvider'
]

aliases = [
	'SMS'=>'Hardywen\PhpSms\Facade\Sms',
]
```

```php artisan config:publish hardywen/phpsms-l4```

#exapmle
```php
$result = SMS::make()->to('138xxxxxxxx')->template([
        'Ucpaas'     => '1233',
        'YunTongXun' => '1211'
    ])->data(['123123', 10])->content('something')->send();
    
if($result['success'] == true){
   //发送成功，做你想做的事
}else{
  //发送失败
}
```
更多使用方式查看原组件

https://github.com/toplan/phpsms
