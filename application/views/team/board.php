<?php $this->load->view('layout/header'); ?>

<?php $this->load->view('layout/nav'); ?>

<div class="main-header">
	<div class="content-bg-wrap bg-group"></div>
	<div class="container">
		<div class="row">
			<div class="col col-lg-8 m-auto col-md-8 col-sm-12 col-12">
				<div class="main-header-content">
					<h1>Welcome to the Forums!</h1>
					<p>Here in the forums you’ll be able to easily create and manage categories and topics to share with the
	 community! We included some of the most used topics, like music, comics, movies, and community, each one with a cool
	  and customizable illustration so you can have fun with them! </p>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
			<div class="ui-block responsive-flex">
				<div class="ui-block-title">
					<div class="h6 title">Olympus Forums</div>
					<div class="align-right">
						<form class="w-search">
							<div class="form-group with-button is-empty">
								<input class="form-control" type="text" placeholder="Search the forums...">
								<button>
									<svg class="olymp-magnifying-glass-icon"><use xlink:href="/assets/svg-icons/sprites/icons.svg#olymp-magnifying-glass-icon"></use></svg>
								</button>
							<span class="material-input"></span></div>
						</form>
						<a href="/team/boardWrite" class="btn btn-blue btn-md">글쓰기</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">

			<div class="ui-block">

				
				<!-- Forums Table -->
				
				<table class="forums-table">
				
					<thead>
				
					<tr>

						<th>
							순번
						</th>
				
						<th>
							제목
						</th>

						<th>
                            작성 일자
						</th>
				
						<th>
							글쓴이
						</th>
				
					</tr>
				
					</thead>
				
					<tbody>
                    <?php
                        foreach ($boards as $rows) {
                    ?>
					<tr class="bg-smoke-light">
                        <td class="topics">
                            <a href="#" class="h6 count"><?= $rows['te_po_idx']?></a>
                        </td>
						<td class="forum">
							<div class="forum-item">
								
								<div class="content">
									<a href="/team/boardView?te_po_idx=<?= $rows['te_po_idx'] ?>" class="h6 title"><?= $rows['te_po_title'] ?></a>
								</div>
<!--								<div class="author-started">-->
<!--									<span>Started by:</span>-->
<!--									<div class="author-thumb">-->
<!--										<img src="--><?//= "/uploads/profile/".$rows['me_n_profile'] ?><!--" alt="author">-->
<!--									</div>-->
<!--									<a href="#" class="h6 title">--><?//= $rows['me_n_name'] ?><!-- </a>-->
<!--								</div>-->
							</div>
						</td>

						<td class="posts">
							<a href="#" class="h6 count"><?=explode( " ", $rows['te_po_date'])[0] ?></a>
						</td>
						<td class="freshness">
							<div class="author-freshness">
								<div class="author-thumb">
									<img src="<?= "/uploads/profile/".$rows['me_n_profile'] ?>" alt="author">
								</div>
								<a href="#" class="h6 title"><?= $rows['me_n_name'] ?></a>
<!--								<time class="entry-date updated" datetime="--><?//=$rows['te_po_date'] ?><!--">6 minutes ago</time>-->
							</div>
						</td>
					</tr>

                    <?php
                        }
                    ?>
					</tbody>
				</table>
				
				<!-- ... end Forums Table -->

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

		</div>

		<div class="col col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
			<div class="ui-block">
				<div class="ui-block-title">
					<h6 class="title">Featured Topics</h6>
				</div>
				<div class="ui-block-content">

					
					<!-- Widget Featured Topics -->
					
					<ul class="widget w-featured-topics">
						<li>
							
							<div class="content">
								<a href="#" class="h6 title">The new Goddess of War trailer was launched at E3!</a>
								<time class="entry-date updated" datetime="2017-06-24T18:18">2 hours, 16 minutes ago</time>
							</div>
						</li>
						<li>
							
							<div class="content">
								<a href="#" class="h6 title">This year’s ComixCon will have the best presentations</a>
								<time class="entry-date updated" datetime="2017-06-24T18:18">14 hours, 36 minutes ago</time>
							</div>
						</li>
						<li>
							
							<div class="content">
								<a href="#" class="h6 title">Here are the behind-the-scenes photos of “Vilords”</a>
								<time class="entry-date updated" datetime="2017-06-24T18:18">9 hours, 8 minutes ago</time>
							</div>
						</li>
					</ul>
					
					<!-- ... end Widget Featured Topics -->
				</div>
			</div>

			<div class="ui-block">
				<div class="ui-block-title">
					<h6 class="title">Recent Topics</h6>
				</div>
				<div class="ui-block-content">

					
					<!-- Widget Recent Topics -->
					
					<ul class="widget w-featured-topics">
						<li>
							<div class="content">
								<a href="#" class="h6 title">Summer is Coming! Picnic in the east boulevard park</a>
								<time class="entry-date updated" datetime="2017-06-24T18:18">26 minutes ago</time>
								<div class="forums">The Community</div>
							</div>
						</li>
						<li>
							<div class="content">
								<a href="#" class="h6 title">Kung Fighters released a new video, check it out here!</a>
								<time class="entry-date updated" datetime="2017-06-24T18:18">44 minutes ago</time>
								<div class="forums">The Boombox</div>
							</div>
						</li>
						<li>
							<div class="content">
								<a href="#" class="h6 title">What’s your favourite season?</a>
								<time class="entry-date updated" datetime="2017-06-24T18:18">59 minutes ago</time>
								<div class="forums">The Community</div>
							</div>
						</li>
						<li>
							<div class="content">
								<a href="#" class="h6 title">Who had the best presentation at this year’s E3? Rate them!</a>
								<time class="entry-date updated" datetime="2017-06-24T18:18">1 hour, 3 minutes ago</time>
								<div class="forums">Arcade Planet</div>
							</div>
						</li>
					</ul>
					
					<!-- ... end Widget Recent Topics -->
				</div>
			</div>

		</div>

	</div>
</div>

<script>
document.querySelector(".bg-group").style.backgroundImage = "url(/assets/img/top-header5.png)";
</script>

<?php $this->load->view('layout/footer'); ?>