<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>소망교회에 오신것을 환영합니다!</title>
	<style type="text/css">
		
	</style>
	<script type="text/javascript">
		var inputID = document.getElementById("id");
		var inputPW = document.getElementById("password");

		function guestLogin() {
			document.getElementById("id").setAttribute("value", "Guest");
			document.getElementById("id").setAttribute("value", "Guest");

			return false;
		}

		function emptyCheck() {
			if (document.getElementById("id").value == "") {
				alert("아이디를 입력하십시오!");
				document.getElementById("id").focus();
				return false;
			}
			else if (document.getElementById("id").value == "") {
				alert("비밀번호를 입력하십시오");
				document.getElementById("password").focus();
				return false;
			}
			
		}
	</script>
</head>
<body>
	<h2>샬롬~ 소망교회에 오신것을 환영합니다</h2>
	<form accept-charset="utf-8" method="POST" action="main.php">
		<!-- 로그인 정보를 기입하는 부분 -->
		<div class="login" id="loginForm">
			<input type="text" name="id" id="id" placeholder="아이디를 입력해주세요" autofocus="autofocus">
			<input type="password" name="password" id="password" placeholder="비밀번호를 입력해주세요">
		</div>
		<!-- 로그인 정보 입력 후 누를 버튼들이 위치한 부분 -->
		<div class="buttons" id="buttons">
			<button class="button" id="signup" type="submit" formaction="signup.php">회원가입</button>
			<button class="button" id="guestLogin" type="button" onclick="guestLogin()" style="padding-left: 5px">방문객입장</button>
			<button class="button" id="login" type="submit" onclick="emptyCheck()" style="padding-left: 5px">로그인</button>
		</div>
	</form>
	<!-- 이후 들어가야할 소스 -->
	<!-- 
		php: DB 연동 
		내용: 로그인을 눌렀을 때 DB랑 연동해서 입력받은 ID랑 비밀번호가 DB에 있는지 확인하고 있으면 다음 화면으로 넘기고 아니면 에러메세지를 띄우고 틀린부분에 focus를 준다
	-->
</body>
</html>