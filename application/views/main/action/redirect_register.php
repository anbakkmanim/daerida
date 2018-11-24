<?php include("./include/lib.php");
    if($log == 'error')
    {
        alertLogin($description);
        back();
    }
    else if($log == 'success')
    {
        alertRegister($name,"님 회원가입을 환영합니다!");
//        back();
    }
?>