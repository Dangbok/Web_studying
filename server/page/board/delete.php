<?php
	include $_SERVER['DOCUMENT_ROOT']."/server/db.php";
	
	$bno = $_GET['idx'];
	$sql = mq("delete from board where idx='$bno';");
?>
<script type="text/javascript">alert("삭제되었습니다.");location.href='/server/index.php';</script>
<meta http-equiv="refresh" content="0 url=/" />