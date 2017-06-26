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
	    		'tables' => 'zx_teams as t, zx_team_class as tc',

	    		'field' => 't.*,tc.name as tname',

	    		'order' => 't.id desc',

	    		'where' => "t.team_class_id = tc.id and t.is_del = 0"
	    	);

	    	$result = $this -> model -> table_select($params);

	    	foreach ($result['result'] as $key => $value) {
	    		if ($value['logo']) {
	    			$result['result'][$key]['logo'] = "http://". $_SERVER['HTTP_HOST'] . __ROOT__ . "/Uploads/images/teams/" . $value['logo'];
	    		}
	    	}

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
	    		$data['name'] = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : $this -> _back('请填写必填项');

	    		$data['title'] = isset($_POST['title']) ? htmlspecialchars($_POST['title']) : $this -> _back('请填写必填项');

	    		$data['degree'] = isset($_POST['degree']) ? htmlspecialchars($_POST['degree']) : $this -> _back('请填写必填项');

	    		$data['team_class_id'] = isset($_POST['team_class_id']) ? intval($_POST['team_class_id']) : 0;

	    		$data['content'] = isset($_POST['content']) ? htmlspecialchars($_POST['content']) : $this -> _back('请填写必填项');

	    		//$data['logo'] = isset($_POST['logoname']) ? htmlspecialchars($_POST['logoname']) : $this -> _back('请上传头图');

	    		$logo = $this -> _upload_pic('teams');

	    		if ($logo['status'] == 1)
	    		{
	    			$data['logo'] = $logo['msg'];
	    		}
	    		// else
	    		// {
	    		// 	$this -> _back($logo['msg']);
	    		// }

	    		$data['is_del'] = 0;

	    		$params = array(

	    			'table_name' => 'teams',

	    			'data' => $data
	    		);

	    		$news_add = $this -> model -> my_add($params);

	    		if ($news_add)
	    		{
	    			redirect(__APP__.'/Teams/index', 0);
	    		}
	    		else
	    		{
	    			$this -> _back('创建失败 请稍后重试');
	    		}
	    	}

	    	$params = array(

	    		'table_name' => 'team_class',

	    		'order' => 'id desc',

	    		'where' => "is_del = 0"
	    	);

	    	$result['team_class'] = $this -> model -> easy_select($params);

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

	    		'table_name' => 'teams',

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
	    		$data['name'] = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : $this -> _back('请填写必填项');

	    		$data['title'] = isset($_POST['title']) ? htmlspecialchars($_POST['title']) : $this -> _back('请填写必填项');

	    		$data['degree'] = isset($_POST['degree']) ? htmlspecialchars($_POST['degree']) : $this -> _back('请填写必填项');

	    		$data['team_class_id'] = isset($_POST['team_class_id']) ? intval($_POST['team_class_id']) : 0;

	    		$data['content'] = isset($_POST['content']) ? htmlspecialchars($_POST['content']) : $this -> _back('请填写必填项');

	    		//$data['logo'] = isset($_POST['logoname']) ? htmlspecialchars($_POST['logoname']) : $this -> _back('请上传头图');

	    		$logo = $this -> _upload_pic('teams');

	    		if ($logo['status'] == 1)
	    		{
	    			$data['logo'] = $logo['msg'];
	    		}

	    		$params = array(

	    			'table_name' => 'teams',

	    			'where' => "id = {$id}",

	    			'data' => $data
	    		);

	    		$news_save = $this -> model -> my_save($params);

	    		if ($news_save)
	    		{
	    			redirect(__APP__.'/Teams/index', 0);
	    		}
	    		else
	    		{
	    			$this -> _back('保存失败 请稍后重试');
	    		}
	    	}
	    	
	    	$result['logo'] = "http://". $_SERVER['HTTP_HOST'] . __ROOT__ . "/Uploads/images/teams/" . $result['logo'];

	    	$params = array(

	    		'table_name' => 'team_class',

	    		'order' => 'id desc',

	    		'where' => "is_del = 0"
	    	);

	    	$result['team_class'] = $this -> model -> easy_select($params);

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

	    		'table_name' => 'teams',

	    		'where' => "id = {$id} AND is_del = 0",

	    		'data' => $data
	    	);

	    	$news_save = $this -> model -> my_save($params);

	    	if ($news_save)
	    	{
	    		redirect(__APP__.'/Teams/index', 0);
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

	    		'table_name' => 'teams',

	    		'where' => "id = {$id} AND is_del = 0 AND status = {$type}",

	    		'data' => $data
	    	);

	    	$news_save = $this -> model -> my_save($params);

	    	if ($news_save)
	    	{
	    		redirect(__APP__.'/Teams/index', 0);
	    	}
	    	else
	    	{
	    		$this -> _back('标注失败 请稍后重试');
	    	}
	    }
	}
