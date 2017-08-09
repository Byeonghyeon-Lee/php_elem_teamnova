<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>소망교회에 오신것을 환영합니다!</title>
	<style type="text/css">
		
	</style>
	<script type="text/javascript">
		
	</script>
</head>
<body>
	<!-- 헤더에 보일 메뉴 정보 -->
	<div class="header">
		<ul>
			<li><a href="board.php">게시판</a></li>
		</ul>
	</div>
	<!-- 로그인에 성공한 경우 이곳에 출력할 안내인사 -->
	<div>
		<?php 
			print $_POST['id']. "님 안녕하세요";
		?>
	</div>
	<div>
		<p>교회소개</p>
	</div>
	
</body>
</html>