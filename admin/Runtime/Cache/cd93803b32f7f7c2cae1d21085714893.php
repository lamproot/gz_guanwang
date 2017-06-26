<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><meta name="renderer" content="webkit">

    <title>管理后台</title>
    <meta name="keywords" content="管理后台">
    <meta name="description" content="管理后台">

    <link href="__PUBLIC__/css/bootstrap.min.css?v=3.4.0" rel="stylesheet">
    <link href="__PUBLIC__/font-awesome/css/font-awesome.css?v=4.3.0" rel="stylesheet">
    <link href="__PUBLIC__/css/animate.css" rel="stylesheet">

    <link href="__PUBLIC__/css/plugins/summernote/summernote.css" rel="stylesheet">
    <link href="__PUBLIC__/css/plugins/summernote/summernote-bs3.css" rel="stylesheet">
    <link href="__PUBLIC__/css/style.min.css?v=2.2.0" rel="stylesheet">

</head>
<body class="fixed-sidebar full-height-layout gray-bg">
    <div id="wrapper">
    	<nav class="navbar-default navbar-static-side" role="navigation">
	<div class="nav-close"><i class="fa fa-times-circle"></i>
        </div>
	<div class="sidebar-collapse">
		<!-- <img src="__PUBLIC__/images/admin_logo.jpg" alt="" style="width:100%"> -->
		
		<ul class="nav" id="side-menu">
			<!-- <li class="nav-header">
                    <div class="dropdown profile-element">
                        <span><img alt="image" class="img-circle" src="http://orheaidcn.bkt.clouddn.com/profile_small.jpg"></span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#" aria-expanded="false">
                                <span class="clear">
                               <span class="block m-t-xs"><strong class="font-bold">admin</strong></span>
                                <span class="text-muted text-xs block">超级管理员<b class="caret"></b></span>
                                </span>
                        </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li class="divider"></li>
                            <li>
                                <a href="login.html">安全退出</a>
                            </li>
                        </ul>
                    </div>
                    <div class="logo-element">后台管理系统
                    </div>
                </li> -->
			<li class="<?php if (MODULE_NAME == 'Index' && ACTION_NAME == 'index') {echo 'active';} ?>">
				<a href="index.html"><i class="fa fa-home"></i> <span class="nav-label">首页</span> <span class="fa arrow"></span></a>
				<ul class="nav nav-second-level">
					<li class="<?php if (MODULE_NAME == 'Index' && ACTION_NAME == 'index') {echo 'active bcolor';} ?>">
						<a href="__APP__">首页</a>
					</li>
				</ul>
			</li>
			<li class="<?php if (MODULE_NAME == 'News') {echo 'active';} ?>">
				<a href="__APP__/News/index"><i class="fa fa-newspaper-o"></i> <span class="nav-label">新闻动态</span> <span class="fa arrow"></span></a>
				<ul class="nav nav-second-level">
					<li class="<?php if (MODULE_NAME == 'News' && ACTION_NAME == 'index') {echo 'active bcolor';} ?>">
						<a href="__APP__/News/index">新闻动态</a>
					</li>
				</ul>
			</li>

			<li class="<?php if (MODULE_NAME == 'Abouts') {echo 'active';} ?>">
				<a href="__APP__/Abouts/index"><i class="fa fa-newspaper-o"></i> <span class="nav-label">关于公司</span> <span class="fa arrow"></span></a>
				<ul class="nav nav-second-level">
					<li class="<?php if (MODULE_NAME == 'Abouts' && ACTION_NAME == 'index') {echo 'active bcolor';} ?>">
						<a href="__APP__/Abouts/index">公司简介</a>
					</li>
				</ul>
			</li>
			
			<li class="<?php if (MODULE_NAME == 'Teams' || MODULE_NAME == 'TeamClass') {echo 'active';} ?>">
				<a href="__APP__/Teams/index"><i class="fa fa-newspaper-o"></i> <span class="nav-label">团队管理</span> <span class="fa arrow"></span></a>
				<ul class="nav nav-second-level">
					
					<li class="<?php if (MODULE_NAME == 'Teams' && ACTION_NAME == 'index') {echo 'active';} ?>">
						<a href="__APP__/Teams/index">团队管理</a>
					</li>

					<li class="<?php if (MODULE_NAME == 'TeamClass' && ACTION_NAME == 'index') {echo 'active';} ?>">
						<a href="__APP__/TeamClass/index">团队分类</a>
					</li>

				</ul>
			</li>


			<li class="<?php if (MODULE_NAME == 'Segments') {echo 'active';} ?>">
				<a href="__APP__/Segments/index"><i class="fa fa-newspaper-o"></i> <span class="nav-label">业务板块</span> <span class="fa arrow"></span></a>
				<ul class="nav nav-second-level">
					<li class="<?php if (MODULE_NAME == 'Segments' && ACTION_NAME == 'index') {echo 'active bcolor';} ?>">
						<a href="__APP__/Segments/index">业务板块</a>
					</li>
					
				</ul>
			</li>

			<!-- <li class="<?php if (MODULE_NAME == 'News' && ACTION_NAME == 'index') {echo 'active';} ?>">
				<a href="__APP__/News/index"><i class="fa fa-newspaper-o"></i> <span class="nav-label">图片管理</span> <span class="fa arrow"></span></a>
				<ul class="nav nav-second-level">
					<li class="<?php if (MODULE_NAME == 'News' && ACTION_NAME == 'index') {echo 'active bcolor';} ?>">
						<a href="__APP__/News/index">首页管理</a>
					</li>
					<li class="<?php if (MODULE_NAME == 'News' && ACTION_NAME == 'index') {echo 'active bcolor';} ?>">
						<a href="__APP__/News/index">关于公司</a>
					</li>
					<li class="<?php if (MODULE_NAME == 'News' && ACTION_NAME == 'index') {echo 'active bcolor';} ?>">
						<a href="__APP__/News/index">业务板块</a>
					</li>
					<li class="<?php if (MODULE_NAME == 'News' && ACTION_NAME == 'index') {echo 'active bcolor';} ?>">
						<a href="__APP__/News/index">新闻动态</a>
					</li>
					
				</ul>
			</li> -->

			<!-- <li>
				<a href="index.html#"><i class="fa fa fa-globe"></i> <span class="nav-label">v2.0新增</span><span class="fa arrow"></span></a>
				<ul class="nav nav-second-level">
					<li><a href="toastr_notifications.html">Toastr通知</a>
					</li>
					<li><a href="nestable_list.html">嵌套列表</a>
					</li>
					<li><a href="timeline_v2.html">时间轴</a>
					</li>
					<li><a href="forum_main.html">论坛</a>
					</li>
					<li><a href="code_editor.html">代码编辑器</a>
					</li>
					<li><a href="modal_window.html">模态窗口</a>
					</li>
					<li><a href="validation.html">表单验证</a>
					</li>
					<li><a href="tree_view_v2.html">树形视图</a>
					</li>
					<li><a href="chat_view.html">聊天窗口</a>
					</li>
				</ul>
			</li>

			<li>
				<a href="index.html#"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">图表</span><span class="fa arrow"></span></a>
				<ul class="nav nav-second-level">
					<li><a href="graph_echarts.html">百度ECharts</a>
					</li>
					<li><a href="graph_flot.html">Flot</a>
					</li>
					<li><a href="graph_morris.html">Morris.js</a>
					</li>
					<li><a href="graph_rickshaw.html">Rickshaw</a>
					</li>
					<li><a href="graph_peity.html">Peity</a>
					</li>
					<li><a href="graph_sparkline.html">Sparkline</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="mailbox.html"><i class="fa fa-envelope"></i> <span class="nav-label">信箱 </span><span class="label label-warning pull-right">16</span></a>
				<ul class="nav nav-second-level">
					<li><a href="mailbox.html">收件箱</a>
					</li>
					<li><a href="mail_detail.html">查看邮件</a>
					</li>
					<li><a href="mail_compose.html">写信</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="widgets.html"><i class="fa fa-flask"></i> <span class="nav-label">小工具</span></a>
			</li>
			<li>
				<a href="index.html#"><i class="fa fa-edit"></i> <span class="nav-label">表单</span><span class="fa arrow"></span></a>
				<ul class="nav nav-second-level">
					<li><a href="form_basic.html">基本表单</a>
					</li>
					<li><a href="form_validate.html">表单验证</a>
					</li>
					<li><a href="form_advanced.html">高级插件</a>
					</li>
					<li><a href="form_wizard.html">步骤条</a>
					</li>
					<li><a href="form_webuploader.html">百度WebUploader</a>
					</li>
					<li><a href="form_file_upload.html">文件上传</a>
					</li>
					<li><a href="form_editors.html">富文本编辑器</a>
					</li>
					<li><a href="form_simditor.html">simditor</a>
					</li>
					<li><a href="form_avatar.html">头像裁剪上传</a>
					</li>
					<li><a href="layerdate.html">日期选择器layerDate</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="index.html#"><i class="fa fa-desktop"></i> <span class="nav-label">页面</span></a>
				<ul class="nav nav-second-level">
					<li><a href="contacts.html">联系人</a>
					</li>
					<li><a href="profile.html">个人资料</a>
					</li>
					<li><a href="projects.html">项目</a>
					</li>
					<li><a href="project_detail.html">项目详情</a>
					</li>
					<li><a href="file_manager.html">文件管理器</a>
					</li>
					<li><a href="calendar.html">日历</a>
					</li>
					<li><a href="faq.html">帮助中心</a>
					</li>
					<li><a href="timeline.html">时间轴</a>
					</li>
					<li><a href="pin_board.html">标签墙</a>
					</li>
					<li><a href="invoice.html">单据</a>
					</li>
					<li><a href="login.html">登录</a>
					</li>
					<li><a href="register.html">注册</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="index.html#"><i class="fa fa-files-o"></i> <span class="nav-label">其他页面</span><span class="fa arrow"></span></a>
				<ul class="nav nav-second-level">
					<li><a href="search_results.html">搜索结果</a>
					</li>
					<li><a href="lockscreen.html">登录超时</a>
					</li>
					<li><a href="404.html">404页面</a>
					</li>
					<li><a href="500.html">500页面</a>
					</li>
					<li><a href="empty_page.html">空白页</a>
					</li>
				</ul>
			</li>

			<li>
				<a href="index.html#"><i class="fa fa-flask"></i> <span class="nav-label">UI元素</span><span class="fa arrow"></span></a>
				<ul class="nav nav-second-level">
					<li><a href="typography.html">排版</a>
					</li>
					<li><a href="icons.html">字体图标</a>
					</li>
					<li><a href="iconfont.html">阿里巴巴矢量图标库</a>
					</li>
					<li><a href="draggable_panels.html">拖动面板</a>
					</li>
					<li><a href="buttons.html">按钮</a>
					</li>
					<li><a href="tabs_panels.html">选项卡 & 面板</a>
					</li>
					<li><a href="notifications.html">通知 & 提示</a>
					</li>
					<li><a href="badges_labels.html">徽章，标签，进度条</a>
					</li>
					<li><a href="layer.html">Web弹层组件layer</a>
					</li>
					<li><a href="tree_view.html">树形视图</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="grid_options.html"><i class="fa fa-laptop"></i> <span class="nav-label">栅格</span></a>
			</li>
			<li>
				<a href="index.html#"><i class="fa fa-table"></i> <span class="nav-label">表格</span><span class="fa arrow"></span></a>
				<ul class="nav nav-second-level">
					<li><a href="table_basic.html">基本表格</a>
					</li>
					<li><a href="table_data_tables.html">数据表格(DataTables)</a>
					</li>
					<li><a href="table_jqgrid.html">jqGrid</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="index.html#"><i class="fa fa-picture-o"></i> <span class="nav-label">图库</span><span class="fa arrow"></span></a>
				<ul class="nav nav-second-level">
					<li><a href="basic_gallery.html">基本图库</a>
					</li>
					<li><a href="carousel.html">图片切换</a>
					</li>

				</ul>
			</li>
			<li>
				<a href="index.html#"><i class="fa fa-sitemap"></i> <span class="nav-label">菜单 </span><span class="fa arrow"></span></a>
				<ul class="nav nav-second-level">
					<li>
						<a href="index.html#">三级菜单 <span class="fa arrow"></span></a>
						<ul class="nav nav-third-level">
							<li>
								<a href="index.html#">三级菜单 01</a>
							</li>
							<li>
								<a href="index.html#">三级菜单 01</a>
							</li>
							<li>
								<a href="index.html#">三级菜单 01</a>
							</li>

						</ul>
					</li>
					<li><a href="index.html#">二级菜单</a>
					</li>
					<li>
						<a href="index.html#">二级菜单</a>
					</li>
					<li>
						<a href="index.html#">二级菜单</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="webim.html"><i class="fa fa-comments"></i> <span class="nav-label">即时通讯</span><span class="label label-danger pull-right">New</span></a>
			</li>
			<li>
				<a href="css_animation.html"><i class="fa fa-magic"></i> <span class="nav-label">CSS动画</span></a>
			</li>
			<li>
				<a href="index.html#"><i class="fa fa-cutlery"></i> <span class="nav-label">工具 </span><span class="fa arrow"></span></a>
				<ul class="nav nav-second-level">
					<li><a href="form_builder.html">表单构建器</a>
					</li>
				</ul>
			</li> -->
		</ul>

	</div>
