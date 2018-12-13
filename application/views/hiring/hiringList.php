<?php $this->load->view('layout/header'); ?>

<?php $this->load->view('layout/nav'); ?>

<div class="container">
	<div class="row">
		<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
			<div class="ui-block responsive-flex1200">
				<div class="ui-block-title">
					<ul class="filter-icons">
						<li>
							<a href="#">
								<img src="/assets/img/icon-chat2.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="/assets/img/icon-chat15.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="/assets/img/icon-chat9.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="/assets/img/icon-chat4.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="/assets/img/icon-chat6.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="/assets/img/icon-chat26.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="/assets/img/icon-chat27.png" alt="icon">
							</a>
						</li>
					</ul>
					<div class="w-select">
						<div class="title">Filter By:</div>
						<fieldset class="form-group">
							<div class="btn-group bootstrap-select form-control"><button type="button" class="btn dropdown-toggle btn-secondary" data-toggle="dropdown" role="button" title="All Categories"><span class="filter-option pull-left">All Categories</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span></button><div class="dropdown-menu open" role="combobox"><ul class="dropdown-menu inner" role="listbox" aria-expanded="false"><li data-original-index="0" class="selected"><a tabindex="0" class=" dropdown-item" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="true"><span class="text">All Categories</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="1"><a tabindex="0" class=" dropdown-item" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Favourite</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="2"><a tabindex="0" class=" dropdown-item" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Likes</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li></ul></div><select class="selectpicker form-control" tabindex="-98">
								<option value="NU">All Categories</option>
								<option value="NU">Favourite</option>
								<option value="NU">Likes</option>
							</select></div>
						<span class="material-input"></span></fieldset>
					</div>

					<div class="w-select">
						<fieldset class="form-group">
							<div class="btn-group bootstrap-select form-control"><button type="button" class="btn dropdown-toggle btn-secondary" data-toggle="dropdown" role="button" title="Date (Descending)"><span class="filter-option pull-left">Date (Descending)</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span></button><div class="dropdown-menu open" role="combobox"><ul class="dropdown-menu inner" role="listbox" aria-expanded="false"><li data-original-index="0" class="selected"><a tabindex="0" class=" dropdown-item" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="true"><span class="text">Date (Descending)</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="1"><a tabindex="0" class=" dropdown-item" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Date (Ascending)</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li></ul></div><select class="selectpicker form-control" tabindex="-98">
								<option value="NU">Date (Descending)</option>
								<option value="NU">Date (Ascending)</option>
							</select></div>
						<span class="material-input"></span></fieldset>
					</div>

					<a href="#" data-toggle="modal" data-target="#create-photo-album" class="btn btn-primary btn-md-2">Filter</a>

					<form class="w-search">
						<div class="form-group with-button is-empty">
							<input class="form-control" type="text" placeholder="Search Blog Posts......">
							<button>
								<svg class="olymp-magnifying-glass-icon"><use xlink:href="/assets/svg-icons/sprites/icons.svg#olymp-magnifying-glass-icon"></use></svg>
							</button>
						<span class="material-input"></span></div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<section class="blog-post-wrap medium-padding80">
	<div class="container">
		<div class="row">

            <?php
                foreach($hiringList as $item) {

            ?>
            <div class="col col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="ui-block">


                    <!-- Post -->

                    <article class="hentry blog-post">

                        <div class="post-thumb">
                            <img src="<?= '/uploads/profile/' . $item['me_c_profile'] ?>" alt="photo">
                        </div>

                        <div class="post-content">
                            <a href="#" class="post-category bg-purple" id="fromnow-<?= $item['re_idx']?>">
                                <?php
                                if ($item['re_endDate'] != null) {
                                    ?>
                                    <script>
                                        document.addEventListener("DOMContentLoaded", () => {
                                            $("#fromnow-<?= $item['re_idx'] ?>").text("종료 " + new moment("<?= $item['re_endDate'] ?>").locale("ko").fromNow(true) + " 전");
                                        });
                                    </script>
                                    <?php
                                    } else {
                                        echo "상시모집";
                                    }
                                    ?>
                            </a>
							<a href="/hiring/detail?re_idx=<?= $item['re_idx']?>" class="h4 post-title"><?=  $item['re_content'] ?></a>
<!--							<p>Here’s a photo from last month’s photoshoot. We got really awesome shots for the new catalog.</p>-->

							<div class="author-date">
								<a class="h6 post__author-name fn" href="#"><?= $item['me_c_name'] ?></a>
								<div class="post__date">
									<span class="published">
                                        <?php
                                            if ($item['re_startDate'] != null) {
                                                echo $item['re_startDate'] . " ~ ";
                                            }
                                            if ($item['re_endDate'] != null) {
                                                echo $item['re_endDate'];
                                            } else {
                                                echo "상시";
                                            }
                                        ?>
									</span>
								</div>
							</div>

							<div class="post-additional-info inline-items">
					
								<div class="comments-shared">
									<a href="#" class="post-add-icon inline-items">
										<svg class="olymp-speech-balloon-icon"><use xlink:href="/assets/svg-icons/sprites/icons.svg#olymp-speech-balloon-icon"></use></svg>
										<span><?= $item['recruitCnt'] ?>개의 분야 모집이 있습니다.</span>
									</a>
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
	
	<nav aria-label="Page navigation">
		<ul class="pagination justify-content-center">
			<li class="page-item disabled">
				<a class="page-link" href="#" tabindex="-1">Previous</a>
			</li>
			<li class="page-item"><a class="page-link" href="#">1<div class="ripple-container"><div class="ripple ripple-on ripple-out" style="left: -10.3833px; top: -16.8333px; background-color: rgb(255, 255, 255); transform: scale(16.7857);"></div></div></a></li>
			<li class="page-item"><a class="page-link" href="#">2</a></li>
			<li class="page-item"><a class="page-link" href="#">3</a></li>
			<li class="page-item"><a class="page-link" href="#">...</a></li>
			<li class="page-item"><a class="page-link" href="#">12</a></li>
			<li class="page-item">
				<a class="page-link" href="#">Next</a>
			</li>
		</ul>
	</nav>
	
	<!-- ... end Pagination -->

</section>

<?php $this->load->view('layout/footer'); ?>