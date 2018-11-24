<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <link rel="stylesheet" type="text/css" href="<? echo base_url();?>resource/Bootstrap/dist/css/bootstrap-reboot.css">
    <link rel="stylesheet" type="text/css" href="<? echo base_url();?>resource/Bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<? echo base_url();?>resource/Bootstrap/dist/css/bootstrap-grid.css">

    <!-- Main Styles CSS -->
    <link rel="stylesheet" type="text/css" href="<? echo base_url();?>resource/css/main.min.css">
    <link rel="stylesheet" type="text/css" href="<? echo base_url();?>resource/css/fonts.min.css">

    <!-- Main Font -->
    <script src="<? echo base_url();?>resource/js/webfontloader.min.js"></script>
    <script>
        WebFont.load({
            google: {
                families: ['Roboto:300,400,500,700:latin']
            }
        });
    </script>
</head>
<body>


    <!-- Fixed Sidebar Right -->

    <div class="fixed-sidebar right" style="">

        <!-- 메세지 플로팅 버튼 -->

        <div class="fixed-sidebar-right2 sidebar--small" id="sidebar-right">

            <a class="olympus-chat inline-items">
                <img src="<? echo base_url();?>resource/img/menu_logo.png">
            </a>

        </div>

        <!-- 받은 쪽지함 -->

        <div class="right-sidebar-message-contaner" id="get-message-container">
            <div class="message-btn-container">
                <button class="btn btn-green btn-sm sending-message-button">쪽지 보내기</button>
                <button class="btn btn-primary btn-sm send-message-button">보낸 쪽지함</button>
                <button class="btn btn-purple btn-sm get-message-button">받은 쪽지함</button>
                <button class="btn btn-primary btn-sm spem-message-button">스팸함</button>
                <button class="btn btn-primary btn-sm btn-message-off">닫기</button>
            </div>

            <div class="notification-list-container">
                <ul class="notification-list friend-requests">
                    <li>
                        <div class="checkbox" name="optionsCheckboxes" class="item-checkbox">
                            <label>
                                <input type="checkbox" name="optionsCheckboxes" class="item-checkbox">
                            </label>
                        </div>   
                        <div class="author-thumb">
                            <img src="<? echo base_url();?>resource/img/avatar55-sm.jpg" alt="author">
                        </div>
                        <div class="notification-event">
                            <a href="#" class="h6 notification-friend message-item">초갈</a>
                            <span class="chat-message-item">2차면접 2018-06-03  본사 3층 면접실</span>
                        </div>

                        <div class="more">
                            <svg class="olymp-three-dots-icon"><use xlink:href="<? echo base_url();?>resource/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
                            2018-05-31 09:11
                        </div>
                    </li>
                    <li>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="optionsCheckboxes" class="item-checkbox">
                            </label>
                        </div>
                        <div class="author-thumb">
                            <img src="<? echo base_url();?>resource/img/avatar55-sm.jpg" alt="author">
                        </div>
                        <div class="notification-event">
                            <a href="#" class="h6 notification-friend message-item">초갈</a>
                            <span class="chat-message-item">2차면접 2018-06-03  본사 3층 면접실</span>
                        </div>

                        <div class="more">
                            <svg class="olymp-three-dots-icon"><use xlink:href="<? echo base_url();?>resource/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
                            2018-05-31 09:11
                        </div>
                    </li>
                    <li>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="optionsCheckboxes" class="item-checkbox">
                            </label>
                        </div>
                        <div class="author-thumb">
                            <img src="<? echo base_url();?>resource/img/avatar55-sm.jpg" alt="author">
                        </div>
                        <div class="notification-event">
                            <a href="#" class="h6 notification-friend message-item">초갈</a>
                            <span class="chat-message-item">2차면접 2018-06-03  본사 3층 면접실</span>
                        </div>

                        <div class="more">
                            <svg class="olymp-three-dots-icon"><use xlink:href="<? echo base_url();?>resource/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
                            2018-05-31 09:11
                        </div>
                    </li>
                    <li>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="optionsCheckboxes" class="item-checkbox">
                            </label>
                        </div>
                        <div class="author-thumb">
                            <img src="<? echo base_url();?>resource/img/avatar55-sm.jpg" alt="author">
                        </div>
                        <div class="notification-event">
                            <a href="#" class="h6 notification-friend message-item">초갈</a>
                            <span class="chat-message-item">2차면접 2018-06-03  본사 3층 면접실</span>
                        </div>

                        <div class="more">
                            <svg class="olymp-three-dots-icon"><use xlink:href="<? echo base_url();?>resource/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
                            2018-05-31 09:11
                        </div>
                    </li>

                </ul>
            </div>

            <div class="message-btn-container">
                <div class="checkbox float-left">
                    <label>
                        <input type="checkbox" name="optionsCheckboxes" id="get-item-select-all">
                        전체선택
                    </label>
                </div>
                <button class="btn btn-secondary btn-sm">삭제</button>
                <button class="btn btn-secondary btn-sm">읽음</button>
                <button class="btn btn-secondary btn-sm">전달</button>
                <button class="btn btn-secondary btn-sm">전체전달</button>
                <button class="btn btn-secondary btn-sm">스펨등록</button>
            </div>
            <div class="page-container">
                <a href="#"><</a>
                <a href="#">1</a>
                <a href="#">2</a>
                <a href="#">3</a>
                <a href="#">4</a>
                <a href="#">5</a>
                <a href="#">></a>
            </div>
        </div>

        <!-- 보낸 쪽지함 -->

        <div class="right-sidebar-message-contaner" id="send-message-container">
            <div class="message-btn-container">
                <button class="btn btn-green btn-sm sending-message-button">쪽지 보내기</button>
                <button class="btn btn-purple btn-sm send-message-button">보낸 쪽지함</button>
                <button class="btn btn-primary btn-sm get-message-button">받은 쪽지함</button>
                <button class="btn btn-primary btn-sm spem-message-button">스팸함</button>
                <button class="btn btn-primary btn-sm btn-message-off">닫기</button>
            </div>
            <div class="notification-list-container">
                <ul class="notification-list friend-requests">
                    <li>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="optionsCheckboxes" class="item-checkbox">
                            </label>
                        </div>
                        <div class="author-thumb">
                            <img src="<? echo base_url();?>resource/img/avatar55-sm.jpg" alt="author">
                        </div>
                        <div class="notification-event">
                            <a href="#" class="h6 notification-friend message-item">정동혁</a>
                            <span class="chat-message-item">집가고 싶다</span>
                        </div>

                        <div class="more">
                            <svg class="olymp-three-dots-icon"><use xlink:href="<? echo base_url();?>resource/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
                            <div class="float-right">
                                2018-05-31 09:11
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="message-btn-container">
                <div class="checkbox float-left">
                    <label>
                        <input type="checkbox" name="optionsCheckboxes" id="send-item-select-all">
                        전체선택
                    </label>
                </div>
                <button class="btn btn-secondary btn-sm">삭제</button>
                <button class="btn btn-secondary btn-sm">전달</button>
                <button class="btn btn-secondary btn-sm">전체전달</button>
            </div>
            <div class="page-container">
                <a href="#"><</a>
                <a href="#">1</a>
                <a href="#">2</a>
                <a href="#">3</a>
                <a href="#">4</a>
                <a href="#">5</a>
                <a href="#">></a>
            </div>
        </div>

        <!-- 스펨 쪽지함 -->

        <div class="right-sidebar-message-contaner" id="spem-message-container">
            <div class="message-btn-container">
                <button class="btn btn-green btn-sm sending-message-button">쪽지 보내기</button>
                <button class="btn btn-primary btn-sm send-message-button">보낸 쪽지함</button>
                <button class="btn btn-primary btn-sm get-message-button">받은 쪽지함</button>
                <button class="btn btn-purple btn-sm spem-message-button">스팸함</button>
                <button class="btn btn-primary btn-sm btn-message-off">닫기</button>
            </div>
            <div class="notification-list-container">
                <ul class="notification-list friend-requests">
                    <li>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="optionsCheckboxes" class="item-checkbox">
                            </label>
                        </div>
                        <div class="author-thumb">
                            <img src="img/avatar55-sm.jpg" alt="author">
                        </div>
                        <div class="notification-event">
                            <a href="#" class="h6 notification-friend message-item">히오스빌런</a>
                            <span class="chat-message-item">히어로즈 오브 더 스☆톰♚♚가입시$$전원 카드팩☜☜ ...</span>
                        </div>

                        <div class="more">
                            <svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
                            <div class="float-right">
                                2018-05-31 09:11
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="message-btn-container">
                <div class="checkbox float-left">
                    <label>
                        <input type="checkbox" name="optionsCheckboxes" id="spem-item-select-all">
                        전체선택
                    </label>
                </div>
                <button class="btn btn-secondary btn-sm">삭제</button>
                <button class="btn btn-secondary btn-sm">전달</button>
                <button class="btn btn-secondary btn-sm">전체전달</button>
                <button class="btn btn-secondary btn-sm">스펨등록</button>
            </div>
            <div class="page-container">
                <a href="#"><</a>
                <a href="#">1</a>
                <a href="#">2</a>
                <a href="#">3</a>
                <a href="#">4</a>
                <a href="#">5</a>
                <a href="#">></a>
            </div>
        </div>

        <!-- 쪽지 보내기 -->

        <div class="right-sidebar-message-contaner" id="sending-message-container">
            <div class="message-btn-container">
                <button class="btn btn-purple btn-sm">쪽지 보내기</button>
                <button class="btn btn-primary btn-sm send-message-button">보낸 쪽지함</button>
                <button class="btn btn-primary btn-sm get-message-button">받은 쪽지함</button>
                <button class="btn btn-primary btn-sm spem-message-button">스팸함</button>
                <button class="btn btn-primary btn-sm btn-message-off">닫기</button>
            </div>
            <form action="SendMessage.php">
                <div class="notification-list-container">
                    <ul class="notification-list friend-requests">
                        <li>
                            <input type="text" name="title" placeholder="제목" class="message-title">
                            <input type="text" name="sender" placeholder="보낸사람" class="message-receiver">
                        </li>
                        <li>
                            <textarea type="text" name="content" placeholder="내용" class="message-content"></textarea>
                        </li>
                    </ul>
                </div>
                <div class="message-btn-container" style="width: 450px">
                    <input type="submit" value="보내기" class="btn btn-secondary btn-sm" >
                </div>
            </form>
        </div>

        <!-- 쪽지 뷰 -->

        <div class="right-sidebar-message-contaner" id="view-message-container">
            <div class="message-btn-container">
                <button class="btn btn-primary btn-sm">쪽지 보내기</button>
                <button class="btn btn-primary btn-sm send-message-button">보낸 쪽지함</button>
                <button class="btn btn-primary btn-sm get-message-button">받은 쪽지함</button>
                <button class="btn btn-primary btn-sm spem-message-button">스팸함</button>
                <button class="btn btn-primary btn-sm btn-message-off">닫기</button>
            </div>
            <div class="notification-list-container">
                <ul class="notification-list friend-requests">
                    <li>
                        <input type="text" name="title" placeholder="제목" class="message-title" disabled="disabled" value="안녕하세요.">
                        <input type="text" name="receiver" placeholder="보낼사람" class="message-receiver" disabled="disabled" value="qownsgus0205@naver.com : 배준현">
                    </li>
                    <li>
                        <textarea type="text" name="content" placeholder="내용" class="message-content" disabled="disabled">www.daerida.com 안녕하세요</textarea>
                    </li>
                </ul>
            </div>
            <div class="message-btn-container" style="width: 450px">
                <button class="btn btn-secondary btn-sm">삭제</button>
                <button class="btn btn-secondary btn-sm">전달</button>
                <button class="btn btn-secondary btn-sm">스펨등록</button>
            </div>
        </div>

    </div>

    <!-- ... end Fixed Sidebar Right -->


    <!-- Fixed Sidebar Right-Responsive -->

    <div class="fixed-sidebar right fixed-sidebar-responsive">

        <div class="fixed-sidebar-right sidebar--small" id="sidebar-right-responsive">

            <a href="#" class="olympus-chat inline-items js-chat-open">
                <svg class="olymp-chat---messages-icon">
                    <use xlink:href="<? echo base_url();?>resource/svg-icons/sprites/icons.svg#olymp-chat---messages-icon"></use>
                </svg>
            </a>

        </div>

    </div>

    <!-- ... end Fixed Sidebar Right-Responsive -->


    <!-- Header-BP -->

    <header class="header" id="site-header">

        <a href="#">
            <div style="position: absolute; left: 20px; top: 11px;">
                <img src="<? echo base_url();?>resource/img/logo.png" alt="데리다" style=" height: 48px; width: auto;">
            </div>
        </a>

        <div class="page-title">
            <h6>Profile Page</h6>
        </div>

        <div class="control-block">

            <div class="nav-left-border inline-items">
                <div class="author-page author vcard inline-items more nav-margin-left-zero">
                    <div class="author-thumb">
                        <div class="more-dropdown more-with-triangle">
                            <div class="mCustomScrollbar" data-mcs-theme="dark">

                                <div class="ui-block-title ui-block-title-small">
                                    <h6 class="title">구인</h6>
                                </div>
                                <ul class="account-settings">

                                    <li>
                                        <a href="#">

                                            <svg class="olymp-menu-icon">
                                                <use xlink:href="svg-icons/sprites/icons.svg#olymp-menu-icon"></use>
                                            </svg>



                                            <span>인력정보</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <svg class="olymp-logout-icon">
                                                <use xlink:href="svg-icons/sprites/icons.svg#olymp-logout-icon"></use>
                                            </svg>

                                            <span>흠터레스팅...</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="nav-item-container align-center">
                        <a href="#" class="author-name fn">
                            <div class="author-title nav-costom-item">
                                구인
                                <svg class="olymp-dropdown-arrow-icon position-absolute">
                                    <use xlink:href="<? echo base_url();?>resource/svg-icons/sprites/icons.svg#olymp-dropdown-arrow-icon"></use>
                                </svg>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="author-page author vcard inline-items more nav-margin-left-zero">
                    <div class="author-thumb">
                        <div class="more-dropdown more-with-triangle">
                            <div class="mCustomScrollbar" data-mcs-theme="dark">
                                <div class="ui-block-title ui-block-title-small">
                                    <h6 class="title">구직</h6>
                                </div>

                                <ul class="account-settings">
                                    <li>
                                        <a href="#">

                                            <svg class="olymp-menu-icon">
                                                <use xlink:href="<? echo base_url();?>resource/svg-icons/sprites/icons.svg#olymp-menu-icon"></use>
                                            </svg>

                                            <span>기업정보</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <svg class="olymp-logout-icon">
                                                <use xlink:href="<? echo base_url();?>resource/svg-icons/sprites/icons.svg#olymp-logout-icon"></use>
                                            </svg>

                                            <span>흐음터레스팅....</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="nav-item-container align-center">
                        <a href="#" class="author-name fn">
                            <div class="author-title nav-costom-item">
                                구직
                                <svg class="olymp-dropdown-arrow-icon position-absolute">
                                    <use xlink:href="<? echo base_url();?>resource/svg-icons/sprites/icons.svg#olymp-dropdown-arrow-icon"></use>
                                </svg>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="author-page author vcard inline-items more nav-margin-left-zero">
                    <div class="author-thumb">
                        <div class="more-dropdown more-with-triangle">
                            <div class="mCustomScrollbar" data-mcs-theme="dark">
                                <div class="ui-block-title ui-block-title-small">
                                    <h3 class="title">팀빌딩</h3>
                                </div>
                                <ul class="account-settings">
                                    <li>
                                        <a href="#">

                                            <svg class="olymp-menu-icon">
                                                <use xlink:href="<? echo base_url();?>resource/svg-icons/sprites/icons.svg#olymp-menu-icon"></use>
                                            </svg>

                                            <span>팀만들기</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <svg class="olymp-logout-icon">
                                                <use xlink:href="<? echo base_url();?>resource/svg-icons/sprites/icons.svg#olymp-logout-icon"></use>
                                            </svg>

                                            <span>팀찾기</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="nav-item-container align-center">
                        <a href="#" class="author-name fn">
                            <div class="author-title nav-costom-item">
                                팀빌딩
                                <svg class="olymp-dropdown-arrow-icon position-absolute">
                                    <use xlink:href="<? echo base_url();?>resource/svg-icons/sprites/icons.svg#olymp-dropdown-arrow-icon"></use>
                                </svg>
                            </div>
                        </a>
                    </div>
                </div>

            </div>

            <div class="author-page author vcard inline-items more">
                <div class="author-thumb">
                    <img alt="author" src="<? echo base_url();?>resource/img/author-page.jpg" class="avatar">
                    <span class="icon-status online"></span>
                    <div class="more-dropdown more-with-triangle">
                        <div class="mCustomScrollbar" data-mcs-theme="dark">
                            <div class="ui-block-title ui-block-title-small">
                                <h6 class="title">Your Account</h6>
                            </div>

                            <ul class="account-settings">
                                <li>
                                    <a href="#">

                                        <svg class="olymp-menu-icon">
                                            <use xlink:href="<? echo base_url();?>resource/svg-icons/sprites/icons.svg#olymp-menu-icon"></use>
                                        </svg>

                                        <span>프로필 변경</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/index.php/auth/logout">
                                        <svg class="olymp-logout-icon">
                                            <use xlink:href="<? echo base_url();?>resource/svg-icons/sprites/icons.svg#olymp-logout-icon"></use>
                                        </svg>

                                        <span>로그아웃</span>
                                    </a>
                                </li>
                            </ul>

                            <div class="ui-block-title ui-block-title-small">
                                <h6 class="title">Custom Status</h6>
                            </div>

                            <form class="form-group with-button custom-status">
                                <input class="form-control" placeholder="" type="text" value="Space Cowboy">

                                <button class="bg-purple">
                                    <svg class="olymp-check-icon">
                                        <use xlink:href="<? echo base_url();?>resource/svg-icons/sprites/icons.svg#olymp-check-icon"></use>
                                    </svg>
                                </button>
                            </form>
                        </div>

                    </div>
                </div>
                <a href="02-ProfilePage.html" class="author-name fn">
                    <div class="author-title">
                        James Spiegel
                        <svg class="olymp-dropdown-arrow-icon">
                            <use xlink:href="<? echo base_url();?>resource/svg-icons/sprites/icons.svg#olymp-dropdown-arrow-icon"></use>
                        </svg>
                    </div>
                    <span class="author-subtitle">SPACE COWBOY</span>
                </a>
            </div>

        </div>

    </header>

    <!-- ... end Header-BP -->


    <!-- Responsive Header-BP -->

    <header class="header header-responsive" id="site-header-responsive">

        <a href="#">
            <div style="position: absolute; left: 20px; top: 10px;">
                <img src="<? echo base_url();?>resource/img/logo.png" alt="데리다">
            </div>
        </a>

        <div class="header-content-wrapper">
            <ul class="nav nav-tabs mobile-app-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#request" role="tab">
                        <div class="control-icon has-items">
                            <svg class="olymp-happy-face-icon">
                                <use xlink:href="svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use>
                            </svg>
                            <div class="label-avatar bg-blue">6</div>
                        </div>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#chat" role="tab">
                        <div class="control-icon has-items">
                            <svg class="olymp-chat---messages-icon">
                                <use xlink:href="svg-icons/sprites/icons.svg#olymp-chat---messages-icon"></use>
                            </svg>
                            <div class="label-avatar bg-purple">2</div>
                        </div>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#notification" role="tab">
                        <div class="control-icon has-items">
                            <svg class="olymp-thunder-icon">
                                <use xlink:href="svg-icons/sprites/icons.svg#olymp-thunder-icon"></use>
                            </svg>
                            <div class="label-avatar bg-primary">8</div>
                        </div>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#search" role="tab">
                        <svg class="olymp-magnifying-glass-icon">
                            <use xlink:href="svg-icons/sprites/icons.svg#olymp-magnifying-glass-icon"></use>
                        </svg>
                        <svg class="olymp-close-icon">
                            <use xlink:href="svg-icons/sprites/icons.svg#olymp-close-icon"></use>
                        </svg>
                    </a>
                </li>
            </ul>
        </div>

        <!-- Tab panes -->
        <div class="tab-content tab-content-responsive">

            <div class="tab-pane " id="request" role="tabpanel">

                <div class="mCustomScrollbar" data-mcs-theme="dark">
                    <div class="ui-block-title ui-block-title-small">
                        <h6 class="title">FRIEND REQUESTS</h6>
                        <a href="#">Find Friends</a>
                        <a href="#">Settings</a>
                    </div>
                    <ul class="notification-list friend-requests">
                        <li>
                            <div class="author-thumb">
                                <img src="img/avatar55-sm.jpg" alt="author">
                            </div>
                            <div class="notification-event">
                                <a href="#" class="h6 notification-friend">Tamara Romanoff</a>
                                <span class="chat-message-item">Mutual Friend: Sarah Hetfield</span>
                            </div>
                            <span class="notification-icon">
                              <a href="#" class="accept-request">
                               <span class="icon-add without-text">
                                <svg class="olymp-happy-face-icon"><use
                                    xlink:href="svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
                                </span>
                            </a>

                            <a href="#" class="accept-request request-del">
                               <span class="icon-minus">
                                <svg class="olymp-happy-face-icon"><use
                                    xlink:href="svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
                                </span>
                            </a>

                        </span>

                        <div class="more">
                            <svg class="olymp-three-dots-icon">
                                <use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use>
                            </svg>
                        </div>
                    </li>
                    <li>
                        <div class="author-thumb">
                            <img src="<? echo base_url();?>resource/img/avatar56-sm.jpg" alt="author">
                        </div>
                        <div class="notification-event">
                            <a href="#" class="h6 notification-friend">Tony Stevens</a>
                            <span class="chat-message-item">4 Friends in Common</span>
                        </div>
                        <span class="notification-icon">
                          <a href="#" class="accept-request">
                           <span class="icon-add without-text">
                            <svg class="olymp-happy-face-icon"><use
                                xlink:href="svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
                            </span>
                        </a>

                        <a href="#" class="accept-request request-del">
                           <span class="icon-minus">
                            <svg class="olymp-happy-face-icon"><use
                                xlink:href="svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
                            </span>
                        </a>

                    </span>

                    <div class="more">
                        <svg class="olymp-three-dots-icon">
                            <use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use>
                        </svg>
                    </div>
                </li>
                <li class="accepted">
                    <div class="author-thumb">
                        <img src="<? echo base_url();?>resource/img/avatar57-sm.jpg" alt="author">
                    </div>
                    <div class="notification-event">
                        You and <a href="#" class="h6 notification-friend">Mary Jane Stark</a> just became friends.
                        Write on <a href="#" class="notification-link">her wall</a>.
                    </div>
                    <span class="notification-icon">
                      <svg class="olymp-happy-face-icon"><use
                        xlink:href="svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
                    </span>

                    <div class="more">
                        <svg class="olymp-three-dots-icon">
                            <use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use>
                        </svg>
                        <svg class="olymp-little-delete">
                            <use xlink:href="svg-icons/sprites/icons.svg#olymp-little-delete"></use>
                        </svg>
                    </div>
                </li>
                <li>
                    <div class="author-thumb">
                        <img src="<? echo base_url();?>resource/img/avatar58-sm.jpg" alt="author">
                    </div>
                    <div class="notification-event">
                        <a href="#" class="h6 notification-friend">Stagg Clothing</a>
                        <span class="chat-message-item">9 Friends in Common</span>
                    </div>
                    <span class="notification-icon">
                      <a href="#" class="accept-request">
                       <span class="icon-add without-text">
                        <svg class="olymp-happy-face-icon"><use
                            xlink:href="svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
                        </span>
                    </a>

                    <a href="#" class="accept-request request-del">
                       <span class="icon-minus">
                        <svg class="olymp-happy-face-icon"><use
                            xlink:href="svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
                        </span>
                    </a>

                </span>

                <div class="more">
                    <svg class="olymp-three-dots-icon">
                        <use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use>
                    </svg>
                </div>
            </li>
        </ul>
        <a href="#" class="view-all bg-blue">Check all your Events</a>
    </div>

