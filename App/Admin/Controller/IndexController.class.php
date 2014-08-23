<?php
namespace Admin\Controller;
use Think\Controller;

class IndexController extends Controller {
    // Action参数绑定上一页下一页
    public function index($username = "Anonymous") {
        echo "Welcome " . $username . " to Admin Index Page";
    }
    
    // 前置和后置操作的注意事项如下：
    // 1.
    // 如果当前的操作并没有定义操作方法，而是直接渲染模板文件，那么如果定义了前置和后置方法的话，依然会生效。真正有模板输出的可能仅仅是当前的操作，前置和后置操作一般情况是没有任何输出的。
    // 2. 需要注意的是，在有些方法里面使用了exit或者错误输出之类的话
    // 有可能不会再执行后置方法了。例如，如果在当前操作里面调用了系统Action的error方法，那么将不会再执行后置操作，但是不影响success方法的后置方法执行。
    
    // 前置操作方法
    public function _before_valid() {
        echo 'before<br/>';
    }

    public function valid() {
        echo 'valid<br/>';
    }
    
    // 后置操作方法
    public function _after_valid() {
        echo 'after<br/>';
    }
    
    //输入变量    过滤变量
    public function email(){
        //http://localhost/thinkphp-demo/index.php/admin/index/email/e/tonjayin@g.com
        $email = I('get.e','','email');
        echo $email;
        if($email){
            echo "  is ok";
        }else{
            echo "  is not correct!";
        }
    }
}