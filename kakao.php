<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, width=device-width"/>
    <script src="//developers.kakao.com/sdk/js/kakao.min.js"></script>

</head>
<body>
<a id="kakao-login-btn"></a>
<script type='text/javascript'>
    //<![CDATA[
    // 사용할 앱의 JavaScript 키를 설정해 주세요.
    Kakao.init('8aa3c125c948703c09ec451ac882e4bf');
    // 카카오 로그인 버튼을 생성합니다.
    Kakao.Auth.createLoginButton({
        container: '#kakao-login-btn',
        success: function(authObj) {
            // 로그인 성공시, API를 호출합니다.
            var AccessToken = Kakao.Auth.getAccessToken();
            var RefreshToken = authObj.refresh_token;
            console.log(RefreshToken);
            console.log(AccessToken);
            // Kakao.Auth.setAccessToken(accessTokenFromServer);
            Kakao.API.request({
                url: '/v1/user/me',
                success: function(res) {
                    // alert(JSON.stringify(res));
                    // alert(JSON.stringify(authObj));
                    console.log(res.id);
                    console.log(res.properties['nickname']);
                    console.log(res.properties['profile_image']);
                },
                fail: function(error) {
                    alert(JSON.stringify(error));
                }
            });
        },
        fail: function(err) {
            alert(JSON.stringify(err));
        }
    });
    //]]>
</script>

</body>
</html>