<?php if (!defined('THINK_PATH')) exit();//判断是否加载thinkphp,如果否则退出
class IndexAction extends CommonAction {

    /**
     * 构造方法-实例化MODEL
     *
     * 参数描述：
     *
     *
     *
     * 返回值：
     *
     */


    public function __construct()
    {
        parent::__construct();

        $this -> model = D('Corps');
    }

    public function index()
    {
        

        $this -> assign('result', $result);

		$this -> display();
	}
}
