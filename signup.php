<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>소망교회에 오신것을 환영합니다!</title>
	<style type="text/css">
		.input, .moreInfo { padding-left: 15px; }
		.moreInfo { color: red; }
		td { padding-top: 5px; }
	</style>
	<script type="text/javascript">
		
	</script>
</head>
<body>
	<h2>회원가입</h2>
	<p class="warning" style="color: red">*는 필수입력사항입니다</p>
	<form class="signupForm" accept-charset="utf-8" method="post" action="index.php">
		<table cellpadding="0" cellspacing="0">
			<tr>
				<td>
					*아이디
				</td>
				<td class="input">
					<input type="text" name="id" id="id">
				</td>
				<td class="moreInfo">
					4~16자로 입력해주세요
				</td>
			</tr>
			<tr>
				<td>
					*비밀번호
				</td>
				<td class="input">
					<input type="password" name="password" id="password">
				</td>
				<td class="moreInfo">
					4~16자, 영어 대문자, 소문자, 특수문자 !@_ 만 사용가능
				</td>
			</tr>
			<tr>
				<td>
					*이름
				</td>
				<td class="input">
					<input type="text" name="name" id="name">
				</td>
			</tr>
			<tr>
				<td>
					*직분
				</td>
				<td class="input">
					<!-- 교회에서의 자신의 직분을 선택 -->
					<select name="selectClass" id="selectClass">
						<option value="notEnroll">미등록</option>
						<option value="student">학생</option>
						<option value="youth">청년</option>
						<option value="apostle">성도</option>
						<option value="deacon">집사</option>
						<option value="deaconess">권사</option>
						<option value="elder">장로</option>
						<option value="missionary">전도사</option>
						<option value="pastor">목사</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>
					*선교회
				</td>
				<td class="input">
				<!-- 교회에서 자신이 속한 선교회를 선택 -->
					<select name="selectMission" id="selectMission">
						<option value="noMission">무소속</option>
						<option value="sundaySchool">주일학교</option>
						<option value="middleHigh">중고등부</option>
						<option value="univYouth">대학청년부</option>
						<option value="paul">바울 선교회</option>
						<option value="peter">베드로 선교회</option>
						<option value="andre">안드레 선교회</option>
						<option value="ludia">루디아 선교회</option>
						<option value="yudia">유디아 선교회</option>
						<option value="hannah">한나 선교회</option>
					</select>
				</td>
				<td class="moreInfo">
					학생/청년의 경우 자신이 속한 부서를 골라주십시오
				</td>
			</tr>
			<tr>
				<td>
					*교구
				</td>
				<td class="input">
				<!-- 교회에서 자신이 속한 교구를 선택 -->
					<select name="selectCommunity" id="selectCommunity">
						<option value="noCommunity">미지정</option>
						<option value="community01">1교구</option>
						<option value="community02">2교구</option>
						<option value="community03">3교구</option>
					</select>
				</td>
			</tr>
		</table>
		<br>
		<button id="signupButton" type="submit" onclick="">가입</button>
		<button id="resetButton" type="reset">다시 작성</button>
		<button id="cancelButton" type="submit" formnovalidate="formnovalidate" style="padding-left: 5px">취소</button>
	</form>
</body>
</html>