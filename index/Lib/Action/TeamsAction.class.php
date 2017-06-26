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
	class TeamsAction extends CommonAction {

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

			$this -> model = D('Teams');
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
	    	$params = array(

	    		'table_name' => 'teams',

	    		'order' => 'id asc',

	    		'where' => "is_del = 0"
	    	);

	    	$result['teams'] = $this -> model -> easy_select($params);

	    	$params = array(

	    		'table_name' => 'team_class',

	    		'order' => 'level asc',

	    		'where' => "is_del = 0"
	    	);

	    	$result['team_class'] = $this -> model -> easy_select($params);

	    	$banner = $_SESSION['GuanWang']['nav_banner_config'][0]['url'];

			$this -> assign('result', $result);

			$this -> assign('banner', $banner);

			$this -> display();
	    }
	}
