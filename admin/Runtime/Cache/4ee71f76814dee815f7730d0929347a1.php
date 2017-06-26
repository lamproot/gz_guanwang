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
                <a href="__APP__/News/index">新闻动态</a>
            </li>
            <li>
                <strong>添加</strong>
            </li>
        </ol>
    </div>
</div>
<div class="wrapper wrapper-content animated">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5 class="text-center">编辑</h5>

                </div>
                <div class="ibox-content">
                    <form class="form-horizontal m-t" id="signupForm" method="post" action="__ACTION__" enctype="multipart/form-data">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">*类型:</label>
                            <div class="col-sm-8">
                                <select name="type" class="form-control">
                                    <option value="0">公司动态</option>
                                    <option value="1">投研视点</option>
                                    <option value="2">业内资讯</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">*标题:</label>
                            <div class="col-sm-8">
                                <input id="title" name="title" class="form-control" type="text" aria-required="true" aria-invalid="true" class="error">
                                <input type="hidden" name="form_key" value="yes" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">*来源或作者:</label>
                            <div class="col-sm-8">
                                <input type="text" name="from_str" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">*图片:</label>
                            <div class="col-sm-8">
                                <img src="" style="height:100px; width:100px;margin-bottom:10px;" class="logourl"/>
                                <input id="file" name="logo" class="form-control file" type="file">
                                <input name="logoname" class="form-control logoname" type="hidden">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">*新闻内容:</label>
                            <div class="col-sm-8">
                                <div class="ibox-content gray-bg">

                                    <div class="summernote"  style="" name="content">
                                       
                                    </div>

                                </div>
                            </div>
                        </div>
                        <textarea name="content" rows="8" cols="40" class="content_code" style="display:none">

                        </textarea>
                        <div class="form-group">
                            <div class="col-sm-8 col-sm-offset-3">
                                <button class="btn btn-primary" type="submit" onclick="save()">提交</button>
                            </div>
                        </div>
                    </form>
                </div>
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

<!-- jQuery Validation plugin javascript-->
<script src="__PUBLIC__/js/plugins/validate/jquery.validate.min.js"></script>
<script src="__PUBLIC__/js/plugins/validate/messages_zh.min.js"></script>
<script src="__PUBLIC__/js/plugins/summernote/summernote.min.js"></script>
<script src="__PUBLIC__/js/plugins/summernote/summernote-zh-CN.js"></script>
<script>
    $(document).ready(function () {

        $('.summernote').summernote({
            lang: 'zh-CN',
            height:"600",
            focus:true,
            onImageUpload: function(files, editor, $editable) {
              sendFile(files[0],editor,$editable);
            }
        });

        //$('.summernote').code("112");

    });

    function sendFile(file, editor, $editable) {
        var filename = false;
        try {
            filename = file['name'];
            console.log(filename);
        } catch(e) {
            filename = false;
        }
        if (!filename) {
            $(".note-alarm").remove();
        }
        //以上防止在图片在编辑器内拖拽引发第二次上传导致的提示错误
        var ext = filename.substr(filename.lastIndexOf("."));
        ext = ext.toUpperCase();
        var timestamp = new Date().getTime();
        var name = timestamp + "_" + $(".summernote").attr('aid') + ext;
        //name是文件名，自己随意定义，aid是我自己增加的属性用于区分文件用户
        data = new FormData();
        data.append("file", file);
        data.append("key", name);
        data.append("upload_dir", "news");

        $.ajax({
            data: data,
            type: "POST",
            url: "__APP__/Uploads/upload",
            //图片上传出来的url，返回的是图片上传后的路径，http格式
            contentType:false,
            dataType:"json",
            cache: false,
            processData: false,
            success: function(data) {
                //data是返回的hash,key之类的值，key是定义的文件名
                //把图片放到编辑框中。editor.insertImage 是参数，写死。后面的http是网上的图片资源路径。
                //网上很多就是这一步出错。
                //$('.summernote').summernote('insertImage',"http://res.cloudinary.com/demo/image/upload/butterfly.jpg");
                editor.insertImage($editable, data['url']);
                $(".note-alarm").html("上传成功,请等待加载");
                setTimeout(function() {
                    $(".note-alarm").remove();
                },
                3000);
            },
            error: function() {
                $(".note-alarm").html("上传失败");
                setTimeout(function() {
                    $(".note-alarm").remove();
                },
                3000);
            }
        });
    }
    // function sendFile(files, editor, $editable) {  
    //     var data = new FormData();  
    //     data.append("file", files[0]);
    //     data.append("upload_dir", "news");
        
    //     $.ajax({  
    //         data : data,  
    //         type : "POST",  
    //         url : "__APP__/Uploads/upload", //图片上传出来的url，返回的是图片上传后的路径，http格式  
    //         cache : false,  
    //         contentType : false,  
    //         processData : false,  
    //         dataType : "json",  
    //         success: function(data){
    //             $('.summernote').summernote('insertImage', data.data);  
    //         },  
    //         error:function(){  
    //             alert("上传失败");  
    //         }  
    //     });  
    // }  

    // var edit = function () {
    //     $("#eg").addClass("no-padding");
    //     $('.click2edit').summernote({
    //         lang: 'zh-CN',
    //         focus: true
    //     });
    // };
    var save = function () {
        var aHTML = $('.summernote').code(); //save HTML If you need(aHTML: array).
        $('.content_code').val(aHTML)
    };

    var imgs = []; //存储图片链接
    //为文件上传添加change事件
    var fileM = document.querySelector(".file");
    $(".file").on("change",
    function() {
        console.log(fileM.files);
        //获取文件对象，files是文件选取控件的属性，存储的是文件选取控件选取的文件对象，类型是一个数组
        var fileObj = fileM.files[0];
        //创建formdata对象，formData用来存储表单的数据，表单数据时以键值对形式存储的。
        var formData = new FormData();
        formData.append('file', fileObj);
        formData.append("upload_dir", "news");
        //创建ajax对象
        var ajax = new XMLHttpRequest();
        //发送POST请求
        ajax.open("POST", "__APP__/Uploads/upload", true);
        ajax.send(formData);
        ajax.onreadystatechange = function() {
            if (ajax.readyState == 4) {
                if (ajax.status >= 200 && ajax.status < 300 || ajax.status == 304) {
                    console.log(ajax.responseText);
                    var obj = JSON.parse(ajax.responseText);
                    if (obj.code == 200) {
                        //上传成功后自动动创建img标签放在指定位置
                        //var img = $("<img src='" + obj.url + "' alt='' />");
                        $(".logoname").val(obj.imagename);
                        $(".logourl").attr("src", obj.url)
                    } else {
                        alert(obj.msg);
                    }
                }
            }
        }
    });

</script>
<script>
   //以下为修改jQuery Validation插件兼容Bootstrap的方法，没有直接写在插件中是为了便于插件升级
   $.validator.setDefaults({
       highlight: function (element) {
           $(element).closest('.form-group').removeClass('has-success').addClass('has-error');
       },
       success: function (element) {
           element.closest('.form-group').removeClass('has-error').addClass('has-success');
       },
       errorElement: "span",
       errorClass: "help-block m-b-none",
       validClass: "help-block m-b-none"


   });

    //以下为官方示例
   $().ready(function () {
       // validate signup form on keyup and submit
       $("#signupForm").validate({
           rules: {
               title: {
                   required: true
               },
               content: {
                   required: true,
               },
               type: {
                   required: true,
               },
               level: {
                   required: true
               },
               agree: "required"
           },
           messages: {

           }
       });
   });
</script>