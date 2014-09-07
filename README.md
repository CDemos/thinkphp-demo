```php
//new  a module
//create and set the fault
// define('BIND_MODULE','Admin');
```

## 日志记录
默认情况下只是在调试模式记录日志，要在部署模式开启日志记录，必须在配置中开启LOG_RECORD参数，以及可以在应用配置文件中配置需要记录的日志级别，例如：
```php
'LOG_RECORD' => true, // 开启日志记录
```

## 关于加载函数
只要在`Application/Common/`下定义一个common.php，里面全写函数，理论上是可以可以加载得到，并在对应的范围的模块、函数中使用。

但是我试了是不行，因为压根没有加载那个`common.php`文件
在`/Conf/config.php`加入这么一行配置：`'LOAD_EXT_FILE' => 'common'` 即可

**NOTE:** 无法重复定义函数

