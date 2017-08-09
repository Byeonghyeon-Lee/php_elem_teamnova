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
			if ($_POST['id'] != "") {
				print $_POST['id']. "님 안녕하세요";
			}
			else {
				print "Guest님 안녕하세요";
			}
			
		?>
	</div>
	<div id="churchIntro">
		<p>교회소개</p>
		<p>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc porttitor sem elementum gravida porta. Nullam pulvinar odio nec feugiat posuere. Curabitur placerat nunc non arcu sagittis, quis tristique leo suscipit. Interdum et malesuada fames ac ante ipsum primis in faucibus. Maecenas pellentesque, ipsum laoreet tristique euismod, justo erat fermentum enim, sit amet porttitor velit velit vitae sapien. Pellentesque et lacus iaculis magna blandit egestas et at lacus. Nunc vestibulum magna semper libero convallis varius. Nulla in consectetur nunc. Mauris quis ullamcorper lectus. Aliquam erat volutpat. Donec eu semper odio, vel fringilla tortor. Ut luctus libero eget ante ullamcorper pharetra. Nullam at dui blandit, suscipit ante vel, dapibus nisi. Donec ipsum libero, interdum ac tellus venenatis, gravida lacinia metus. Mauris sit amet faucibus lorem. Proin sed felis eget nulla tristique pretium sit amet sit amet felis.
		</p>
	</div>
	<hr />
	<div>
		<p>예배시간 안내</p>
		<table>
			<thead>
				<tr>
					<th>예배</th>
					<th>요일</th>
					<th>시간</th>
					<th>장소</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>주일 1부예배</td>
					<td>일요일</td>
					<td>오전 09:00</td>
					<td>2층 대예배실</td>
				</tr>
				<tr>
					<td>주일 2부예배</td>
					<td>일요일</td>
					<td>오전 11:00</td>
					<td>2층 대예배실</td>
				</tr>
				<tr>
					<td>주일 저녁예배</td>
					<td>일요일</td>
					<td>오후 07:30</td>
					<td>2층 대예배실</td>
				</tr>
			</tbody>
		</table>
	</div>
</body>
</html>