</div>

<div class="tab-pane " id="chat" role="tabpanel">

    <div class="mCustomScrollbar" data-mcs-theme="dark">
        <div class="ui-block-title ui-block-title-small">
            <h6 class="title">Chat / Messages</h6>
            <a href="#">Mark all as read</a>
            <a href="#">Settings</a>
        </div>

        <ul class="notification-list chat-message">
            <li class="message-unread">
                <div class="author-thumb">
                    <img src="<? echo base_url();?>resource/img/avatar59-sm.jpg" alt="author">
                </div>
                <div class="notification-event">
                    <a href="#" class="h6 notification-friend">Diana Jameson</a>
                    <span class="chat-message-item">Hi James! It’s Diana, I just wanted to let you know that we have to reschedule...</span>
                    <span class="notification-date"><time class="entry-date updated"
                      datetime="2004-07-24T18:18">4 hours ago</time></span>
                  </div>
                  <span class="notification-icon">
                      <svg class="olymp-chat---messages-icon"><use
                        xlink:href="svg-icons/sprites/icons.svg#olymp-chat---messages-icon"></use></svg>
                    </span>
                    <div class="more">
                        <svg class="olymp-three-dots-icon">
                            <use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use>
                        </svg>
                    </div>
                </li>

                <li>
                    <div class="author-thumb">
                        <img src="<? echo base_url();?>resource/img/avatar60-sm.jpg" alt="author">
                    </div>
                    <div class="notification-event">
                        <a href="#" class="h6 notification-friend">Jake Parker</a>
                        <span class="chat-message-item">Great, I’ll see you tomorrow!.</span>
                        <span class="notification-date"><time class="entry-date updated"
                          datetime="2004-07-24T18:18">4 hours ago</time></span>
                      </div>
                      <span class="notification-icon">
                          <svg class="olymp-chat---messages-icon"><use
                            xlink:href="svg-icons/sprites/icons.svg#olymp-chat---messages-icon"></use></svg>
                        </span>

                        <div class="more">
                            <svg class="olymp-three-dots-icon">
                                <use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use>
                            </svg>
                        </div>
                    </li>
                    <li>
                        <div class="author-thumb">
                            <img src="<? echo base_url();?>resource/img/avatar61-sm.jpg" alt="author">
                        </div>
                        <div class="notification-event">
                            <a href="#" class="h6 notification-friend">Elaine Dreyfuss</a>
                            <span class="chat-message-item">We’ll have to check that at the office and see if the client is on board with...</span>
                            <span class="notification-date"><time class="entry-date updated"
                              datetime="2004-07-24T18:18">Yesterday at 9:56pm</time></span>
                          </div>
                          <span class="notification-icon">
                           <svg class="olymp-chat---messages-icon"><use
                            xlink:href="svg-icons/sprites/icons.svg#olymp-chat---messages-icon"></use></svg>
                        </span>
                        <div class="more">
                            <svg class="olymp-three-dots-icon">
                                <use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use>
                            </svg>
                        </div>
                    </li>

                    <li class="chat-group">
                        <div class="author-thumb">
                            <img src="<? echo base_url();?>resource/img/avatar11-sm.jpg" alt="author">
                            <img src="<? echo base_url();?>resource/img/avatar12-sm.jpg" alt="author">
                            <img src="<? echo base_url();?>resource/img/avatar13-sm.jpg" alt="author">
                            <img src="<? echo base_url();?>resource/img/avatar10-sm.jpg" alt="author">
                        </div>
                        <div class="notification-event">
                            <a href="#" class="h6 notification-friend">You, Faye, Ed &amp; Jet +3</a>
                            <span class="last-message-author">Ed:</span>
                            <span class="chat-message-item">Yeah! Seems fine by me!</span>
                            <span class="notification-date"><time class="entry-date updated"
                              datetime="2004-07-24T18:18">March 16th at 10:23am</time></span>
                          </div>
                          <span class="notification-icon">
                           <svg class="olymp-chat---messages-icon"><use
                            xlink:href="<? echo base_url();?>resource/svg-icons/sprites/icons.svg#olymp-chat---messages-icon"></use></svg>
                        </span>
                        <div class="more">
                            <svg class="olymp-three-dots-icon">
                                <use xlink:href="<? echo base_url();?>resource/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use>
                            </svg>
                        </div>
                    </li>
                </ul>

                <a href="#" class="view-all bg-purple">View All Messages</a>
            </div>

        </div>

        <div class="tab-pane " id="notification" role="tabpanel">

            <div class="mCustomScrollbar" data-mcs-theme="dark">
                <div class="ui-block-title ui-block-title-small">
                    <h6 class="title">Notifications</h6>
                    <a href="#">Mark all as read</a>
                    <a href="#">Settings</a>
                </div>

                <ul class="notification-list">
                    <li>
                        <div class="author-thumb">
                            <img src="<? echo base_url();?>resource/img/avatar62-sm.jpg" alt="author">
                        </div>
                        <div class="notification-event">
                            <div><a href="#" class="h6 notification-friend">Mathilda Brinker</a> commented on your new
                                <a href="#" class="notification-link">profile status</a>.
                            </div>
                            <span class="notification-date"><time class="entry-date updated"
                              datetime="2004-07-24T18:18">4 hours ago</time></span>
                          </div>
                          <span class="notification-icon">
                           <svg class="olymp-comments-post-icon"><use
                            xlink:href="<? echo base_url();?>resource/svg-icons/sprites/icons.svg#olymp-comments-post-icon"></use></svg>
                        </span>

                        <div class="more">
                            <svg class="olymp-three-dots-icon">
                                <use xlink:href="<? echo base_url();?>resource/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use>
                            </svg>
                            <svg class="olymp-little-delete">
                                <use xlink:href="<? echo base_url();?>resource/svg-icons/sprites/icons.svg#olymp-little-delete"></use>
                            </svg>
                        </div>
                    </li>

                    <li class="un-read">
                        <div class="author-thumb">
                            <img src="<? echo base_url();?>resource/img/avatar63-sm.jpg" alt="author">
                        </div>
                        <div class="notification-event">
                            <div>You and <a href="#" class="h6 notification-friend">Nicholas Grissom</a> just became
                                friends. Write on <a href="#" class="notification-link">his wall</a>.
                            </div>
                            <span class="notification-date"><time class="entry-date updated"
                              datetime="2004-07-24T18:18">9 hours ago</time></span>
                          </div>
                          <span class="notification-icon">
                           <svg class="olymp-happy-face-icon"><use
                            xlink:href="<? echo base_url();?>resource/svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
                        </span>

                        <div class="more">
                            <svg class="olymp-three-dots-icon">
                                <use xlink:href="<? echo base_url();?>resource/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use>
                            </svg>
                            <svg class="olymp-little-delete">
                                <use xlink:href="<? echo base_url();?>resource/svg-icons/sprites/icons.svg#olymp-little-delete"></use>
                            </svg>
                        </div>
                    </li>

                    <li class="with-comment-photo">
                        <div class="author-thumb">
                            <img src="<? echo base_url();?>resource/img/avatar64-sm.jpg" alt="author">
                        </div>
                        <div class="notification-event">
                            <div><a href="#" class="h6 notification-friend">Sarah Hetfield</a> commented on your <a
                                href="#" class="notification-link">photo</a>.
                            </div>
                            <span class="notification-date"><time class="entry-date updated"
                              datetime="2004-07-24T18:18">Yesterday at 5:32am</time></span>
                          </div>
                          <span class="notification-icon">
                           <svg class="olymp-comments-post-icon"><use
                            xlink:href="<? echo base_url();?>resource/svg-icons/sprites/icons.svg#olymp-comments-post-icon"></use></svg>
                        </span>

                        <div class="comment-photo">
                            <img src="<? echo base_url();?>resource/img/comment-photo1.jpg" alt="photo">
                            <span>“She looks incredible in that outfit! We should see each...”</span>
                        </div>

                        <div class="more">
                            <svg class="olymp-three-dots-icon">
                                <use xlink:href="<? echo base_url();?>resource/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use>
                            </svg>
                            <svg class="olymp-little-delete">
                                <use xlink:href="<? echo base_url();?>resource/svg-icons/sprites/icons.svg#olymp-little-delete"></use>
                            </svg>
                        </div>
                    </li>

                    <li>
                        <div class="author-thumb">
                            <img src="<? echo base_url();?>resource/img/avatar65-sm.jpg" alt="author">
                        </div>
                        <div class="notification-event">
                            <div><a href="#" class="h6 notification-friend">Green Goo Rock</a> invited you to attend to
                                his event Goo in <a href="#" class="notification-link">Gotham Bar</a>.
                            </div>
                            <span class="notification-date"><time class="entry-date updated"
                              datetime="2004-07-24T18:18">March 5th at 6:43pm</time></span>
                          </div>
                          <span class="notification-icon">
                           <svg class="olymp-happy-face-icon"><use
                            xlink:href="svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
                        </span>

                        <div class="more">
                            <svg class="olymp-three-dots-icon">
                                <use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use>
                            </svg>
                            <svg class="olymp-little-delete">
                                <use xlink:href="svg-icons/sprites/icons.svg#olymp-little-delete"></use>
                            </svg>
                        </div>
                    </li>

                    <li>
                        <div class="author-thumb">
                            <img src="<? echo base_url();?>resource/img/avatar66-sm.jpg" alt="author">
                        </div>
                        <div class="notification-event">
                            <div><a href="#" class="h6 notification-friend">James Summers</a> commented on your new <a
                                href="#" class="notification-link">profile status</a>.
                            </div>
                            <span class="notification-date"><time class="entry-date updated"
                              datetime="2004-07-24T18:18">March 2nd at 8:29pm</time></span>
                          </div>
                          <span class="notification-icon">
                           <svg class="olymp-heart-icon"><use
                            xlink:href="svg-icons/sprites/icons.svg#olymp-heart-icon"></use></svg>
                        </span>

                        <div class="more">
                            <svg class="olymp-three-dots-icon">
                                <use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use>
                            </svg>
                            <svg class="olymp-little-delete">
                                <use xlink:href="svg-icons/sprites/icons.svg#olymp-little-delete"></use>
                            </svg>
                        </div>
                    </li>
                </ul>

                <a href="#" class="view-all bg-primary">View All Notifications</a>
            </div>

        </div>

        <div class="tab-pane " id="search" role="tabpanel">


            <form class="search-bar w-search notification-list friend-requests">
                <div class="form-group with-button">
                    <input class="form-control js-user-search" placeholder="Search here people or pages..." type="text">
                </div>
            </form>


        </div>

    </div>
    <!-- ... end  Tab panes -->

