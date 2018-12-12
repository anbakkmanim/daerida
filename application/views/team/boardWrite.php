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
					<form class="w-search">
						<div class="form-group with-button is-empty">
							<input class="form-control" type="text" placeholder="Search the forums...">
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

<div class="container">
	<div class="row">
		<div class="col col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">

			<div class="ui-block">
				<div class="ui-block-title bg-blue">
					<h6 class="title c-white">Create a New Topic</h6>
				</div>
				<div class="ui-block-content">
					
					<form>
						<div class="row">
							<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<div class="form-group label-floating">
									<label class="control-label">Topic Title</label>
									<input class="form-control" type="text" placeholder="" value="New York Comix Con is having the best panels this year!">
								<span class="material-input"></span></div>
							</div>
					
							<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<div class="form-group label-floating">
									<label class="control-label">Topic Title</label>
									<textarea class="form-control" style="height: 240px">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</textarea>
								<span class="material-input"></span></div>
							</div>
					
							<div class="col col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
								<a href="#" class="btn btn-secondary btn-lg full-width">Cancel</a>
							</div>
					
							<div class="col col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
								<a href="#" class="btn btn-blue btn-lg full-width">Post Topic</a>
							</div>
						</div>
					</form>
				</div>
			</div>

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
							<svg class="svg-inline--fa fa-star fa-w-18 icon" aria-hidden="true" data-prefix="fa" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <i class="icon fa fa-star" aria-hidden="true"></i> -->
							<div class="content">
								<a href="#" class="h6 title">The new Goddess of War trailer was launched at E3!</a>
								<time class="entry-date updated" datetime="2017-06-24T18:18">2 hours, 16 minutes ago</time>
							</div>
						</li>
						<li>
							<svg class="svg-inline--fa fa-star fa-w-18 icon" aria-hidden="true" data-prefix="fa" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <i class="icon fa fa-star" aria-hidden="true"></i> -->
							<div class="content">
								<a href="#" class="h6 title">This year’s ComixCon will have the best presentations</a>
								<time class="entry-date updated" datetime="2017-06-24T18:18">14 hours, 36 minutes ago</time>
							</div>
						</li>
						<li>
							<svg class="svg-inline--fa fa-star fa-w-18 icon" aria-hidden="true" data-prefix="fa" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <i class="icon fa fa-star" aria-hidden="true"></i> -->
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