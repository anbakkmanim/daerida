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
			<div class="col col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
				<div class="ui-block">

					
					<!-- Post -->
					
					<article class="hentry blog-post">
					
						<div class="post-thumb">
							<img src="/assets/img/post1.jpg" alt="photo">
						</div>
					
						<div class="post-content">
							<a href="#" class="post-category bg-blue-light">THE COMMUNITY</a>
							<a href="#" class="h4 post-title">Here’s the Featured Urban photo of August! </a>
							<p>Here’s a photo from last month’s photoshoot. We got really awesome shots for the new catalog.</p>
					
							<div class="author-date">
								by
								<a class="h6 post__author-name fn" href="#">Maddy Simmons</a>
								<div class="post__date">
									<time class="published" datetime="2017-03-24T18:18">
										- 7 hours ago
									</time>
								</div>
							</div>
					
							<div class="post-additional-info inline-items">
					
								<ul class="friends-harmonic">
									<li>
										<a href="#">
											<img src="/assets/img/icon-chat27.png" alt="icon">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="/assets/img/icon-chat2.png" alt="icon">
										</a>
									</li>
								</ul>
								<div class="names-people-likes">
									26
								</div>
					
								<div class="comments-shared">
									<a href="#" class="post-add-icon inline-items">
										<svg class="olymp-speech-balloon-icon"><use xlink:href="/assets/svg-icons/sprites/icons.svg#olymp-speech-balloon-icon"></use></svg>
										<span>0</span>
									</a>
								</div>
					
							</div>
						</div>
					
					</article>
					
					<!-- ... end Post -->
				</div>
			</div>
			<div class="col col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
				<div class="ui-block">

					
					<!-- Post -->
					
					<article class="hentry blog-post">
					
						<div class="post-thumb">
							<img src="/assets/img/post2.jpg" alt="photo">
						</div>
					
						<div class="post-content">
							<a href="#" class="post-category bg-primary">OLYMPUS NEWS</a>
							<a href="#" class="h4 post-title">Olympus Network added new photo filters!</a>
							<p>Here’s a photo from last month’s photoshoot. We got really awesome shots for the new catalog.</p>
					
							<div class="author-date">
								by
								<a class="h6 post__author-name fn" href="#">JACK SCORPIO</a>
								<div class="post__date">
									<time class="published" datetime="2017-03-24T18:18">
										- 12 hours ago
									</time>
								</div>
							</div>
					
							<div class="post-additional-info inline-items">
					
								<ul class="friends-harmonic">
									<li>
										<a href="#">
											<img src="/assets/img/icon-chat4.png" alt="icon">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="/assets/img/icon-chat26.png" alt="icon">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="/assets/img/icon-chat16.png" alt="icon">
										</a>
									</li>
								</ul>
								<div class="names-people-likes">
									82
								</div>
					
								<div class="comments-shared">
									<a href="#" class="post-add-icon inline-items">
										<svg class="olymp-speech-balloon-icon"><use xlink:href="/assets/svg-icons/sprites/icons.svg#olymp-speech-balloon-icon"></use></svg>
										<span>14</span>
									</a>
								</div>
					
							</div>
						</div>
					
					</article>
					
					<!-- ... end Post -->
				</div>
			</div>
			<div class="col col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
				<div class="ui-block">

					
					<!-- Post -->
					
					<article class="hentry blog-post">
					
						<div class="post-thumb">
							<img src="/assets/img/post3.jpg" alt="photo">
						</div>
					
						<div class="post-content">
							<a href="#" class="post-category bg-purple">INSPIRATION</a>
							<a href="#" class="h4 post-title">Take a look at these truly awesome worspaces</a>
							<p>Here’s a photo from last month’s photoshoot. We got really awesome shots for the new catalog.</p>
					
							<div class="author-date">
								by
								<a class="h6 post__author-name fn" href="#">Maddy Simmons</a>
								<div class="post__date">
									<time class="published" datetime="2017-03-24T18:18">
										- 2 days ago
									</time>
								</div>
							</div>
					
							<div class="post-additional-info inline-items">
					
								<ul class="friends-harmonic">
									<li>
										<a href="#">
											<img src="/assets/img/icon-chat28.png" alt="icon">
										</a>
									</li>
								</ul>
								<div class="names-people-likes">
									0
								</div>
					
								<div class="comments-shared">
									<a href="#" class="post-add-icon inline-items">
										<svg class="olymp-speech-balloon-icon"><use xlink:href="/assets/svg-icons/sprites/icons.svg#olymp-speech-balloon-icon"></use></svg>
										<span>22</span>
									</a>
								</div>
					
							</div>
						</div>
					
					</article>
					
					<!-- ... end Post -->
				</div>
			</div>
			<div class="col col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
				<div class="ui-block">

					
					<!-- Post -->
					
					<article class="hentry blog-post">
					
						<div class="post-thumb">
							<img src="/assets/img/post4.jpg" alt="photo">
						</div>
					
						<div class="post-content">
							<a href="#" class="post-category bg-primary">OLYMPUS NEWS</a>
							<a href="#" class="h4 post-title">Here’s the Featured Urban photo of July!</a>
							<p>Here’s a photo from last month’s photoshoot. We got really awesome shots for the new catalog.</p>
					
							<div class="author-date">
								by
								<a class="h6 post__author-name fn" href="#">JACK SCORPIO</a>
								<div class="post__date">
									<time class="published" datetime="2017-03-24T18:18">
										- 20 days ago
									</time>
								</div>
							</div>
					
							<div class="post-additional-info inline-items">
					
								<ul class="friends-harmonic">
									<li>
										<a href="#">
											<img src="/assets/img/icon-chat3.png" alt="icon">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="/assets/img/icon-chat11.png" alt="icon">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="/assets/img/icon-chat20.png" alt="icon">
										</a>
									</li>
								</ul>
								<div class="names-people-likes">
									31
								</div>
					
								<div class="comments-shared">
									<a href="#" class="post-add-icon inline-items">
										<svg class="olymp-speech-balloon-icon"><use xlink:href="/assets/svg-icons/sprites/icons.svg#olymp-speech-balloon-icon"></use></svg>
										<span>35</span>
									</a>
								</div>
					
							</div>
						</div>
					
					</article>
					
					<!-- ... end Post -->
				</div>
			</div>
			<div class="col col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
				<div class="ui-block">

					
					<!-- Post -->
					
					<article class="hentry blog-post">
					
						<div class="post-thumb">
							<img src="/assets/img/post5.jpg" alt="photo">
						</div>
					
						<div class="post-content">
							<a href="#" class="post-category bg-blue-light">THE COMMUNITY</a>
							<a href="#" class="h4 post-title">Olympus’s family picnic was a success!</a>
							<p>Here’s a photo from last month’s photoshoot. We got really awesome shots for the new catalog.</p>
					
							<div class="author-date">
								by
								<a class="h6 post__author-name fn" href="#">Maddy Simmons</a>
								<div class="post__date">
									<time class="published" datetime="2017-03-24T18:18">
										-  1 MONTH ago
									</time>
								</div>
							</div>
					
							<div class="post-additional-info inline-items">
					
								<ul class="friends-harmonic">
									<li>
										<a href="#">
											<img src="/assets/img/icon-chat19.png" alt="icon">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="/assets/img/icon-chat13.png" alt="icon">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="/assets/img/icon-chat1.png" alt="icon">
										</a>
									</li>
								</ul>
								<div class="names-people-likes">
									67
								</div>
					
								<div class="comments-shared">
									<a href="#" class="post-add-icon inline-items">
										<svg class="olymp-speech-balloon-icon"><use xlink:href="/assets/svg-icons/sprites/icons.svg#olymp-speech-balloon-icon"></use></svg>
										<span>62</span>
									</a>
								</div>
					
							</div>
						</div>
					
					</article>
					
					<!-- ... end Post -->
				</div>
			</div>
			<div class="col col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
				<div class="ui-block">

					
					<!-- Post -->
					
					<article class="hentry blog-post">
					
						<div class="post-thumb">
							<img src="/assets/img/post6.jpg" alt="photo">
						</div>
					
						<div class="post-content">
							<a href="#" class="post-category bg-blue-light">THE COMMUNITY</a>
							<a href="#" class="h4 post-title">Olympians: Journal of my backpacking days</a>
							<p>Here’s a photo from last month’s photoshoot. We got really awesome shots for the new catalog.</p>
					
							<div class="author-date">
								by
								<a class="h6 post__author-name fn" href="#">JAMES SPIEGEL</a>
								<div class="post__date">
									<time class="published" datetime="2017-03-24T18:18">
										-  1 MONTH ago
									</time>
								</div>
							</div>
					
							<div class="post-additional-info inline-items">
					
								<ul class="friends-harmonic">
									<li>
										<a href="#">
											<img src="/assets/img/icon-chat20.png" alt="icon">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="/assets/img/icon-chat24.png" alt="icon">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="/assets/img/icon-chat10.png" alt="icon">
										</a>
									</li>
								</ul>
								<div class="names-people-likes">
									67
								</div>
					
								<div class="comments-shared">
									<a href="#" class="post-add-icon inline-items">
										<svg class="olymp-speech-balloon-icon"><use xlink:href="/assets/svg-icons/sprites/icons.svg#olymp-speech-balloon-icon"></use></svg>
										<span>53</span>
									</a>
								</div>
					
							</div>
						</div>
					
					</article>
					
					<!-- ... end Post -->
					

				</div>
			</div>
			<div class="col col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
				<div class="ui-block">

					
					<!-- Post -->
					
					<article class="hentry blog-post">
					
						<div class="post-thumb">
							<img src="/assets/img/post7.jpg" alt="photo">
						</div>
					
						<div class="post-content">
							<a href="#" class="post-category bg-blue-light">THE COMMUNITY</a>
							<a href="#" class="h4 post-title">Here are the best tattoos of our community</a>
							<p>Here’s a photo from last month’s photoshoot. We got really awesome shots for the new catalog.</p>
					
							<div class="author-date">
								by
								<a class="h6 post__author-name fn" href="#">JACK SCORPIO</a>
								<div class="post__date">
									<time class="published" datetime="2017-03-24T18:18">
										-  2 MONTHS ago
									</time>
								</div>
							</div>
					
							<div class="post-additional-info inline-items">
					
								<ul class="friends-harmonic">
									<li>
										<a href="#">
											<img src="/assets/img/icon-chat2.png" alt="icon">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="/assets/img/icon-chat4.png" alt="icon">
										</a>
									</li>
								</ul>
								<div class="names-people-likes">
									37
								</div>
					
								<div class="comments-shared">
									<a href="#" class="post-add-icon inline-items">
										<svg class="olymp-speech-balloon-icon"><use xlink:href="/assets/svg-icons/sprites/icons.svg#olymp-speech-balloon-icon"></use></svg>
										<span>62</span>
									</a>
								</div>
					
							</div>
						</div>
					
					</article>
					
					<!-- ... end Post -->
				</div>
			</div>
			<div class="col col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
				<div class="ui-block">

					
					<!-- Post -->
					
					<article class="hentry blog-post">
					
						<div class="post-thumb">
							<img src="/assets/img/post8.jpg" alt="photo">
						</div>
					
						<div class="post-content">
							<a href="#" class="post-category bg-purple">INSPIRATION</a>
							<a href="#" class="h4 post-title">Take a look to the coolest beaches of the world</a>
							<p>Here’s a photo from last month’s photoshoot. We got really awesome shots for the new catalog.</p>
					
							<div class="author-date">
								by
								<a class="h6 post__author-name fn" href="#">MADDY SIMMONS</a>
								<div class="post__date">
									<time class="published" datetime="2017-03-24T18:18">
										- 2 months ago
									</time>
								</div>
							</div>
					
							<div class="post-additional-info inline-items">
					
								<ul class="friends-harmonic">
									<li>
										<a href="#">
											<img src="/assets/img/icon-chat26.png" alt="icon">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="/assets/img/icon-chat25.png" alt="icon">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="/assets/img/icon-chat21.png" alt="icon">
										</a>
									</li>
								</ul>
								<div class="names-people-likes">
									104
								</div>
					
								<div class="comments-shared">
									<a href="#" class="post-add-icon inline-items">
										<svg class="olymp-speech-balloon-icon"><use xlink:href="/assets/svg-icons/sprites/icons.svg#olymp-speech-balloon-icon"></use></svg>
										<span>84</span>
									</a>
								</div>
					
							</div>
						</div>
					
					</article>
					
					<!-- ... end Post -->
				</div>
			</div>
			<div class="col col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
				<div class="ui-block">

					
					<!-- Post -->
					
					<article class="hentry blog-post">
					
						<div class="post-thumb">
							<img src="/assets/img/post9.jpg" alt="photo">
						</div>
					
						<div class="post-content">
							<a href="#" class="post-category bg-purple">INSPIRATION</a>
							<a href="#" class="h4 post-title">Check out this 10 yummy breakfast recipes</a>
							<p>Here’s a photo from last month’s photoshoot. We got really awesome shots for the new catalog.</p>
					
							<div class="author-date">
								by
								<a class="h6 post__author-name fn" href="#">MADDY SIMMONS</a>
								<div class="post__date">
									<time class="published" datetime="2017-03-24T18:18">
										- 3 months ago
									</time>
								</div>
							</div>
					
							<div class="post-additional-info inline-items">
					
								<ul class="friends-harmonic">
									<li>
										<a href="#">
											<img src="/assets/img/icon-chat15.png" alt="icon">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="/assets/img/icon-chat16.png" alt="icon">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="/assets/img/icon-chat17.png" alt="icon">
										</a>
									</li>
								</ul>
								<div class="names-people-likes">
									88
								</div>
					
								<div class="comments-shared">
									<a href="#" class="post-add-icon inline-items">
										<svg class="olymp-speech-balloon-icon"><use xlink:href="/assets/svg-icons/sprites/icons.svg#olymp-speech-balloon-icon"></use></svg>
										<span>39</span>
									</a>
								</div>
					
							</div>
						</div>
					
					</article>
					
					<!-- ... end Post -->
				</div>
			</div>
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