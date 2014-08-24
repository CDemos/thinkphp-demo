```php
//new  a module
//create and set the fault
// define('BIND_MODULE','Admin');
```

### 日志记录
默认情况下只是在调试模式记录日志，要在部署模式开启日志记录，必须在配置中开启LOG_RECORD参数，以及可以在应用配置文件中配置需要记录的日志级别，例如：
```php
'LOG_RECORD' => true, // 开启日志记录
```

