<script>
    function numkeyCheck(e) {
        var keyValue = event.keyCode;
        if((keyValue >= 48)&&(keyValue <=57))
            return true;
        else return false;
    }
</script>
<body class="landing-page">
<div class="content-bg-wrap2">
    <div class="content-bg"></div>
</div>


<!-- Header Standard Landing  -->

<div class="header--standard header--standard-landing" id="header--standard">
    <div class="container">
        <div class="header--standard-wrap">

            <a href="#" class="logo">
                <div class="img-wrap">
                    <img src="<? echo base_url(); ?>assets/img/logo.png" style="max-height: 64px; max-width: 64px;"
                         alt="daerida">
                </div>
                <div class="title-block">
                    <h5 class="logo-title">데 리 다</h5>
                    <div class="sub-title">Easy team building!</div>
                </div>
            </a>



            <div class="nav nav-pills nav1 header-menu expanded-menu">
                <div class="mCustomScrollbar">
                    <ul>
                        <li class="nav-item">
                            <a href="<?=site_url('intro/main')?>" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?=site_url('intro/profile')?>" class="nav-link">Team</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?=site_url('intro/company')?>" class="nav-link">Company</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?=site_url('intro/contactUs')?>" class="nav-link">Contact us</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?=site_url('main/login')?>" class="nav-link">Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ... end Header Standard Landing  -->
<div class="header-spacer--standard"></div>

<div class="container">
    <div class="row display-flex">
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12">
            <div class="landing-content">
                <h1>데리다에 온 것을 환영합니다!</h1>
                <p>
                    어서오세요! 데리다는 여러분의 미래를 책임집니다!
                </p>
            </div>
        </div>

        <div class="col-xl-5 col-lg-6 col-md-12 col-sm-12 col-xs-12">

            <!-- Login-Registration Form  -->

            <div class="registration-login-form" style="height: 735px;">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist" >
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#profile" role="tab">
                            <svg class="olymp-register-icon"><use xlink:href="<? echo base_url();?>assets/svg_icons/sprites/icons.svg#olymp-login-icon"></use></svg>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#home" role="tab">
                            <svg class="olymp-login-icon"><use xlink:href="<? echo base_url();?>assets/svg_icons/sprites/icons.svg#olymp-register-icon"></use></svg>
                        </a>
                    </li>

                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active" id="profile" role="tabpanel" data-mh="log-tab">
                        <div class="title h6">로그인</div>
                        <form class="content" action="<? echo base_url(); ?>/main/auth_user" method="post">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12">
                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label">이메일</label>
                                        <input class="form-control" placeholder="" name="custEmail" type="text"
                                               style="ime-mode:inactive" required>
                                    </div>
                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label">비밀번호</label>
                                        <input class="form-control" placeholder="" name="custPw" type="password"
                                               style="ime-mode:inactive" required>
                                    </div>

                                    <div class="remember">

                                        <div class="checkbox">
                                            <label>
                                                <input name="optionsCheckboxes" type="checkbox">
                                                자동 로그인
                                            </label>
                                        </div>
                                        <a class="forgot" data-toggle="modal" href="#IDKpwd">비밀번호를
                                            잊었어요</a>
                                        <!-- Modal -->
                                        <div class="modal fade" role="dialog" aria-labelledby="gridSystemModalLabel" id="IDKpwd" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="myModalLabel">비밀번호 찾기</h4>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        ...
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-primary">Save changes</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>

                                    <input type="submit" value="로그인" class="btn btn-seoulblue btn-lg full-width">

                                    <div class="or"></div>

                                    <a href="#" class="btn btn-lg bg-facebook-login full-width btn-icon-left"
                                       style="text-align: center;"><img
                                                src="/assets/img/Facebookicon.png"
                                                style="height: 32px;width:32px;">페이스북으로 로그인</a>

                                    <a href="<? echo base_url(); ?>snslogin/google" class="btn btn-lg bg-google-login full-width btn-icon-left"
                                       style="text-align: center"><img
                                                src="/assets/img/GooglePlus.png"
                                                style="height: 32px;width: 32px;">구글플러스로 로그인</a>

                                    <a href="<? echo base_url(); ?>snslogin/kakao" class="btn btn-lg bg-kakao c-kakao full-width btn-icon-left"
                                       style="text-align: center"><i aria-hidden="true"><img
                                                    src="/assets/img/kakaoicon.png" width="16px"
                                                    height="16px"></i>카카오계정으로 로그인</a>

                                    <p style="text-align: center">계정이 없다면 <a data-toggle="tab" href="#profile"
                                                                             role="tab">회원가입</a> 하기!</p>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane" id="home" role="tabpanel" data-mh="log-tab">
                        <div class="title h6">회원가입</div>
                        <!--수정중-->
                        <form class="content" action="<? echo base_url(); ?>index.php/main/register" method="post" id="gender">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12">
                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label">이름<label style="color: red">*</label></label>
                                        <input class="form-control" placeholder="" type="text" name="custName" required>
                                    </div>


                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label">이메일<label style="color: red">*</label></label>
                                        <input class="form-control" placeholder="" type="email" name="custEmail"
                                               style="ime-mode:inactive" required>
                                    </div>


                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label">비밀번호<label style="color: red">*</label></label>
                                        <input class="form-control" id="pwd" placeholder="" type="password"
                                               name="custPw" style="ime-mode:inactive" required>
                                    </div>

                                    <div class="form-group date-time-picker label-floating" style="clear: both">
                                        <label class="control-label">생년월일<label style="color: red">*</label></label>
                                        <input name="datetimepicker" required readonly>
                                        <span class="input-group-addon">
                                            <svg class="olymp-calendar-icon"><use
                                                        xlink:href="<? echo base_url(); ?>assets/svg_icons/sprites/icons.svg/#olymp-calendar-icon"></use></svg>
                                        </span>
                                    </div>
                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label">전화번호</label>
                                        <input class="form-control2" maxlength="11"name="custTel" type="text" style="ime-mode:inactive" onkeypress="return numkeyCheck(event)">
                                    </div>
                                    <div class="form-group label-floating is-select" style="float: ">

                                        <label class="control-label">성별<label style="color: red">*</label></label>
                                        <select class="selectpicker form-control" id="gender" name="custGender">
                                            <option value="남자" selected>남자</option>
                                            <option value="여자">여자</option>
                                        </select>

                                    </div>

                                    <div class="remember">
                                        <div class="checkbox">
                                            <label>
                                                <input name="optionsCheckboxes" type="checkbox"
                                                       onclick="checkboxok(this.form);,checkDisable();">
                                                이 웹사이트의 <a href="#">약관</a>에 동의합니다
                                            </label>
                                        </div>
                                    </div>

                                    <input type="submit" class="btn btn-purple btn-lg full-width" value="회원가입 하기!"
                                           name="btnSignup"/>
                                </div>
                            </div>
                        </form>
                    </div>


                </div>
            </div>

            <!-- ... end Login-Registration Form  -->
        </div>
    </div>
</div>
</body>