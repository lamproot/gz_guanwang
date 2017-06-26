<?php if (!defined('THINK_PATH')) exit();//判断是否加载thinkphp,如果否则退出
/*********文件描述*********
 * @last update 2014-06-12
 * @alter
 * @version 1.0.0
 *
 * 功能简介：商户后台首页控制器类
 * @author
 * @copyright
 * @time 2014-06-12
 * @version 1.0.0
 */
	class NewsAction extends CommonAction {

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

			$this -> model = D('Common');
		}

	    /**
		 * 首页
		 *
		 * 参数描述：
		 *
		 *
		 *
		 * 返回值：
		 *
		 */
	    public function index()
	    {
	    	$type = isset($_GET['type']) && !empty($_GET['type']) ? intval($_GET['type']) : 0;
	    	
	    	$params = array(

	    		'table_name' => 'news',

	    		'order' => 'id asc',

	    		'where' => "is_del = 0 and type = " . $type
	    	);

	    	$result = $this -> model -> easy_select($params);
	
	    	$banner = $_SESSION['GuanWang']['nav_banner_config'][2]['url'];

			$this -> assign('result', $result);

			$this -> assign('banner', $banner);

			$this -> display();
	    }

	    /**
		 * 详情页面
		 *
		 * 参数描述：
		 *
		 *
		 *
		 * 返回值：
		 *
		 */
	    public function info()
	    {
	    	$id = isset($_GET['id']) && !empty($_GET['id']) ? intval($_GET['id']): $this -> _back("页面错误请重试") ;
	    	
	    	$params = array(

	    		'table_name' => 'news',

	    		'where' => "is_del = 0 and id = " . $id
	    	);

	    	$result = $this -> model -> my_find($params);

	    	$banner = $_SESSION['GuanWang']['nav_banner_config'][2]['url'];

			$this -> assign('result', $result);

			$this -> assign('banner', $banner);

			$this -> display();
	    }
	}
