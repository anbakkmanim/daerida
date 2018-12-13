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
<!--					<form class="w-search">-->
<!--						<div class="form-group with-button is-empty">-->
<!--							<input class="form-control" type="text" placeholder="Search the forums...">-->
<!--							<button>-->
<!--								<svg class="olymp-magnifying-glass-icon"><use xlink:href="/assets/svg-icons/sprites/icons.svg#olymp-magnifying-glass-icon"></use></svg>-->
<!--							</button>-->
<!--						<span class="material-input"></span></div>-->
<!--					</form>-->
				</div>
			</div>
		</div>
	</div>
</div>
<?php
foreach ($result as $rows) {
    ?>
<div class="container">
	<div class="row">
		<div class="col col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">

			<div class="ui-block responsive-flex">
				<div class="ui-block-title">
					<div class="h2 title"><?= $rows['te_po_title']?></div>
				</div>

				
				<!-- Open Topic Table -->
				
				<table class="open-topic-table">
				
					<thead>
				
					<tr>
						<th width="200">
							작성자
						</th>
				
						<th>
							내용
						</th>
					</tr>
				
					</thead>
				
					<tbody>


					<tr>
						<td class="topic-date" colspan="2">
                            <?=$rows['te_po_date']?>
						</td>
					</tr>
				
					<tr>
						<td class="author">
							<div class="author-thumb">
								<img src="<?= "/uploads/profile/".$rows['me_n_profile'] ?>" alt="author">
							</div>
							<div class="author-content">
								<a href="02-ProfilePage.html" class="h6 author-name"><?= $rows['me_n_name'] ?></a>
								<div class="country"><?= $rows['me_n_sido'] ?></div>
							</div>
						</td>
						<td class="posts">
							<p><?= $rows['te_po_content']?>
							</p>
						</td>
					</tr>
                        <?php
                    }
                    ?>
				
					</tbody>
				</table>
				
				<!-- ... end Open Topic Table -->
			</div>

			
			<!-- Pagination -->
			

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
							</div>star
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