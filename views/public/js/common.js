
// NProgress.start();

// NProgress.done();

// $('.navs ul').prev('a').on('click', function () {
// 	$(this).next().slideToggle();
// });

// 不能一进入就到主页面
if (!$.cookie('PHPSESSID') && location.pathname != '/login') {
	location.href = 'login';
}


// 渲染模板  头像  login页面不需要头像和用户名渲染，判断
if (location.pathname != '/login' && location.pathname != '/dashboard/login' && location.pathname != '/views/dashboard.login'){
	var tcInfo = JSON.parse($.cookie('tcInfo'));//将字符串转对象
	// 在script中引入template.js文件
	var htmlStr = template('tp_aside_avatar', tcInfo);//想要渲染的地方和要渲染上去的内容
	$('.aside>.profile').html(htmlStr);
}
