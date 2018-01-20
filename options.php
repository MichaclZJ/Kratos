<?php
/**
 * The template for Settings content control
 *
 * @package Vtrois
 * @version 2.5(18.01.20)
 */
function optionsframework_option_name() {
	$themename = wp_get_theme();
	$themename = preg_replace("/\W/", "_", strtolower($themename) );
	$optionsframework_settings = get_option( 'optionsframework' );
	$optionsframework_settings['id'] = $themename;
	update_option( 'optionsframework', $optionsframework_settings );
}
function optionsframework_options() {
	$imagepath =  get_template_directory_uri() . '/images/options/';
	$options = array();
	$options[] = array(
		'name' => '站点配置',
		'type' => 'heading');
	$options[] = array(
		'name' => '背景颜色',
		'desc' => '针对整个站点背景颜色控制',
		'id' => 'background_index_color',
		'std' => '#f5f5f5',
		'type' => 'color');
	$options[] = array(
		'name' => '列表布局',
		'desc' => '选择你喜欢的列表布局，默认显示新式列表布局',
		'id' => "list_layout",
		'std' => "new_layout",
		'type' => "images",
		'options' => array(
			'old_layout' => $imagepath . 'old-layout.png',
			'new_layout' => $imagepath . 'new-layout.png'));
	$options[] = array(
		'name' => '侧边栏随动',
		'desc' => '是否启用侧边栏小工具随动功能',
		'id' => 'site_sa',
		'std' => '1',
		'type' => 'checkbox');
	$options[] = array(
		'name' => '分类页面',
		'desc' =>'是否启用分类页面的名称以及简介功能',
		'id' => 'show_head_cat',
		'std' => '1',
		'type' => 'checkbox');
	$options[] = array(
		'name' => '标签页面',
		'desc' =>'是否启用标签页面的名称以及简介功能',
		'id' => 'show_head_tag',
		'std' => '1',
		'type' => 'checkbox');
	$options[] = array(
		'name' => '浮动小人',
		'desc' => '是否启用浮动小人功能',
		'id' => 'site_spig',
		'std' => '0',
		'type' => 'checkbox');
	$options[] = array(
		'name' => '站点黑白',
		'desc' => '是否启用站点黑白功能(一般常用于悼念日)',
		'id' => 'site_bw',
		'std' => '0',
		'type' => 'checkbox');
	$options[] = array(
		'name' => '站点雪花',
		'desc' => '是否启用站点雪花功能(更多设置请前往雪花设置页)',
		'id' => 'site_snow',
		'std' => '0',
		'type' => 'checkbox');
	$options[] = array(
		'name' => '页面伪静态',
		'desc' => '是否启用自定义页面伪静态功能',
		'id' => 'page_html',
		'std' => '0',
		'type' => 'checkbox');
	$options[] = array(
		'name' => '网易云音乐',
		'desc' => '是否启用网易云音乐自动播放功能',
		'id' => 'wy_music',
		'std' => '0',
		'type' => 'checkbox');
	$options[] = array(
		'name' => '微信展示',
		'desc' => '是否启用微信展示按钮功能',
		'id' => 'cd_weixin',
		'std' => '0',
		'type' => 'checkbox');
	$options[] = array(
		'name' => '组件配置',
		'type' => 'heading');
	$options[] = array(
		'name' => '特色图片（留空使用随机图片20张）',
		'desc' => '选择你喜欢的默认特色图片（仅针对新式布局）',
		'id' => 'default_image',
		'std' => get_template_directory_uri() . '/images/thumb/thumb_1.jpg',
		'type' => 'upload');
	$options[] = array(
		'name' => '微信二维码',
		'desc' => '上传你的微信二维码图片，尺寸要大于等于150px',
		'id' => 'weixin_image',
		'std' => get_template_directory_uri() . '/images/weixin.png',
		'type' => 'upload');
	$options[] = array(
		'name' => '建站时间',
		'desc' => '输入你的建站时间，格式MM/DD/YYYY hh:mm:ss',
		'id' => 'createtime',
		'std' => '01/25/2017 15:25:00',
		'type' => 'text');
	$options[] = array(
		'name' => '打赏页面标题',
		'id' => 'paytext_head',
		'std' => '打赏作者',
		'type' => 'text');
	$options[] = array(
		'name' => '付款码上方提示文字',
		'id' => 'paytext',
		'std' => '扫一扫支付',
		'type' => 'text');
	$options[] = array(
		'name' => '微信收款码',
		'desc' => '上传你的微信收款二维码图片，图片尺寸要大于200px',
		'id' => 'wechatpayqr_url',
		'std' => get_template_directory_uri() . '/images/wechatpayqr.png',
		'type' => 'upload');
	$options[] = array(
		'name' => '支付婊收款码',
		'desc' => '上传你的支付婊收款二维码图片，图片尺寸要大于200px',
		'id' => 'alipayqr_url',
		'std' => get_template_directory_uri() . '/images/alipayqr.png',
		'type' => 'upload');
	$options[] = array(
		'name' => 'SEO配置',
		'type' => 'heading');
	$options[] = array(
		'name' => '关键词',
		'desc' => '每个关键词之间用英文逗号分割',
		'id' => 'site_keywords',
		'type' => 'text');
	$options[] = array(
		'name' => '站点描述',
		'id' => 'site_description',
		'std' => '',
		'type' => 'textarea');
	$options[] = array(
		'name' => '站点统计(SCRIPT的内容)',
		'id' => 'script_tongji',
		'std' => '',
		'type' => 'textarea');
	$options[] = array(
		'name' => '站点统计(显示统计信息)',
		'id' => 'site_tongji',
		'std' => '',
		'type' => 'textarea');
	$options[] = array(
		'name' => '顶部配置',
		'type' => 'heading');
	$options[] = array(
		'name' => '顶部图片',
		'id' => 'background_image',
		'std' => get_template_directory_uri() . '/images/background.jpg',
		'type' => 'upload');
	$options[] = array(
		'name' => '图片文字-1(可做文字标题)',
		'id' => 'background_image_text1',
		'std' => 'Kratos',
		'type' => 'text');
	$options[] = array(
		'name' => '图片文字-2(可做站点描述)',
		'id' => 'background_image_text2',
		'std' => 'A responsible theme for WordPress',
		'type' => 'text');
	$options[] = array(
		'name' => '内容页面',
		'type' => 'heading');
	$options[] = array(
		'name' => '文章布局',
		'desc' => '选择你喜欢的整体布局（显示左边栏，右边栏）默认显示右边栏',
		'id' => "side_bar",
		'std' => "right_side",
		'type' => "images",
		'options' => array(
			'left_side' => $imagepath . 'col-left.png',
			'right_side' => $imagepath . 'col-right.png'));
	$options[] = array(
		'name' => '版权声明',
		'desc' => '是否启用 CC BY-SA 4.0 声明',
		'id' => 'post_cc',
		'std' => '0',
		'type' => 'checkbox');
	$options[] = array(
		'name' => '分享按钮',
		'desc' => '是否启用文章分享功能',
		'id' => 'post_share',
		'std' => '1',
		'type' => 'checkbox');
	$options[] = array(
		'name' => '打赏按钮',
		'desc' => '是否启用文章打赏功能',
		'id' => 'post_like_donate',
		'std' => '1',
		'type' => 'checkbox');
	$options[] = array(
		'name' => '模板页面',
		'type' => 'heading');
	$options[] = array(
		'name' => '页面布局',
		'desc' => '选择你喜欢的整体布局（显示左边栏，右边栏）默认显示右边栏',
		'id' => "page_side_bar",
		'std' => "right_side",
		'type' => "images",
		'options' => array(
			'left_side' => $imagepath . 'col-left.png',
			'right_side' => $imagepath . 'col-right.png'));	
	$options[] = array(
		'name' => '版权声明',
		'desc' => '是否启用 CC BY-SA 4.0 声明',
		'id' => 'page_cc',
		'std' => '0',
		'type' => 'checkbox');
	$options[] = array(
		'name' => '分享按钮',
		'desc' => '是否启用文章分享功能',
		'id' => 'page_share',
		'std' => '0',
		'type' => 'checkbox');
	$options[] = array(
		'name' => '打赏按钮',
		'desc' => '是否启用文章打赏功能',
		'id' => 'page_like_donate',
		'std' => '0',
		'type' => 'checkbox');
	$options[] = array(
		'name' => '404页面',
		'type' => 'heading');
	$options[] = array(
		'name' => '页面标题',
		'id' => 'error_text1',
		'std' => '这里已经是废墟，什么东西都没有',
		'type' => 'text');
	$options[] = array(
		'name' => '简介说明',
		'id' => 'error_text2',
		'std' => 'That page can not be found',
		'type' => 'text');
	$options[] = array(
		'name' => '页面背景',
		'id' => 'error_image',
		'std' => get_template_directory_uri() . '/images/404.jpg',
		'type' => 'upload');
	$options[] = array(
		'name' => '轮播图片',
		'type' => 'heading');
	$options[] = array(
		'name' => '是否启用轮播',
		'desc' => '图片宽度建议大于750像素',
		'id' => 'kratos_banner',
		'std' => '0',
		'type' => 'select',
		'class' => 'mini',
		'options' => array(
			'1' => '是',
			'0' => '否'));
	$options[] = array(
		'name' => '轮播图片-1',
		'id' => 'kratos_banner1',
		'type' => 'upload');
	$options[] = array(
		'name' => '轮播链接-1',
		'desc' => '链接可以留空',
		'id' => 'kratos_banner_url1',
		'std' => '',
		'type' => 'text');
	$options[] = array(
		'name' => '轮播图片-2',
		'id' => 'kratos_banner2',
		'type' => 'upload');
	$options[] = array(
		'name' => '链接2',
		'desc' => '链接可以留空',
		'id' => 'kratos_banner_url2',
		'std' => '',
		'type' => 'text');
	$options[] = array(
		'name' => '轮播图片-3',
		'id' => 'kratos_banner3',
		'type' => 'upload');
	$options[] = array(
		'name' => '链接3',
		'desc' => '链接可以留空',
		'id' => 'kratos_banner_url3',
		'std' => '',
		'type' => 'text');
	$options[] = array(
		'name' => '轮播图片-4',
		'id' => 'kratos_banner4',
		'type' => 'upload');
	$options[] = array(
		'name' => '链接4',
		'desc' => '链接可以留空',
		'id' => 'kratos_banner_url4',
		'std' => '',
		'type' => 'text');
	$options[] = array(
		'name' => '轮播图片-5',
		'id' => 'kratos_banner5',
		'type' => 'upload');
	$options[] = array(
		'name' => '链接5',
		'desc' => '链接可以留空',
		'id' => 'kratos_banner_url5',
		'std' => '',
		'type' => 'text');
	$options[] = array(
		'name' => '邮件配置',
		'type' => 'heading');
	$options[] = array(
		'name' => 'SMTP服务',
		'desc' => '是否启用SMTP服务',
		'id' => 'mail_smtps',
		'std' => '0',
		'type' => 'checkbox');
	$options[] = array(
		'name' => '发信人',
		'desc' => '请填写发件人姓名',
		'id' => 'mail_name',
		'std' => 'FCZBL_No_Replay',
		'type' => 'text');
	$options[] = array(
		'name' => '邮件服务器',
		'desc' => '请填写SMTP服务器地址',
		'id' => 'mail_host',
		'std' => 'smtp.office365.com',
		'type' => 'text');
	$options[] = array(
		'name' => '服务器端口',
		'desc' => '请填写SMTP服务器端口',
		'id' => 'mail_port',
		'std' => '587',
		'type' => 'text');
	$options[] = array(
		'name' => '邮箱帐号',
		'desc' => '请填写邮箱账号',
		'id' => 'mail_username',
		'std' => 'no_reply@fczbl.vip',
		'type' => 'text');
	$options[] = array(
		'name' => '邮箱密码',
		'desc' => '请填写邮箱密码',
		'id' => 'mail_passwd',
		'std' => '123456789',
		'type' => 'text');
	$options[] = array(
		'name' => '启用SMTPAuth服务',
		'desc' => '是否启用SMTPAuth服务',
		'id' => 'mail_smtpauth',
		'std' => '1',
		'type' => 'checkbox');
	$options[] = array(
		'name' => 'SMTPSecure设置',
		'desc' => '若启用SMTPAuth服务则填写ssl，若不启用则留空',
		'id' => 'mail_smtpsecure',
		'std' => 'ssl',
		'type' => 'text');
	$options[] = array(
		'name' => '页脚配置',
		'type' => 'heading');
	$options[] = array(
		'name' => '工信部备案信息',
		'desc' => '输入您的工信部备案号，针对国际版没有备案信息栏目的功能',
		'id' => 'icp_num',
		'type' => 'text');	
	$options[] = array(
		'name' => '公安网备案信息',
		'desc' => '输入您的公安网备案号',
		'id' => 'gov_num',
		'type' => 'text');	
	$options[] = array(
		'name' => '公安网备案连接',
		'desc' => '输入您的公安网备案的链接地址',
		'id' => 'gov_link',
		'type' => 'text');
	$options[] = array(
		'name' => '社交组件',
		'type' => 'heading');
	$options[] = array(
		'name' => '新浪微博',
		'desc' => '连接前要带有 http:// 或者 https:// ',
		'id' => 'social_weibo',
		'std' => '',
		'type' => 'text');
	$options[] = array(
		'name' => '腾讯微博',
		'desc' => '连接前要带有 http:// 或者 https:// ',
		'id' => 'social_tweibo',
		'std' => '',
		'type' => 'text');
	$options[] = array(
		'name' => 'Twitter',
		'desc' => '连接前要带有 http:// 或者 https:// ',
		'id' => 'social_twitter',
		'std' => '',
		'type' => 'text');
	$options[] = array(
		'name' => 'FaceBook',
		'desc' => '连接前要带有 http:// 或者 https:// ',
		'id' => 'social_facebook',
		'std' => '',
		'type' => 'text');
	$options[] = array(
		'name' => 'LinkedIn',
		'desc' => '连接前要带有 http:// 或者 https:// ',
		'id' => 'social_linkedin',
		'std' => '',
		'type' => 'text');
	$options[] = array(
		'name' => 'GitHub',
		'desc' => '连接前要带有 http:// 或者 https:// ',
		'id' => 'social_github',
		'std' => '',
		'type' => 'text');
	$options[] = array(
		'name' => 'Mail',
		'desc' => '连接前要带有mailto: ',
		'id' => 'social_mail',
		'std' => '',
		'type' => 'text');
	$options[] = array(
		'name' => '雪花设置',
		'type' => 'heading');
	$options[] = array(
		'name' => '移动端是否显示',
		'desc' => '配置移动端是否显示，默认是',
		'id' => 'snow_xb2016_mobile',
		'std' => '1',
		'type' => 'checkbox');
	$options[] = array(
		'name' => '雪花数量',
		'desc' => '数值越大雪花数量越多，默认200',
		'id' => 'snow_xb2016_flakecount',
		'std' => '200',
		'type' => 'text');
	$options[] = array(
		'name' => '雪花大小',
		'desc' => '为基准值，数值越大雪花越大，默认2',
		'id' => 'snow_xb2016_size',
		'std' => '2',
		'type' => 'text');
	$options[] = array(
		'name' => '雪花距离',
		'desc' => '雪花距离鼠标指针的最小值，小于这个距离的雪花将受到鼠标的排斥，默认150',
		'id' => 'snow_xb2016_mindist',
		'std' => '150',
		'type' => 'text');
	$options[] = array(
		'name' => '雪花速度',
		'desc' => '为基准值，数值越大雪花速度越快，默认0.5',
		'id' => 'snow_xb2016_speed',
		'std' => '0.5',
		'type' => 'text');
	$options[] = array(
		'name' => '雪花横移度',
		'desc' => '为基准值，数值越大雪花横移幅度越大，0为竖直下落，默认1',
		'id' => 'snow_xb2016_stepsize',
		'std' => '1',
		'type' => 'text');
	$options[] = array(
		'name' => '雪花颜色',
		'desc' => '请用RGB格式表示，默认255,255,255',
		'id' => 'snow_xb2016_snowcolor',
		'std' => '255,255,255',
		'type' => 'text');
	$options[] = array(
		'name' => '雪花不透明度',
		'desc' => '为基准值，范围0~1，1为不透明，默认0.3',
		'id' => 'snow_xb2016_opacity',
		'std' => '0.3',
		'type' => 'text');
	$options[] = array(
		'name' => '背景颜色',
		'desc' => '请用RGB格式表示，默认225,225,225,0.1',
		'id' => 'snow_xb2016_bgcolor',
		'std' => '225,225,225,0.1',
		'type' => 'text');
	return $options;
}