</header>

<div class="header-spacer"></div>





<script src="<? echo base_url();?>resource/js/jquery-3.2.1.js"></script>
<script src="<? echo base_url();?>resource/js/jquery.appear.js"></script>
<script src="<? echo base_url();?>resource/js/jquery.mousewheel.js"></script>
<script src="<? echo base_url();?>resource/js/perfect-scrollbar.js"></script>
<script src="<? echo base_url();?>resource/js/jquery.matchHeight.js"></script>
<script src="<? echo base_url();?>resource/js/svgxuse.js"></script>
<script src="<? echo base_url();?>resource/js/imagesloaded.pkgd.js"></script>
<script src="<? echo base_url();?>resource/js/Headroom.js"></script>
<script src="<? echo base_url();?>resource/js/velocity.js"></script>
<script src="<? echo base_url();?>resource/js/ScrollMagic.js"></script>
<script src="<? echo base_url();?>resource/js/jquery.waypoints.js"></script>
<script src="<? echo base_url();?>resource/js/jquery.countTo.js"></script>
<script src="<? echo base_url();?>resource/js/popper.min.js"></script>
<script src="<? echo base_url();?>resource/js/material.min.js"></script>
<script src="<? echo base_url();?>resource/js/bootstrap-select.js"></script>
<script src="<? echo base_url();?>resource/js/smooth-scroll.js"></script>
<script src="<? echo base_url();?>resource/js/selectize.js"></script>
<script src="<? echo base_url();?>resource/js/swiper.jquery.js"></script>
<script src="<? echo base_url();?>resource/js/moment.js"></script>
<script src="<? echo base_url();?>resource/js/daterangepicker.js"></script>
<script src="<? echo base_url();?>resource/js/simplecalendar.js"></script>
<script src="<? echo base_url();?>resource/js/fullcalendar.js"></script>
<script src="<? echo base_url();?>resource/js/isotope.pkgd.js"></script>
<script src="<? echo base_url();?>resource/js/ajax-pagination.js"></script>
<script src="<? echo base_url();?>resource/js/Chart.js"></script>
<script src="<? echo base_url();?>resource/js/chartjs-plugin-deferred.js"></script>
<script src="<? echo base_url();?>resource/js/circle-progress.js"></script>
<script src="<? echo base_url();?>resource/js/loader.js"></script>
<script src="<? echo base_url();?>resource/js/run-chart.js"></script>
<script src="<? echo base_url();?>resource/js/jquery.magnific-popup.js"></script>
<script src="<? echo base_url();?>resource/js/jquery.gifplayer.js"></script>
<script src="<? echo base_url();?>resource/js/mediaelement-and-player.js"></script>
<script src="<? echo base_url();?>resource/js/mediaelement-playlist-plugin.min.js"></script>

