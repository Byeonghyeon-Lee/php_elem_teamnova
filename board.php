<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>소망교회에 오신것을 환영합니다!</title>
	<link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
	<h3>게시판</h3>

	<div class="container">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>번호</th>
					<th>제목</th>
					<th>작성자</th>
					<th>날짜</th>
					<th>조회수</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td name="docNum">001</td>
					<td name="docTitle"><a href="boardDoc.php?docNum=001">Manual Bootstrap Practice</a></td>
					<td name="docAuthor">관리자</td>
					<td name="docCreated">2017.08.09</td>
					<td name="docRead">0</td>
				</tr>
				<tr>
					<td>002</td>
					<td>네이버처럼 페이징하기</td>
					<td>관리자</td>
					<td>2017.08.09</td>
					<td>0</td>
				</tr>
				<tr>
					<td>003</td>
					<td>자바스크립트와 a태그를 이용하여 url에 정보를 갖다붙인다</td>
					<td>관리자</td>
					<td>2017.08.09</td>
					<td>0</td>
				</tr>
				<tr>
					<td>004</td>
					<td>어떻게 하는건지 좀 더 알아보기</td>
					<td>관리자</td>
					<td>2017.08.09</td>
					<td>0</td>
				</tr>
			</tbody>
		</table>
		<hr/>
		<a class="btn btn-default pull-right">글쓰기</a>
		<div class="text-center">
			<form method="GET" action="board.php"></form>
			<ul class="pagination">
				<li><a href="#" name="pageNum">1</a></li>
				<li><a href="#" name="pageNum">2</a></li>
				<li><a href="#" name="pageNum">3</a></li>
				<li><a href="#" name="pageNum">4</a></li>
				<li><a href="#" name="pageNum">5</a></li>
			</ul>
		</div>
	</div>
	

	<!-- 자바스크립트 소스 불러오기 -->
	<script src="https://ajax.googleapis.com/ajax/libs/1.12.4/jquery.min.js"></script>
	<script src="js/bootstrap.js"></script>
</body>
</html>