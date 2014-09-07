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

**NOTE:** 不能**重复**定义函数

## 如果我想加载我自己定义类(如工具类)，添加自己的类库目录（自动装载）
1. 利用import('class_name','base_url')来加载,有缓存但是每次都要手动
2. 公共类库除了在系统的Library目录之外，还可以自定义其他的命名空间，我们只需要注册一个新的命名空间，在应用或者模块配置文件中添加下面的设置参数：
```php
'AUTOLOAD_NAMESPACE' => array(
    'Lib'     => APP_PATH.'Lib',
)
```
我们在应用目录下面创建了一个Lib目录用于放置公共的Lib扩展，如果我们要把上面两个类库放到Lib\Sina目录下面，只需要调整为：
Lib\Sina\App类（位于Lib/Sina/App.class.php ）
```php
namespace Lib\Sina;
class App {
}
```

然后直接 
```php
$obj = new \Lib\Sina\App();
```