<script src="<? echo base_url();?>resource/js/base-init.js"></script>
<script defer src="<? echo base_url();?>resource/fonts/fontawesome-all.js"></script>

<script src="<? echo base_url();?>resource/Bootstrap/dist/js/bootstrap.bundle.js"></script>
</body>
</html> 


<script type="text/javascript">
    $(function(){
        console.log("asdfasdf");
        $("#sidebar-right").show();
        $("#sending-message-container").hide();
        $("#send-message-container").hide();
        $("#get-message-container").hide();
        $("#spem-message-container").hide();
        $("#view-message-container").hide();


        $(".btn-message-off").click(function(){
            $("#sidebar-right").show();
            $("#view-message-container").hide();
            $("#sending-message-container").hide();
            $("#get-message-container").hide();
            $("#send-message-container").hide();
            $("#spem-message-container").hide();
        });
        $("#sidebar-right").click(function(){
            $("#sidebar-right").hide();
            $("#view-message-container").hide();
            $("#sending-message-container").hide();
            $("#get-message-container").hide();
            $("#send-message-container").show();
            $("#spem-message-container").hide();
        });
        $(".send-message-button").click(function(){
            console.log("aaa");
            $("#sending-message-container").hide();
            $("#view-message-container").hide();
            $("#get-message-container").hide();
            $("#send-message-container").show();
            $("#spem-message-container").hide();
        });
        $(".get-message-button").click(function(){
            console.log("bbb");
            $("#sending-message-container").hide();
            $("#view-message-container").hide();
            $("#get-message-container").show();
            $("#send-message-container").hide();
            $("#spem-message-container").hide();
        });
        $(".spem-message-button").click(function(){
            console.log("ccc");
            $("#sending-message-container").hide();
            $("#view-message-container").hide();
            $("#get-message-container").hide();
            $("#send-message-container").hide();
            $("#spem-message-container").show();
        });
        $(".sending-message-button").click(function(){
            console.log("ccc");
            $("#sending-message-container").show();
            $("#view-message-container").hide();
            $("#get-message-container").hide();
            $("#send-message-container").hide();
            $("#spem-message-container").hide();
        });
        $(".message-item").click(function(){
            console.log("ccc");
            $("#view-message-container").show();
            $("#sending-message-container").hide();
            $("#get-message-container").hide();
            $("#send-message-container").hide();
            $("#spem-message-container").hide();
        });

        $("#send-item-select-all").click(function(){
            console.log("checkall");
            if($("#send-item-select-all").prop("checked")) {
                console.log("checkallTrue");
                $(".item-checkbox").prop("checked",true);
            }
            else { 
                console.log("checkallFalse");
                $(".item-checkbox").prop("checked",false); 
            }
        });
        $("#get-item-select-all").click(function(){
            console.log("checkall");
            if($("#get-item-select-all").prop("checked")) {
                console.log("checkallTrue");
                $(".item-checkbox").prop("checked",true);
            }
            else { 
                console.log("checkallFalse");
                $(".item-checkbox").prop("checked",false); 
            }
        });
        $("#spem-item-select-all").click(function(){
            console.log("checkall");
            if($("#spem-item-select-all").prop("checked")) {
                console.log("checkallTrue");
                $(".item-checkbox").prop("checked",true);
            }
            else { 
                console.log("checkallFalse");
                $(".item-checkbox").prop("checked",false); 
            }
        });

    });


</script>