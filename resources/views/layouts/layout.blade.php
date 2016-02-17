<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">

	<!-- 网页手机wap2.0网页的head里加入下面这条元标签，在iPhone的浏览器中页面将以原始大小显示，并不允许缩放。
	viewport即可视区域，对于桌面浏览器而言，viewport指的就是除去所有工具栏、状态栏、滚动条等等之后用于看网页的区域 -->
	<meta name="viewport" content="width=device-width,height=device-height, user-scalable=no,initial-scale=1, minimum-scale=1, maximum-scale=1,target-densitydpi=device-dpi">

	<!-- 当该 HTML 页面在手机上浏览时，该标签用于指定是否将网页内容中的手机号码显示为拨号的超链接。 -->
	<meta name="format-detection" content="telephone=no">

	<!-- name之设置作者姓名及联系方式 -->
	<meta name="author" contect="name, xxx@163.com">

	<!-- 网站开启对web app程序的支持。 -->
	<meta name="apple-mobile-web-app-capable" content="yes">

	<!-- 在web app应用下状态条（屏幕顶部条）的颜色； 
	默认值为default（白色），可以定为black（黑色）和black-translucent（灰色半透明）。 
	注意：若值为“black-translucent”将会占据页面px位置，浮在页面上方（会覆盖页面20px高度–iphone4和itouch4的Retina屏幕为40px）。 -->
	<meta name="apple-mobile-web-app-status-bar-style" content="black">

	<title>@yield("title", "羽园")</title>

	@section("lib-css")
	<link rel="stylesheet" href="./../../lib/css/bootstrap/bootstrap.css">
	@show

	@section("css")
	<link rel="stylesheet" href="/dist/css/layout.css">
	@show

</head>
<body>
	@section("body")
	@show

	@section("lib-js")
	<script src="/lib/js/jquery/jquery-2.2.0.js"></script>
	<script src="/lib/js/vue/vue.js"></script>
	@show

	@section("js")
	<script src="/dist/js/layout.js"></script>
	@show

</body>
</html>