<html>
<head>
    <meta charset="UTF-8">
    <title>회원정보 수정!</title>
</head>
<body>
<h1> <회원정보 수정!> </h1>
<hr>
<form class="content" action="/member/modify" method="post">
    <span>닉네임 : </span>
    <input class="form-control" type="text" name="m_nickname" required value="<?= $m_nickname ?>"/> <!--닉네임을 input안에 넣어줌 -->
    <span>비밀번호 : </span>
    <input class="form-control" type="password" name="m_pw" required/> <!--pw에 따로 제약안둠. -->
    <input type="submit" value="수정"/></br>
    로그인 누르면 member controller의 modify function으로 넘어감.</br>
    <a href="/member/index">메인페이지로 가기</a>
</form>
</body>
</html>