</nav>

        <div id="page-wrapper" class="white-bg dashbard-1">
            <div class="row border-bottom">
				<nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
    <ul class="nav navbar-top-links navbar-right" >
        <li >
            <span class="m-r-sm text-muted welcome-message"  >
            <strong class="font-bold"><?php echo $_SESSION['Rongzi']['admin']['name'];?></strong>欢迎管理后台
            <a href="__APP__" title="返回首页"  ><i class="fa fa-home"></i></a></span>
        </li>
        <li>
            <a href="__APP__/Login/logout"  >
                <i class="fa fa-sign-out"></i> 退出
            </a>
        </li>
    </ul>

</nav>

            </div>

<link href="__PUBLIC__/css/plugins/iCheck/custom.css" rel="stylesheet">
<div class="row wrapper border-bottom white-bg page-heading">
	<div class="col-lg-10">
		<ol class="breadcrumb">
			<a href="__URL__"><i class="fa fa-home"></i></a>
            <li>
                <a href="__URL__">首页</a>
            </li>
            <li>
                <a>业务板块管理</a>
            </li>
            <li>
                <strong>列表</strong>
            </li>
        </ol>
	</div>
</div>
<div class="wrapper wrapper-content animated">
	<div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">

                <div class="ibox-content table-responsive">
                    <div class="row">
                        <div class="col-sm-12 m-b-xs">
							<p>
                                <a type="button" class="btn btn-w-m btn-danger" href="__APP__/Segments/add">新增</a>
                            </p>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover no-margins table-bordered table-striped">
                            <thead>
                                <tr>
                                    <!-- <th>#</th> -->
                                    <th>编号</th>
                                    <th>名称</th>
                                    <th>图片</th>
                                    <th>简介</th>
									<th>操作</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(is_array($result['result'])): foreach($result['result'] as $key=>$new): ?><tr>
                                        <td><?php echo ($new["id"]); ?></span></td>
    									<td><?php echo ($new["name"]); ?></td>
                                        <td>
                                            <?php if($new['logo'] != ''): ?><img src="<?php echo ($new["logo"]); ?>" alt="" style="width:100px;height:100px;"><?php endif; ?>
                                        </td>
                                        <td><?php echo ($new["desc"]); ?></td>
                                        <td>
    										<a href="__APP__/Segments/edit/id/<?php echo ($new["id"]); ?>">编辑</a>
    										<a href="__APP__/Segments/delete/id/<?php echo ($new["id"]); ?>" onclick="return confirm('确认删除吗？')">删除</a>
                                           <!--  <?php if($new['status'] == 0): ?><a href="__APP__/Segments/status/id/<?php echo ($new["id"]); ?>/type/0">禁用</a>
                                            <?php elseif($new['status'] == 1): ?>
                                                <a href="__APP__/Segments/status/id/<?php echo ($new["id"]); ?>/type/1">启用</a><?php endif; ?> -->
                                        </td>
                                    </tr><?php endforeach; endif; ?>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>

    </div>

	<div class="row">
	    <div class="col-sm-12 text-right">
	        <div class="dataTables_paginate paging_simple_numbers" id="editable_paginate">
	            <ul class="pagination">
	                <?php echo ($result["page"]); ?>
	            </ul>
	        </div>
	    </div>
	</div>

</div>
<div class="footer">
	<div>
		<strong>Copyright</strong> @2017 xxx.com 京ICP备16049754号-1 
	</div>
</div>
</div>
</div>

<!-- Mainly scripts -->
<script src="__PUBLIC__/js/jquery-2.1.1.min.js"></script>
<script src="__PUBLIC__/js/bootstrap.min.js?v=3.4.0"></script>
<script src="__PUBLIC__/js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="__PUBLIC__/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<!-- Custom and plugin javascript -->
<script src="__PUBLIC__/js/hplus.js?v=2.2.0"></script>
<script src="__PUBLIC__/js/plugins/pace/pace.min.js"></script>


</body>

</html>

<!-- iCheck -->
<script src="__PUBLIC__/js/plugins/iCheck/icheck.min.js"></script>
<script>
   $(document).ready(function () {
	   $('.i-checks').iCheck({
		   checkboxClass: 'icheckbox_square-green',
		   radioClass: 'iradio_square-green',
	   });
   });
</script>