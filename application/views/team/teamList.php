<?php $this->load->view('layout/header'); ?>

<?php $this->load->view('layout/nav'); ?>

<?php $this->load->view('layout/inner_header', [
	'title' => '팀 목록',
	'content' => '가입을 원하는 팀을 선택해 주세요.',
	'color' => 2
]); ?>

<?php
if ($this->session->me_type != "me_n_") {
    alert("권한이 없습니다.");
    location_href("/");
    return;
}
?>

<script>
    function joinTeam(e, idx) {
        if (confirm("확인을 누르면 " + e.target.innerText + " 기업에 가입 신청이 됩니다.")) {

        }
    }
</script>

<section class="blog-post-wrap medium-padding80" style="padding-top: 20px; padding-bottom: 0;">
	<div class="container">
        <a href="/team/teamWrite" class="btn btn-blue btn-md">팀 만들기</a>
		<div class="row">

            <?php
            foreach($teamList as $item) {
            ?>
            <div class="col col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                <div class="ui-block">
                    <!-- Post -->

                    <article class="hentry blog-post">

                        <div class="post-content">
                            <div href="#" class="post-category badge-primary" style="font-size: 14px"><?= $item['te_isOpen'] ?></div>
                            <div href="#" class="post-category badge-success" style="font-size: 14px">분야 : <?= $item['fi_l_name'] ?></div>

                            <a href="#" class="h4 post-title" onclick="joinTeam(event, <?= $item['te_idx'] ?>)"><?=  $item['te_name'] ?></a>
							<p><?= $item['te_info'] ?></p>

							<div class="post-additional-info inline-items">
								<div class="comments-shared">
									<div href="/team/board?te_idx=<?= $item['te_idx']?>" class="post-add-icon inline-items">
										<svg class="olymp-speech-balloon-icon"><use xlink:href="/assets/svg-icons/sprites/icons.svg#olymp-speech-balloon-icon"></use></svg>
                                        <span><?= $item['post_Count'] ?>개의 게시물이 있습니다.</span>
									</div>
								</div>
					
							</div>
						</div>

					
					</article>
					
					<!-- ... end Post -->
				</div>
			</div>
                <?php } ?>

		</div>
	</div>

	
	<!-- Pagination -->
<!--	-->
<!--	<nav aria-label="Page navigation">-->
<!--		<ul class="pagination justify-content-center" style="margin-bottom: 35px; margin-top: 5px;">-->
<!--			<li class="page-item disabled">-->
<!--				<a class="page-link" href="#" tabindex="-1">Previous</a>-->
<!--			</li>-->
<!--			<li class="page-item"><a class="page-link" href="#">1<div class="ripple-container"><div class="ripple ripple-on ripple-out" style="left: -10.3833px; top: -16.8333px; background-color: rgb(255, 255, 255); transform: scale(16.7857);"></div></div></a></li>-->
<!--			<li class="page-item"><a class="page-link" href="#">2</a></li>-->
<!--			<li class="page-item"><a class="page-link" href="#">3</a></li>-->
<!--			<li class="page-item"><a class="page-link" href="#">...</a></li>-->
<!--			<li class="page-item"><a class="page-link" href="#">12</a></li>-->
<!--			<li class="page-item">-->
<!--				<a class="page-link" href="#">Next</a>-->
<!--			</li>-->
<!--		</ul>-->
<!--	</nav>-->
	
	<!-- ... end Pagination -->

</section>

<?php $this->load->view('layout/footer'); ?>