<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, width=device-width"/>
    <title>KakaoLink v2 Demo(Default / Feed) - Kakao JavaScript SDK</title>
    <script src="//developers.kakao.com/sdk/js/kakao.min.js"></script>
</head>
<body>
<a id="kakao-link-btn" href="javascript:;">
    <img src="//developers.kakao.com/assets/img/about/logos/kakaolink/kakaolink_btn_medium.png"/>
</a>

<form id="myform">
    URL입력:  <input type="text" id="url" value="https://search.naver.com/search.naver?sm=tab_hty.top&where=nexearch&oquery=%EB%84%A4%EC%9D%B4%EB%B2%84+%EA%B0%9C%EB%B0%9C%EC%9E%90%EC%84%BC%ED%84%B0&ie=utf8&query=%EB%84%A4%EC%9D%B4%EB%B2%84+%EA%B0%9C%EB%B0%9C%EC%9E%90%EC%84%BC%ED%84%B0"><br/>
    Title입력:  <input type="text" id="title" value="네이버개발자센터 검색결과"><br/>
</form>

<input type="button" value="네이버공유하기" onclick="share()"/>
<script type='text/javascript'>
    //<![CDATA[
    // // 사용할 앱의 JavaScript 키를 설정해 주세요.
    Kakao.init('93986cad7d403183c13974feac1a9934');
    // // 카카오링크 버튼을 생성합니다. 처음 한번만 호출하면 됩니다.
    Kakao.Link.createDefaultButton({
        container: '#kakao-link-btn',
        objectType: 'feed',
        content: {
            title: 'test',
            description: '정신 나간 사람처럼 난\n',
            imageUrl: 'http://매출업.com/assets/img/0logo7.png',
            link: {
                mobileWebUrl: 'http://naver.com/',
                webUrl: 'http://naver.com/'
            }
        },
        // social: {
        //     likeCount: 286,
        //     commentCount: 45,
        //     sharedCount: 845
        // },
        buttons: [
            {
                title: '웹으로 보기',
                link: {
                    mobileWebUrl: 'hhttp://xn--9z2b80t9jg.com/',
                    webUrl: 'http://xn--9z2b80t9jg.com/'
                }
            },
            {
                title: '앱으로 보기',
                link: {
                    mobileWebUrl: 'http://xn--9z2b80t9jg.com/',
                    webUrl: 'http://xn--9z2b80t9jg.com/'
                }
            }
        ]
    });
    //]]>
</script>
<script>
    function share() {
        var url = encodeURI(encodeURIComponent(myform.url.value));
        var title = encodeURI(myform.title.value);
        var shareURL = "https://share.naver.com/web/shareView.nhn?url=" + url + "&title=" + title;
        window.open(shareURL,"네이버 공유하기",'width=400, height=500, scrollbars= 0, toolbar=0, menubar=no');
    }
</script>
<?php
  // 네이버 블로그 Open API 예제 - 글쓰기
  $token = "YOUR_ACCESS_TOKEN"; // 네아로 접근 토큰
  $header = "Bearer ".$token; // Bearer 다음에 공백 추가
  $url = "https://openapi.naver.com/blog/writePost.json";
  $title = urlencode("네이버 블로그 api Test php");
  $contents = urlencode("네이버 블로그 api로 글을 블로그에 올려봅니다.");
  $postvars = "title=".$title."&contents=".$contents."&categoryNo=6";
  $is_post = true;
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_POST, $is_post);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $postvars);
  $headers[] = "Authorization: ".$header;
  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
  $response = curl_exec ($ch);
  $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
  echo "status_code:".$status_code."<br>";
  curl_close ($ch);
  if($status_code == 200) {
      echo $response;
  } else {
      echo "Error 내용:".$response;
  }
?>
</body>
</html>