<?php
if (isset($_POST['id'])) {
	$id = $_POST['id'];

	require_once ('dbhelp.php');
	$sql = 'delete from student where id = '.$id;
	execute($sql);

	echo 'Xo� th�nh c�ng';
}
