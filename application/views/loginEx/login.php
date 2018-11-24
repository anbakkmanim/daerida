<html>
    <head>
        <meta charset="UTF-8">
        <title>로그인</title>
    </head>
    <body>
    <h1> <로그인> </h1>
    <hr>
        <form class="content" action="/member/auth_user" method="post">
            <span>아이디 : </span>
            <input class="form-control" type="text" name="m_id" required/>
            <span>비밀번호 : </span>
            <input class="form-control" type="password" name="m_pw" required/>
            <input type="submit" value="로그인"/></br>
            로그인 누르면 member controller의 auth_user function으로 넘어감.</br>
            <a href="/member/create_account">회원가입</a>
        </form>
    </body>
</html>
