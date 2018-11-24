<html>
<head>
    <meta charset="UTF-8">
    <title>회원가입</title>
</head>
<body>
<h1>
    <회원가입>
</h1>
<hr>
<form class="content" action="/member/register" method="post">
    <span>아이디 : </span>
    <input class="form-control" type="text" name="m_id" required/>
    <span>비밀번호 : </span>
    <input class="form-control" type="password" name="m_pw" required/><br>
    <span>닉네임 : </span>
    <input class="form-control" type="text" name="m_nickname" required/>
    <input type="submit" value="로그인"/></br>
    로그인 누르면 member controller의 register function으로 넘어감.
</form>
</body>
</html>
