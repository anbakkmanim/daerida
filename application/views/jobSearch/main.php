
<body class="body-bg-white">

<div class="main-header">
    <div class="content-bg-wrap bg-music"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto col-md-8 col-sm-12 col-xs-12">
                <div class="main-header-content">
                    <h1>구직</h1>
                    <p>
                        구직 페이지에 어서오세요! 여기는 회사에서 원하는 사람을 구하는 페이지입니다. 사용가능한 기술, 연봉, 설명, 여러 정보들! 당신이 마음에 드는 회사에 신청을 해보세요! 좋은 하루되세요!
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 item-prifile-img">
            <div class="ui-block responsive-flex1200">
                <div class="ui-block-title">
                    <div class="w-select">
                        <div class="title">Filter By:</div>
                        <fieldset class="form-group">
                            <select class="selectpicker form-control">
                                <option value="NU">분야</option>
                                <option value="web">Web</option>
                                <option value="android">Android</option>
                                <option value="ios">IOS</option>
                                <option value="db">Database</option>
                            </select>
                        </fieldset>
                    </div>

                    <div class="w-select">
                        <fieldset class="form-group">
                            <select class="selectpicker form-control">
                                <option value="NU">Date (Descending)</option>
                                <option value="NU">Date (Ascending)</option>
                            </select>
                        </fieldset>
                    </div>

                    <a href="#" data-toggle="modal" data-target="#create-photo-album" class="btn btn-primary btn-md-2">Filter</a>

                    <form class="w-search">
                        <div class="form-group with-button">
                            <input class="form-control" type="text" placeholder="팀 찾기...">
                            <button>
                                <svg class="olymp-magnifying-glass-icon">
                                    <use xlink:href="<?= site_url('assets/svg_icons/sprites/icons.svg#olymp-magnifying-glass-icon') ?>"></use>
                                </svg>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<!--<section class="blog-post-wrap medium-padding80">-->
    <div class="container" style="margin-top: 80px;">
        <div class="row">
            <?php for($i = 0; $i < $listcount; $i++){?>
            <div class="col col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="ui-block">
                    <!-- Post -->
                    <article class="hentry blog-post">

                        <div class="post-thumb overflow_hidden">
                            <img src="<? echo $listdata[$i]['jobHuntingImage'] ?>" style="width:400px; height: 225px;" alt="photo" class="post_photo">
                        </div>

                        <div class="post-content">
<!--                            태그-->
                            <a href="#" class="post-category bg-blue-light">android</a>
<!--태그-->
                            <a href="/companyProfile/seeprofile/<? echo $listdata[$i]['compIdx']?>" class="h4 post-title"><? echo $listdata[$i]['title'] ?></a>
                            <p>
                                <? echo $listdata[$i]['simpleIntro'] ?>
                            </p>
                            <div class="author-date">
                                <a class="h6 post__author-name fn">신입</a>
                                <a class="h6 post__author-name fn">경력</a>
                            </div>
                            <div class="author-date">
                                <a class="h6 post__author-thumb fn mt_3"><? echo $listdata[$i]['annuaLIncome'] ?></a>
                            </div>

                            <div class="author-date">
                                <a href="/companyProfile/seeprofile/<? echo $listdata[$i]['compIdx']?>" class="btn btn-seoulblue btn-md-2">회사 보기</a>
                            </div>
                        </div>
                    </article>
                    <!-- ... end Post -->
                </div>
            </div>
            <?php }?>
        </div>
    </div>

    <!-- ... end Pagination -->

<!--</section>-->


<!-- Section Call To Action Animation -->

<section class="align-right pt160 pb80 section-move-bg call-to-action-animation scrollme">
    <div class="content-bg-wrap bg-section1"></div>
</section>


<a class="back-to-top" href="#">
    <img src="<?= site_url('assets/svg_icons/back-to-top.svg') ?>" alt="arrow" class="back-icon">
</a>


</body>
</html>