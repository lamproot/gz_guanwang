<?php if (!defined('THINK_PATH')) exit();//判断是否加载thinkphp,如果否则退出
/*********文件描述*********
 * @last update  
 * @alter
 * @version 1.0.0
 *
 * 功能简介： 
 * @author  
 * @copyright  
 * @time  
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

			$this -> model = D('News');
		}

	    /**
		 * 展示型首页
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

	    		'table_name' => 'news',

	    		'order' => 'id desc',

	    		'where' => "is_del = 0"
	    	);

	    	$result = $this -> model -> order_select($params);

	    	$this -> assign('result', $result);

	    	$this -> display();
	    }

	    /**
		 * 新增
		 *
		 * 参数描述：
		 *
		 *
		 *
		 * 返回值：
		 *
		 */
	    public function add()
	    {
	    	$form_key = htmlspecialchars($_POST['form_key']);

	    	if ($form_key == 'yes')
	    	{
	    		$data['title'] = isset($_POST['title']) ? htmlspecialchars($_POST['title']) : $this -> _back('请填写标题');

	    		$data['type'] = isset($_POST['type']) ? intval($_POST['type']) : $this -> _back('请选择类型');

	    		$data['from_str'] = isset($_POST['from_str']) ? htmlspecialchars($_POST['from_str']) : $this -> _back('请选择类型');

	    		$data['level'] = isset($_POST['level']) ? intval($_POST['level']) : 0;

	    		$data['content'] = isset($_POST['content']) ? htmlspecialchars($_POST['content']) : $this -> _back('请填写新闻内容');

	    		$data['desc'] = strip_tags($_POST['content']);
    			$data['desc'] = preg_replace ('/\n/is', '', $data['desc']);
			    $data['desc'] = preg_replace ('/ |　/is', '', $data['desc']);
			    $data['desc'] = preg_replace ('/&nbsp;/is', '', $data['desc']);

	    		$data['logo'] = isset($_POST['logoname']) ? htmlspecialchars($_POST['logoname']) : $this -> _back('请上传头图');

	    		// $logo = $this -> _upload_pic('news');

	    		// if ($logo['status'] == 1)
	    		// {
	    		// 	$data['logo'] = $logo['msg'];
	    		// }
	    		// else
	    		// {
	    		// 	$this -> _back($logo['msg']);
	    		// }

	    		$data['viewnum'] = 0;

	    		$data['status'] = 0;

	    		$data['created_at'] = time();

	    		$data['updated_at'] = time();

	    		$data['is_del'] = 0;

	    		$params = array(

	    			'table_name' => 'news',

	    			'data' => $data
	    		);

	    		$news_add = $this -> model -> my_add($params);

	    		if ($news_add)
	    		{
	    			redirect(__APP__.'/News/index', 0);
	    		}
	    		else
	    		{
	    			$this -> _back('创建失败 请稍后重试');
	    		}
	    	}

	    	$this -> assign('result', $result);

	    	$this -> display();
	    }

	    /**
		 * 编辑
		 *
		 * 参数描述：
		 *
		 *
		 *
		 * 返回值：
		 *
		 */
	    public function edit()
	    {
	    	$id = isset($_POST['id']) ? intval($_POST['id']) : intval($_GET['id']);

	    	if (!$id)
	    	{
	    		$this -> _back('错误的参数');
	    	}

	    	$params = array(

	    		'table_name' => 'news',

	    		'where' => "id = {$id} AND is_del = 0"
	    	);

	    	$result = $this -> model -> my_find($params);

	    	if (!$result)
	    	{
	    		$this -> _back('没有符合的记录');
	    	}

	    	$form_key = htmlspecialchars($_POST['form_key']);

	    	if ($form_key == 'yes')
	    	{
	    		$data['title'] = isset($_POST['title']) ? htmlspecialchars($_POST['title']) : $this -> _back('请填写标题');

	    		$data['type'] = isset($_POST['type']) ? intval($_POST['type']) : $this -> _back('请选择类型');

	    		$data['from_str'] = isset($_POST['from_str']) ? htmlspecialchars($_POST['from_str']) : $this -> _back('请选择类型');

	    		$data['level'] = isset($_POST['level']) ? intval($_POST['level']) : 0;

	    		$data['content'] = isset($_POST['content']) ? htmlspecialchars($_POST['content']) : $this -> _back('请填写新闻内容');

	    		$data['desc'] = strip_tags($_POST['content']);
    			$data['desc'] = preg_replace ('/\n/is', '', $data['desc']);
			    $data['desc'] = preg_replace ('/ |　/is', '', $data['desc']);
			    $data['desc'] = preg_replace ('/&nbsp;/is', '', $data['desc']);

	    		$data['logo'] = isset($_POST['logoname']) ? htmlspecialchars($_POST['logoname']) : $this -> _back('请上传头图');

	    		// $logo = $this -> _upload_pic('news');

	    		// if ($logo['status'] == 1)
	    		// {
	    		// 	$data['logo'] = $logo['msg'];
	    		// }

	    		$params = array(

	    			'table_name' => 'news',

	    			'where' => "id = {$id}",

	    			'data' => $data
	    		);

	    		$news_save = $this -> model -> my_save($params);

	    		if ($news_save)
	    		{
	    			redirect(__APP__.'/News/index', 0);
	    		}
	    		else
	    		{
	    			$this -> _back('保存失败 请稍后重试');
	    		}
	    	}
	    	//$result['content'] = htmlspecialchars_decode($result['content']);
	    	$this -> assign('result', $result);

	    	$this -> display();
	    }

	    /**
		 * 删除
		 *
		 * 参数描述：
		 *
		 *
		 *
		 * 返回值：
		 *
		 */
	    public function delete()
	    {
	    	$id = isset($_GET['id']) ? intval($_GET['id']) : $this -> _back('错误的参数');

	    	$data['is_del'] = 1;

	    	$data['updated_at'] = time();

	    	$params = array(

	    		'table_name' => 'news',

	    		'where' => "id = {$id} AND is_del = 0",

	    		'data' => $data
	    	);

	    	$news_save = $this -> model -> my_save($params);

	    	if ($news_save)
	    	{
	    		redirect(__APP__.'/News/index', 0);
	    	}
	    	else
	    	{
	    		$this -> _back('删除失败 请稍后重试');
	    	}
	    }

	    /**
		 * 启用/禁用
		 *
		 * 参数描述：
		 *
		 *
		 *
		 * 返回值：
		 *
		 */
	    public function status()
	    {
	    	$id = isset($_GET['id']) ? intval($_GET['id']) : $this -> _back('错误的参数');

	    	$type = isset($_GET['type']) ? intval($_GET['type']) : $this -> _back('错误的参数');

	    	$data['updated_at'] = time();

	    	if ($type == 0)
	    	{
	    		//禁用
	    		$data['status'] = 1;
	    	}
	    	else
	    	{
	    		//启用
	    		$data['status'] = 0;
	    	}

	    	$params = array(

	    		'table_name' => 'news',

	    		'where' => "id = {$id} AND is_del = 0 AND status = {$type}",

	    		'data' => $data
	    	);

	    	$news_save = $this -> model -> my_save($params);

	    	if ($news_save)
	    	{
	    		redirect(__APP__.'/News/index', 0);
	    	}
	    	else
	    	{
	    		$this -> _back('标注失败 请稍后重试');
	    	}
	    }
	}
