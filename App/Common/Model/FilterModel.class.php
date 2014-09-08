<?php
namespace Common\Model;
use Think\Model;

/**
 *
 * @author Lenovo
 *        
 */
class FilterModel extends Model {

    /**
     *
     * @access public
     *        
     * @param string $name
     *            模型名称
     *            
     * @param string $tablePrefix
     *            表前缀
     *            
     * @param mixed $connection
     *            数据库连接信息
     *            
     */
    public function __construct($name = '', $tablePrefix = '', $connection = '') {
        parent::__construct($name = '', $tablePrefix = '', $connection = '');
    }

    /**
     */
    function __destruct() {}
    
    function say(){
        echo "这个Model在Common/Model下，所有模块共享的";
    }
}

?>