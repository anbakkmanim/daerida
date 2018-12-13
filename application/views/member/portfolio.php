
<?php $this->load->view('layout/header'); ?>
<?php $this->load->view('layout/nav'); ?>



<!-- Top Header-Profile -->

<div class="container">
	<div class="row">
		<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
			<div class="ui-block">
				<div class="top-header top-header-favorit">
					<div class="top-header-thumb">
						<img src="<?= site_url('assets/img/top-header2.jpg') ?>"  alt="nature">
						<div class="top-header-author">
							<div class="author-thumb">
								<img src= "/uploads/profile/<?= $userInfo->me_n_profile?>"  alt="author">
							</div>
							<div class="author-content">
								<a href="<?= site_url('#') ?>" value="" class="h3 author-name"><?=$userInfo->me_n_name?></a>
								<div class="country"><?=$userInfo->me_n_sido?>  |  <?=$userInfo->fi_l_name.'/'.$userInfo->fi_s_name?></div>
							</div>
						</div>
					</div>
					<div class="profile-section">
						<div class="row">
							<div class="col col-xl-8 m-auto col-lg-8 col-md-12">
								<ul class="profile-menu">
									<li>
										<a href="<?= site_url('member/User?me_n_idx='.$userInfo->me_n_idx.'') ?>" >정보</a>
									</li>
									<li>
										<a href="<?= site_url('13-FavouritePage-About.html') ?>"  class="active">포트폴리오</a>
									</li>
								</ul>
							</div>
						</div>

						
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="container">
	<div class="row">
		<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
			<!-- Tab panes -->
			<div class="tab-content">
				<div class="tab-pane" id="photo-page" role="tabpanel">

					<div class="photo-album-wrapper">
						<div class="photo-item half-width">
							<img src="<?= site_url('assets/img/photo-item1.jpg') ?>"  alt="photo">
							<div class="overlay overlay-dark"></div>
							<a href="<?= site_url('#') ?>"  class="more"><svg class="olymp-three-dots-icon"><use xlink:href="<?= site_url('assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>" ></use></svg></a>
							<a href="<?= site_url('#') ?>"  class="post-add-icon inline-items">
								<svg class="olymp-heart-icon"><use xlink:href="<?= site_url('assets/svg-icons/sprites/icons.svg#olymp-heart-icon') ?>" ></use></svg>
								<span>15</span>
							</a>
							<a href="<?= site_url('#') ?>"  data-toggle="modal" data-target="#open-photo-popup-v2" class="  full-block"></a>
							<div class="content">
								<a href="<?= site_url('#') ?>"  class="h6 title">Header Photos</a>
								<time class="published" datetime="2017-03-24T18:18">1 week ago</time>
							</div>
						</div>

						
						<div class="photo-item col-4-width">
							<img src="<?= site_url('assets/img/photo-item2.jpg') ?>"  alt="photo">
							<div class="overlay overlay-dark"></div>
							<a href="<?= site_url('#') ?>"  class="more"><svg class="olymp-three-dots-icon"><use xlink:href="<?= site_url('assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>" ></use></svg></a>
							<a href="<?= site_url('#') ?>"  class="post-add-icon inline-items">
								<svg class="olymp-heart-icon"><use xlink:href="<?= site_url('assets/svg-icons/sprites/icons.svg#olymp-heart-icon') ?>" ></use></svg>
								<span>15</span>
							</a>
							<a href="<?= site_url('#') ?>"  data-toggle="modal" data-target="#open-photo-popup-v2" class="  full-block"></a>
							<div class="content">
								<a href="<?= site_url('#') ?>"  class="h6 title">Header Photos</a>
								<time class="published" datetime="2017-03-24T18:18">1 week ago</time>
							</div>
						</div>

						
						<div class="photo-item col-4-width">
							<img src="<?= site_url('assets/img/photo-item3.jpg') ?>"  alt="photo">
							<div class="overlay overlay-dark"></div>
							<a href="<?= site_url('#') ?>"  class="more"><svg class="olymp-three-dots-icon"><use xlink:href="<?= site_url('assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>" ></use></svg></a>
							<a href="<?= site_url('#') ?>"  class="post-add-icon inline-items">
								<svg class="olymp-heart-icon"><use xlink:href="<?= site_url('assets/svg-icons/sprites/icons.svg#olymp-heart-icon') ?>" ></use></svg>
								<span>15</span>
							</a>
							<a href="<?= site_url('#') ?>"  data-toggle="modal" data-target="#open-photo-popup-v2" class="  full-block"></a>
							<div class="content">
								<a href="<?= site_url('#') ?>"  class="h6 title">Header Photos</a>
								<time class="published" datetime="2017-03-24T18:18">1 week ago</time>
							</div>
						</div>

						
						<div class="photo-item col-4-width">
							<img src="<?= site_url('assets/img/photo-item4.jpg') ?>"  alt="photo">
							<div class="overlay overlay-dark"></div>
							<a href="<?= site_url('#') ?>"  class="more"><svg class="olymp-three-dots-icon"><use xlink:href="<?= site_url('assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>" ></use></svg></a>
							<a href="<?= site_url('#') ?>"  class="post-add-icon inline-items">
								<svg class="olymp-heart-icon"><use xlink:href="<?= site_url('assets/svg-icons/sprites/icons.svg#olymp-heart-icon') ?>" ></use></svg>
								<span>15</span>
							</a>
							<a href="<?= site_url('#') ?>"  data-toggle="modal" data-target="#open-photo-popup-v2" class="  full-block"></a>
							<div class="content">
								<a href="<?= site_url('#') ?>"  class="h6 title">Header Photos</a>
								<time class="published" datetime="2017-03-24T18:18">1 week ago</time>
							</div>
						</div>

						
						<div class="photo-item col-4-width">
							<img src="<?= site_url('assets/img/photo-item5.jpg') ?>"  alt="photo">
							<div class="overlay overlay-dark"></div>
							<a href="<?= site_url('#') ?>"  class="more"><svg class="olymp-three-dots-icon"><use xlink:href="<?= site_url('assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>" ></use></svg></a>
							<a href="<?= site_url('#') ?>"  class="post-add-icon inline-items">
								<svg class="olymp-heart-icon"><use xlink:href="<?= site_url('assets/svg-icons/sprites/icons.svg#olymp-heart-icon') ?>" ></use></svg>
								<span>15</span>
							</a>
							<a href="<?= site_url('#') ?>"  data-toggle="modal" data-target="#open-photo-popup-v2" class="  full-block"></a>
							<div class="content">
								<a href="<?= site_url('#') ?>"  class="h6 title">Header Photos</a>
								<time class="published" datetime="2017-03-24T18:18">1 week ago</time>
							</div>
						</div>

						
						<div class="photo-item col-4-width">
							<img src="<?= site_url('assets/img/photo-item6.jpg') ?>"  alt="photo">
							<div class="overlay overlay-dark"></div>
							<a href="<?= site_url('#') ?>"  class="more"><svg class="olymp-three-dots-icon"><use xlink:href="<?= site_url('assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>" ></use></svg></a>
							<a href="<?= site_url('#') ?>"  class="post-add-icon inline-items">
								<svg class="olymp-heart-icon"><use xlink:href="<?= site_url('assets/svg-icons/sprites/icons.svg#olymp-heart-icon') ?>" ></use></svg>
								<span>15</span>
							</a>
							<a href="<?= site_url('#') ?>"  data-toggle="modal" data-target="#open-photo-popup-v2" class="  full-block"></a>
							<div class="content">
								<a href="<?= site_url('#') ?>"  class="h6 title">Header Photos</a>
								<time class="published" datetime="2017-03-24T18:18">1 week ago</time>
							</div>
						</div>

						
						<div class="photo-item col-4-width">
							<img src="<?= site_url('assets/img/photo-item7.jpg') ?>"  alt="photo">
							<div class="overlay overlay-dark"></div>
							<a href="<?= site_url('#') ?>"  class="more"><svg class="olymp-three-dots-icon"><use xlink:href="<?= site_url('assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>" ></use></svg></a>
							<a href="<?= site_url('#') ?>"  class="post-add-icon inline-items">
								<svg class="olymp-heart-icon"><use xlink:href="<?= site_url('assets/svg-icons/sprites/icons.svg#olymp-heart-icon') ?>" ></use></svg>
								<span>15</span>
							</a>
							<a href="<?= site_url('#') ?>"  data-toggle="modal" data-target="#open-photo-popup-v2" class="  full-block"></a>
							<div class="content">
								<a href="<?= site_url('#') ?>"  class="h6 title">Header Photos</a>
								<time class="published" datetime="2017-03-24T18:18">1 week ago</time>
							</div>
						</div>

						
						<div class="photo-item col-4-width">
							<img src="<?= site_url('assets/img/photo-item8.jpg') ?>"  alt="photo">
							<div class="overlay overlay-dark"></div>
							<a href="<?= site_url('#') ?>"  class="more"><svg class="olymp-three-dots-icon"><use xlink:href="<?= site_url('assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>" ></use></svg></a>
							<a href="<?= site_url('#') ?>"  class="post-add-icon inline-items">
								<svg class="olymp-heart-icon"><use xlink:href="<?= site_url('assets/svg-icons/sprites/icons.svg#olymp-heart-icon') ?>" ></use></svg>
								<span>15</span>
							</a>
							<a href="<?= site_url('#') ?>"  data-toggle="modal" data-target="#open-photo-popup-v2" class="  full-block"></a>
							<div class="content">
								<a href="<?= site_url('#') ?>"  class="h6 title">Header Photos</a>
								<time class="published" datetime="2017-03-24T18:18">1 week ago</time>
							</div>
						</div>

						
						<div class="photo-item col-4-width">
							<img src="<?= site_url('assets/img/photo-item9.jpg') ?>"  alt="photo">
							<div class="overlay overlay-dark"></div>
							<a href="<?= site_url('#') ?>"  class="more"><svg class="olymp-three-dots-icon"><use xlink:href="<?= site_url('assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>" ></use></svg></a>
							<a href="<?= site_url('#') ?>"  class="post-add-icon inline-items">
								<svg class="olymp-heart-icon"><use xlink:href="<?= site_url('assets/svg-icons/sprites/icons.svg#olymp-heart-icon') ?>" ></use></svg>
								<span>15</span>
							</a>
							<a href="<?= site_url('#') ?>"  data-toggle="modal" data-target="#open-photo-popup-v2" class="  full-block"></a>
							<div class="content">
								<a href="<?= site_url('#') ?>"  class="h6 title">Header Photos</a>
								<time class="published" datetime="2017-03-24T18:18">1 week ago</time>
							</div>
						</div>

						
						<div class="photo-item col-4-width">
							<img src="<?= site_url('assets/img/photo-item10.jpg') ?>"  alt="photo">
							<div class="overlay overlay-dark"></div>
							<a href="<?= site_url('#') ?>"  class="more"><svg class="olymp-three-dots-icon"><use xlink:href="<?= site_url('assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>" ></use></svg></a>
							<a href="<?= site_url('#') ?>"  class="post-add-icon inline-items">
								<svg class="olymp-heart-icon"><use xlink:href="<?= site_url('assets/svg-icons/sprites/icons.svg#olymp-heart-icon') ?>" ></use></svg>
								<span>15</span>
							</a>
							<a href="<?= site_url('#') ?>"  data-toggle="modal" data-target="#open-photo-popup-v2" class="  full-block"></a>
							<div class="content">
								<a href="<?= site_url('#') ?>"  class="h6 title">Header Photos</a>
								<time class="published" datetime="2017-03-24T18:18">1 week ago</time>
							</div>
						</div>

						
						<div class="photo-item col-4-width">
							<img src="<?= site_url('assets/img/photo-item11.jpg') ?>"  alt="photo">
							<div class="overlay overlay-dark"></div>
							<a href="<?= site_url('#') ?>"  class="more"><svg class="olymp-three-dots-icon"><use xlink:href="<?= site_url('assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>" ></use></svg></a>
							<a href="<?= site_url('#') ?>"  class="post-add-icon inline-items">
								<svg class="olymp-heart-icon"><use xlink:href="<?= site_url('assets/svg-icons/sprites/icons.svg#olymp-heart-icon') ?>" ></use></svg>
								<span>15</span>
							</a>
							<a href="<?= site_url('#') ?>"  data-toggle="modal" data-target="#open-photo-popup-v2" class="  full-block"></a>
							<div class="content">
								<a href="<?= site_url('#') ?>"  class="h6 title">Header Photos</a>
								<time class="published" datetime="2017-03-24T18:18">1 week ago</time>
							</div>
						</div>
						

						<a href="<?= site_url('#') ?>"  class="btn btn-control btn-more"><svg class="olymp-three-dots-icon"><use xlink:href="<?= site_url('assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>" ></use></svg></a>

					</div>

				</div>

				<div class="tab-pane active" id="album-page" role="tabpanel">

					<div class="photo-album-wrapper">

						<div class="photo-album-item-wrap col-4-width" >
							
							<div class="photo-album-item create-album" data-mh="album-item">
							
								<a href="<?= site_url('#') ?>"  data-toggle="modal" data-target="#create-photo-album" class="  full-block"></a>
							
								<div class="content">
							
									<a href="<?= site_url('#') ?>"  class="btn btn-control bg-primary" data-toggle="modal" data-target="#create-photo-album">
										<svg class="olymp-plus-icon"><use xlink:href="<?= site_url('../svg-icons/sprites/icons.svg#olymp-plus-icon') ?>" ></use></svg>
									</a>
							
									<a href="<?= site_url('#') ?>"  class="title h5" data-toggle="modal" data-target="#create-photo-album">포트폴리오 추가</a>
									<!-- <span class="sub-title">It only takes a few minutes!</span> -->
							
								</div>
							
							</div>
						</div>
						<script>
							function getinfo(index){
								$.ajax({
									type:"get",
									url:"/member/getportfolio?ca_idx="+index,
									success (data){
										data = JSON.parse(data);
										console.log(data)
										$("#port_title").text(data[0].ca_career);
										$("#ca_idx").val(data[0].ca_idx);
										$("#port_info").val(data[0].ca_info);
										$("#port_file").html(data[0].ca_image);
										$("#port_file").attr('href','/uploads/profile/'+data[0].ca_image);
									}
								})
							}
						</script>
						<?php
							foreach($career as $row){
								$a = "<div class='photo-album-item-wrap col-4-width'>
												<div class='photo-album-item' data-mh='album-item'>
													<div class='photo-item'>
														<img src='/assets/img/photo-item2.jpg' alt='photo'>
														<div class='overlay overlay-dark'></div>
														<a href='#' data-toggle='modal' data-target='#open-photo-popup-v2' onclick='getinfo(".$row->ca_idx.")' class='full-block'></a>
													</div>
												
													<div class='content'>
														<a href='#'  class='title h5'>".$row->ca_career."</a>
														<span class='sub-title'>".$row->ca_info."</span>
												
														<div class='swiper-container'>
															<div class='swiper-wrapper'></div>
															<div class='swiper-pagination'></div>
														</div>
													</div>
												</div>
											</div>";
											echo $a;
							}
						?>
						
					</div>
				</div>
			</div>
		</div>
	</div>
</div>




<!-- Window-popup Open Photo Popup V1 -->

<div class="modal fade" id="open-photo-popup-v1" tabindex="-1" role="dialog" aria-labelledby="open-photo-popup-v1" aria-hidden="true">
	<div class="modal-dialog window-popup open-photo-popup open-photo-popup-v1" role="document">
		<div class="modal-content">
			<a href="<?= site_url('#') ?>"  class="close icon-close" data-dismiss="modal" aria-label="Close">
				<svg class="olymp-close-icon"><use xlink:href="<?= site_url('assets/svg-icons/sprites/icons.svg#olymp-close-icon') ?>" ></use></svg>
			</a>

			<div class="modal-body">
				<div class="open-photo-thumb">
					<div class="swiper-container" data-slide="fade">
						<div class="swiper-wrapper">

							<div class="swiper-slide"></div>
								<div class="photo-item">
									<img src="<?= site_url('assets/img/open-photo2.jpg') ?>"  alt="photo">
									<div class="overlay"></div>
									<a href="<?= site_url('#') ?>"  class="more"><svg class="olymp-three-dots-icon"><use xlink:href="<?= site_url('assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>" ></use></svg></a>
									<a href="<?= site_url('#') ?>"  class="tag-friends" data-toggle="tooltip" data-placement="top"   data-original-title="TAG YOUR FRIENDS">
										<svg class="olymp-happy-face-icon"><use xlink:href="<?= site_url('assets/svg-icons/sprites/icons.svg#olymp-happy-face-icon') ?>" ></use></svg>
									</a>

									<div class="content">
										<a href="<?= site_url('#') ?>"  class="h6 title">Photoshoot 2016</a>
										<time class="published" datetime="2017-03-24T18:18">2 weeks ago</time>
									</div>
								</div>
							</div>

							<div class="swiper-slide">
								<div class="photo-item">
									<img src="<?= site_url('assets/img/open-photo2.jpg') ?>"  alt="photo">
									<div class="overlay"></div>
									<a href="<?= site_url('#') ?>"  class="more"><svg class="olymp-three-dots-icon"><use xlink:href="<?= site_url('assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>" ></use></svg></a>
									<a href="<?= site_url('#') ?>"  class="tag-friends" data-toggle="tooltip" data-placement="top"   data-original-title="TAG YOUR FRIENDS">
										<svg class="olymp-happy-face-icon"><use xlink:href="<?= site_url('assets/svg-icons/sprites/icons.svg#olymp-happy-face-icon') ?>" ></use></svg>
									</a>

									<div class="content">
										<a href="<?= site_url('#') ?>"  class="h6 title">Photoshoot 2016</a>
										<time class="published" datetime="2017-03-24T18:18">2 weeks ago</time>
									</div>
								</div>
							</div>

							<div class="swiper-slide">
								<div class="photo-item">
									<img src="<?= site_url('assets/img/open-photo2.jpg') ?>"  alt="photo">
									<div class="overlay"></div>
									<a href="<?= site_url('#') ?>"  class="more"><svg class="olymp-three-dots-icon"><use xlink:href="<?= site_url('assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>" ></use></svg></a>
									<a href="<?= site_url('#') ?>"  class="tag-friends" data-toggle="tooltip" data-placement="top"   data-original-title="TAG YOUR FRIENDS">
										<svg class="olymp-happy-face-icon"><use xlink:href="<?= site_url('assets/svg-icons/sprites/icons.svg#olymp-happy-face-icon') ?>" ></use></svg>
									</a>

									<div class="content">
										<a href="<?= site_url('#') ?>"  class="h6 title">Photoshoot 2016</a>
										<time class="published" datetime="2017-03-24T18:18">2 weeks ago</time>
									</div>
								</div>
							</div>

						</div>

						<!--Prev Next Arrows-->

						<svg class="btn-next-without olymp-popup-right-arrow"><use xlink:href="<?= site_url('assets/svg-icons/sprites/icons.svg#olymp-popup-right-arrow') ?>" ></use></svg>

						<svg class="btn-prev-without olymp-popup-left-arrow"><use xlink:href="<?= site_url('assets/svg-icons/sprites/icons.svg#olymp-popup-left-arrow') ?>" ></use></svg>
					</div>
				</div>

				<div class="open-photo-content">

					<article class="hentry post">

						<div class="post__author author vcard inline-items">
							<img src="<?= site_url('assets/img/author-page.jpg') ?>"  alt="author">

							<div class="author-date">
								<a class="h6 post__author-name fn" href="<?= site_url('02-ProfilePage.html') ?>" >James Spiegel</a>
								<div class="post__date">
									<time class="published" datetime="2017-03-24T18:18">
										2 hours ago
									</time>
								</div>
							</div>

							<div class="more"><svg class="olymp-three-dots-icon"><use xlink:href="<?= site_url('assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>" ></use></svg>
								<ul class="more-dropdown">
									<li>
										<a href="<?= site_url('#') ?>" >Edit Post</a>
									</li>
									<li>
										<a href="<?= site_url('#') ?>" >Delete Post</a>
									</li>
									<li>
										<a href="<?= site_url('#') ?>" >Turn Off Notifications</a>
									</li>
									<li>
										<a href="<?= site_url('#') ?>" >Select as Featured</a>
									</li>
								</ul>
							</div>

						</div>

						<p>Here’s a photo from last month’s photoshoot. We really had a great time and got a batch of incredible shots for the new catalog.</p>

						<p>With: <a href="<?= site_url('#') ?>" >Jessy Owen</a>, <a href="<?= site_url('#') ?>" >Marina Valentine</a></p>

						<div class="post-additional-info inline-items">

							<a href="<?= site_url('#') ?>"  class="post-add-icon inline-items">
								<svg class="olymp-heart-icon"><use xlink:href="<?= site_url('assets/svg-icons/sprites/icons.svg#olymp-heart-icon') ?>" ></use></svg>
								<span>148</span>
							</a>

							<ul class="friends-harmonic">
								<li>
									<a href="<?= site_url('#') ?>" >
										<img src="<?= site_url('assets/img/friend-harmonic7.jpg') ?>"  alt="friend">
									</a>
								</li>
								<li>
									<a href="<?= site_url('#') ?>" >
										<img src="<?= site_url('assets/img/friend-harmonic8.jpg') ?>"  alt="friend">
									</a>
								</li>
								<li>
									<a href="<?= site_url('#') ?>" >
										<img src="<?= site_url('assets/img/friend-harmonic9.jpg') ?>"  alt="friend">
									</a>
								</li>
								<li>
									<a href="<?= site_url('#') ?>" >
										<img src="<?= site_url('assets/img/friend-harmonic10.jpg') ?>"  alt="friend">
									</a>
								</li>
								<li>
									<a href="<?= site_url('#') ?>" >
										<img src="<?= site_url('assets/img/friend-harmonic11.jpg') ?>"  alt="friend">
									</a>
								</li>
							</ul>

							<div class="names-people-likes">
								<a href="<?= site_url('#') ?>" >Diana</a>, <a href="<?= site_url('#') ?>" >Nicholas</a> and
								<br>13 more liked this
							</div>


							<div class="comments-shared">
								<a href="<?= site_url('#') ?>"  class="post-add-icon inline-items">
									<svg class="olymp-speech-balloon-icon"><use xlink:href="<?= site_url('assets/svg-icons/sprites/icons.svg#olymp-speech-balloon-icon') ?>" ></use></svg>
									<span>61</span>
								</a>

								<a href="<?= site_url('#') ?>"  class="post-add-icon inline-items">
									<svg class="olymp-share-icon"><use xlink:href="<?= site_url('assets/svg-icons/sprites/icons.svg#olymp-share-icon') ?>" ></use></svg>
									<span>32</span>
								</a>
							</div>


						</div>

						<!-- <div class="control-block-button post-control-button">

							<a href="<?= site_url('#') ?>"  class="btn btn-control">
								<svg class="olymp-like-post-icon"><use xlink:href="<?= site_url('assets/svg-icons/sprites/icons.svg#olymp-like-post-icon') ?>" ></use></svg>
							</a>

							<a href="<?= site_url('#') ?>"  class="btn btn-control">
								<svg class="olymp-comments-post-icon"><use xlink:href="<?= site_url('assets/svg-icons/sprites/icons.svg#olymp-comments-post-icon') ?>" ></use></svg>
							</a>

							<a href="<?= site_url('#') ?>"  class="btn btn-control">
								<svg class="olymp-share-icon"><use xlink:href="<?= site_url('assets/svg-icons/sprites/icons.svg#olymp-share-icon') ?>" ></use></svg>
							</a>

						</div> -->

					</article>

					<div class="mCustomScrollbar" data-mcs-theme="dark">

						<ul class="comments-list">
							<li class="comment-item">
								<div class="post__author author vcard inline-items">
									<img src="<?= site_url('assets/img/avatar48-sm.jpg') ?>"  alt="author">

									<div class="author-date">
										<a class="h6 post__author-name fn" href="<?= site_url('#') ?>" >Marina Valentine</a>
										<div class="post__date">
											<time class="published" datetime="2017-03-24T18:18">
												46 mins ago
											</time>
										</div>
									</div>

									<a href="<?= site_url('#') ?>"  class="more"><svg class="olymp-three-dots-icon"><use xlink:href="<?= site_url('assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>" ></use></svg></a>

								</div>

								<p>I had a great time too!! We should do it again!</p>

								<a href="<?= site_url('#') ?>"  class="post-add-icon inline-items">
									<svg class="olymp-heart-icon"><use xlink:href="<?= site_url('assets/svg-icons/sprites/icons.svg#olymp-heart-icon') ?>" ></use></svg>
									<span>8</span>
								</a>
								<a href="<?= site_url('#') ?>"  class="reply">Reply</a>
							</li>

							<li class="comment-item">
								<div class="post__author author vcard inline-items">
									<img src="<?= site_url('assets/img/avatar4-sm.jpg') ?>"  alt="author">

									<div class="author-date">
										<a class="h6 post__author-name fn" href="<?= site_url('#') ?>" >Chris Greyson</a>
										<div class="post__date">
											<time class="published" datetime="2017-03-24T18:18">
												1 hour ago
											</time>
										</div>
									</div>

									<a href="<?= site_url('#') ?>"  class="more"><svg class="olymp-three-dots-icon"><use xlink:href="<?= site_url('assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>" ></use></svg></a>

								</div>

								<p>Dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit.</p>

								<a href="<?= site_url('#') ?>"  class="post-add-icon inline-items">
									<svg class="olymp-heart-icon"><use xlink:href="<?= site_url('assets/svg-icons/sprites/icons.svg#olymp-heart-icon') ?>" ></use></svg>
									<span>7</span>
								</a>
								<a href="<?= site_url('#') ?>"  class="reply">Reply</a>

							</li>
						</ul>

					</div>

					<form class="comment-form inline-items">

						<div class="post__author author vcard inline-items">
							<img src="<?= site_url('assets/img/author-page.jpg') ?>"  alt="author">

							<div class="form-group with-icon-right ">
								<textarea class="form-control" placeholder="Press Enter to post..."></textarea>
								<div class="add-options-message">
									<a href="<?= site_url('#') ?>"  class="options-message">
										<svg class="olymp-camera-icon"><use xlink:href="<?= site_url('assets/svg-icons/sprites/icons.svg#olymp-camera-icon') ?>" ></use></svg>
									</a>
								</div>
							</div>
						</div>

					</form>

				</div>
			</div>
		</div>
	</div>
</div>

<!-- ... end Window-popup Open Photo Popup V1 -->

<!-- Window-popup Open Photo Popup V2 -->

<div class="modal fade" id="open-photo-popup-v2" tabindex="-1" role="dialog" aria-labelledby="open-photo-popup-v2" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered window-popup create-photo-album" role="document">
			<div class="modal-content">
				<a href="<?= site_url('#') ?>"  class="close icon-close" data-dismiss="modal" aria-label="Close">
					<svg class="olymp-close-icon"><use xlink:href="<?= site_url('assets/svg-icons/sprites/icons.svg#olymp-close-icon') ?>" ></use></svg>
				</a>
	
				<div class="modal-header">
					<h6 class="title" id="port_title">포트폴리오 제목</h6>
				</div>
	
				<div class="modal-body pr-0">
				<form action="/member/delportfolio" method="post" enctype="multipart/form-data">
					<input type="hidden" name="ca_idx" id ="ca_idx">
					<input type="hidden" name="me_n_idx" value="<?=$me_n_idx?>">
						<div class="col">
							<fieldset disabled="">
									<div class="form-group has-disabled is-empty mr-3">
										<input type="text" class="form-control" id="port_info" placeholder="간단한 소개">
									<span class="material-input"></span></div>
								</fieldset>
						</div>

						<div class="col">
							<fieldset disabled="">
									<div class="form-group has-disabled is-empty mr-3">
										<a id="port_file" href="<?= site_url('#') ?>" class="form-control">포트폴리오 파일</a>
									<span class="material-input"></span></div>
								</fieldset>
						</div>
					<div class="col">
					
					<input type="button"  class="btn btn-primary btn-lg btn--half-width  m-0 mb-2" value="확인">
					<input type="submit"  class="btn btn-primary btn-lg btn--half-width  m-0 ml-2 mb-2" value="삭제">
					</div>
				</form>
				</div>
			</div>
		</div>
	</div>



<!-- Window-popup Open Photo Popup V2 -->
<!-- Window-popup Create Photo Album -->

<div class="modal fade" id="create-photo-album" tabindex="-1" role="dialog" aria-labelledby="create-photo-album" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered window-popup create-photo-album" role="document">
		<div class="modal-content">
			<a href="<?= site_url('#') ?>"  class="close icon-close" data-dismiss="modal" aria-label="Close">
				<svg class="olymp-close-icon"><use xlink:href="<?= site_url('assets/svg-icons/sprites/icons.svg#olymp-close-icon') ?>" ></use></svg>
			</a>

			<div class="modal-header">
				<h6 class="title">포트폴리오 추가</h6>
			</div>

			<div class="modal-body">
				<form action="/member/addcareer" method="post" enctype="multipart/form-data">
					<input type="hidden" name="ca_type" value="portfolio">
					<input type="hidden" name="me_n_idx" value="<?=$me_n_idx?>">
					<div class="col">
						<div class="form-group label-floating">
							<label class="control-label">포트폴리오 제목</label>
							<input class="form-control" name="ca_career" type="text">
						</div>
					</div>
					<div class="col">
						<div class="form-group label-floating">
								<label class="control-label">간단한 소개</label>
								<input class="form-control" name="ca_info" type="text">
						</div>
					</div>

					<div class="col">
						<div class="form-group label-floating">
							<label for="exampleFormControlFile1" class="ml-2">포트폴리오 파일</label>
							<input type="file" class="form-control-file pt-3 pb-3" id="exampleFormControlFile1" name="ca_image">
						</div>
					</div>

					<div class="col">
						<input type="submit"  class="btn btn-primary btn-lg btn--half-width  m-0  ml-4 mb-2" value="등록">
						<input type="button"  class="btn btn-primary btn-lg btn--half-width  m-0 mb-2" value="취소">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<!-- ... end Window-popup Create Photo Album -->
<!-- Window-popup Update Header Photo -->

<div class="modal fade" id="update-header-photo" tabindex="-1" role="dialog" aria-labelledby="update-header-photo" aria-hidden="true">
	<div class="modal-dialog window-popup update-header-photo" role="document">
		<div class="modal-content">
			<a href="<?= site_url('#') ?>"  class="close icon-close" data-dismiss="modal" aria-label="Close">
				<svg class="olymp-close-icon"><use xlink:href="<?= site_url('assets/svg-icons/sprites/icons.svg#olymp-close-icon') ?>" ></use></svg>
			</a>

			<div class="modal-header">
				<h6 class="title">Update Header Photo</h6>
			</div>

			<div class="modal-body">
				<a href="<?= site_url('#') ?>"  class="upload-photo-item">
				<svg class="olymp-computer-icon"><use xlink:href="<?= site_url('assets/svg-icons/sprites/icons.svg#olymp-computer-icon') ?>" ></use></svg>

				<h6>Upload Photo</h6>
				<span>Browse your computer.</span>
			</a>

				<a href="<?= site_url('#') ?>"  class="upload-photo-item" data-toggle="modal" data-target="#choose-from-my-photo">

			<svg class="olymp-photos-icon"><use xlink:href="<?= site_url('assets/svg-icons/sprites/icons.svg#olymp-photos-icon') ?>" ></use></svg>

			<h6>Choose from My Photos</h6>
			<span>Choose from your uploaded photos</span>
		</a>
			</div>
		</div>
	</div>
</div>


<!-- ... end Window-popup Update Header Photo -->

<!-- Window-popup Choose from my Photo -->

<div class="modal fade" id="choose-from-my-photo" tabindex="-1" role="dialog" aria-labelledby="choose-from-my-photo" aria-hidden="true">
	<div class="modal-dialog window-popup choose-from-my-photo" role="document">

		<div class="modal-content">
			<a href="<?= site_url('#') ?>"  class="close icon-close" data-dismiss="modal" aria-label="Close">
				<svg class="olymp-close-icon"><use xlink:href="<?= site_url('assets/svg-icons/sprites/icons.svg#olymp-close-icon') ?>" ></use></svg>
			</a>
			<div class="modal-header">
				<h6 class="title">Choose from My Photos</h6>

				<!-- Nav tabs -->
				<ul class="nav nav-tabs" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" data-toggle="tab" href="<?= site_url('#home') ?>"  role="tab" aria-expanded="true">
							<svg class="olymp-photos-icon"><use xlink:href="<?= site_url('assets/svg-icons/sprites/icons.svg#olymp-photos-icon') ?>" ></use></svg>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="<?= site_url('#profile') ?>"  role="tab" aria-expanded="false">
							<svg class="olymp-albums-icon"><use xlink:href="<?= site_url('assets/svg-icons/sprites/icons.svg#olymp-albums-icon') ?>" ></use></svg>
						</a>
					</li>
				</ul>
			</div>

			<div class="modal-body">
				<!-- Tab panes -->
				<div class="tab-content">
					<div class="tab-pane active" id="home" role="tabpanel" aria-expanded="true">

						<div class="choose-photo-item" data-mh="choose-item">
							<div class="radio">
								<label class="custom-radio">
									<img src="<?= site_url('assets/img/choose-photo1.jpg') ?>"  alt="photo">
									<input type="radio" name="optionsRadios">
								</label>
							</div>
						</div>
						<div class="choose-photo-item" data-mh="choose-item">
							<div class="radio">
								<label class="custom-radio">
									<img src="<?= site_url('assets/img/choose-photo2.jpg') ?>"  alt="photo">
									<input type="radio" name="optionsRadios">
								</label>
							</div>
						</div>
						<div class="choose-photo-item" data-mh="choose-item">
							<div class="radio">
								<label class="custom-radio">
									<img src="<?= site_url('assets/img/choose-photo3.jpg') ?>"  alt="photo">
									<input type="radio" name="optionsRadios">
								</label>
							</div>
						</div>

						<div class="choose-photo-item" data-mh="choose-item">
							<div class="radio">
								<label class="custom-radio">
									<img src="<?= site_url('assets/img/choose-photo4.jpg') ?>"  alt="photo">
									<input type="radio" name="optionsRadios">
								</label>
							</div>
						</div>
						<div class="choose-photo-item" data-mh="choose-item">
							<div class="radio">
								<label class="custom-radio">
									<img src="<?= site_url('assets/img/choose-photo5.jpg') ?>"  alt="photo">
									<input type="radio" name="optionsRadios">
								</label>
							</div>
						</div>
						<div class="choose-photo-item" data-mh="choose-item">
							<div class="radio">
								<label class="custom-radio">
									<img src="<?= site_url('assets/img/choose-photo6.jpg') ?>"  alt="photo">
									<input type="radio" name="optionsRadios">
								</label>
							</div>
						</div>

						<div class="choose-photo-item" data-mh="choose-item">
							<div class="radio">
								<label class="custom-radio">
									<img src="<?= site_url('assets/img/choose-photo7.jpg') ?>"  alt="photo">
									<input type="radio" name="optionsRadios">
								</label>
							</div>
						</div>
						<div class="choose-photo-item" data-mh="choose-item">
							<div class="radio">
								<label class="custom-radio">
									<img src="<?= site_url('assets/img/choose-photo8.jpg') ?>"  alt="photo">
									<input type="radio" name="optionsRadios">
								</label>
							</div>
						</div>
						<div class="choose-photo-item" data-mh="choose-item">
							<div class="radio">
								<label class="custom-radio">
									<img src="<?= site_url('assets/img/choose-photo9.jpg') ?>"  alt="photo">
									<input type="radio" name="optionsRadios">
								</label>
							</div>
						</div>


						<a href="<?= site_url('#') ?>"  class="btn btn-secondary btn-lg btn--half-width">Cancel</a>
						<a href="<?= site_url('#') ?>"  class="btn btn-primary btn-lg btn--half-width">Confirm Photo</a>

					</div>
					<div class="tab-pane" id="profile" role="tabpanel" aria-expanded="false">

						<div class="choose-photo-item" data-mh="choose-item">
							<figure>
								<img src="<?= site_url('assets/img/choose-photo10.jpg') ?>"  alt="photo">
								<figcaption>
									<a href="<?= site_url('#') ?>" >South America Vacations</a>
									<span>Last Added: 2 hours ago</span>
								</figcaption>
							</figure>
						</div>
						<div class="choose-photo-item" data-mh="choose-item">
							<figure>
								<img src="<?= site_url('assets/img/choose-photo11.jpg') ?>"  alt="photo">
								<figcaption>
									<a href="<?= site_url('#') ?>" >Photoshoot Summer 2016</a>
									<span>Last Added: 5 weeks ago</span>
								</figcaption>
							</figure>
						</div>
						<div class="choose-photo-item" data-mh="choose-item">
							<figure>
								<img src="<?= site_url('assets/img/choose-photo12.jpg') ?>"  alt="photo">
								<figcaption>
									<a href="<?= site_url('#') ?>" >Amazing Street Food</a>
									<span>Last Added: 6 mins ago</span>
								</figcaption>
							</figure>
						</div>

						<div class="choose-photo-item" data-mh="choose-item">
							<figure>
								<img src="<?= site_url('assets/img/choose-photo13.jpg') ?>"  alt="photo">
								<figcaption>
									<a href="<?= site_url('#') ?>" >Graffity & Street Art</a>
									<span>Last Added: 16 hours ago</span>
								</figcaption>
							</figure>
						</div>
						<div class="choose-photo-item" data-mh="choose-item">
							<figure>
								<img src="<?= site_url('assets/img/choose-photo14.jpg') ?>"  alt="photo">
								<figcaption>
									<a href="<?= site_url('#') ?>" >Amazing Landscapes</a>
									<span>Last Added: 13 mins ago</span>
								</figcaption>
							</figure>
						</div>
						<div class="choose-photo-item" data-mh="choose-item">
							<figure>
								<img src="<?= site_url('assets/img/choose-photo15.jpg') ?>"  alt="photo">
								<figcaption>
									<a href="<?= site_url('#') ?>" >The Majestic Canyon</a>
									<span>Last Added: 57 mins ago</span>
								</figcaption>
							</figure>
						</div>


						<a href="<?= site_url('#') ?>"  class="btn btn-secondary btn-lg btn--half-width">Cancel</a>
						<a href="<?= site_url('#') ?>"  class="btn btn-primary btn-lg disabled btn--half-width">Confirm Photo</a>
					</div>
				</div>
			</div>
		</div>

	</div>
</div>

<!-- ... end Window-popup Choose from my Photo -->


<a class="back-to-top" href="<?= site_url('#') ?>" >
	<img src="<?= site_url('assets/svg-icons/back-to-top.svg') ?>"  alt="arrow" class="back-icon">
</a>




<!-- Window-popup-CHAT for responsive min-width: 768px -->

<div class="ui-block popup-chat popup-chat-responsive" tabindex="-1" role="dialog" aria-labelledby="update-header-photo" aria-hidden="true">

	<div class="modal-content">
		<div class="modal-header">
			<span class="icon-status online"></span>
			<h6 class="title" >Chat</h6>
			<div class="more">
				<svg class="olymp-three-dots-icon"><use xlink:href="<?= site_url('assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon') ?>" ></use></svg>
				<svg class="olymp-little-delete js-chat-open"><use xlink:href="<?= site_url('assets/svg-icons/sprites/icons.svg#olymp-little-delete') ?>" ></use></svg>
			</div>
		</div>
		<div class="modal-body">
			<div class="mCustomScrollbar">
				<ul class="notification-list chat-message chat-message-field">
					<li>
						<div class="author-thumb">
							<img src="<?= site_url('assets/img/avatar14-sm.jpg') ?>"  alt="author" class="mCS_img_loaded">
						</div>
						<div class="notification-event">
							<span class="chat-message-item">Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks</span>
							<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 8:10pm</time></span>
						</div>
					</li>

					<li>
						<div class="author-thumb">
							<img src="<?= site_url('assets/img/author-page.jpg') ?>"  alt="author" class="mCS_img_loaded">
						</div>
						<div class="notification-event">
							<span class="chat-message-item">Don’t worry Mathilda!</span>
							<span class="chat-message-item">I already bought everything</span>
							<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 8:29pm</time></span>
						</div>
					</li>

					<li>
						<div class="author-thumb">
							<img src="<?= site_url('assets/img/avatar14-sm.jpg') ?>"  alt="author" class="mCS_img_loaded">
						</div>
						<div class="notification-event">
							<span class="chat-message-item">Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks</span>
							<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 8:10pm</time></span>
						</div>
					</li>
				</ul>
			</div>

			<form class="need-validation">

		<div class="form-group label-floating is-empty">
			<label class="control-label">Press enter to post...</label>
			<textarea class="form-control" placeholder=""></textarea>
			<div class="add-options-message">
				<a href="<?= site_url('#') ?>"  class="options-message">
					<svg class="olymp-computer-icon"><use xlink:href="<?= site_url('assets/svg-icons/sprites/icons.svg#olymp-computer-icon') ?>" ></use></svg>
				</a>
				<div class="options-message smile-block">

					<svg class="olymp-happy-sticker-icon"><use xlink:href="<?= site_url('assets/svg-icons/sprites/icons.svg#olymp-happy-sticker-icon') ?>" ></use></svg>

					<ul class="more-dropdown more-with-triangle triangle-bottom-right">
						<li>
							<a href="<?= site_url('#') ?>" >
								<img src="<?= site_url('assets/img/icon-chat1.png') ?>"  alt="icon">
							</a>
						</li>
						<li>
							<a href="<?= site_url('#') ?>" >
								<img src="<?= site_url('assets/img/icon-chat2.png') ?>"  alt="icon">
							</a>
						</li>
						<li>
							<a href="<?= site_url('#') ?>" >
								<img src="<?= site_url('assets/img/icon-chat3.png') ?>"  alt="icon">
							</a>
						</li>
						<li>
							<a href="<?= site_url('#') ?>" >
								<img src="<?= site_url('assets/img/icon-chat4.png') ?>"  alt="icon">
							</a>
						</li>
						<li>
							<a href="<?= site_url('#') ?>" >
								<img src="<?= site_url('assets/img/icon-chat5.png') ?>"  alt="icon">
							</a>
						</li>
						<li>
							<a href="<?= site_url('#') ?>" >
								<img src="<?= site_url('assets/img/icon-chat6.png') ?>"  alt="icon">
							</a>
						</li>
						<li>
							<a href="<?= site_url('#') ?>" >
								<img src="<?= site_url('assets/img/icon-chat7.png') ?>"  alt="icon">
							</a>
						</li>
						<li>
							<a href="<?= site_url('#') ?>" >
								<img src="<?= site_url('assets/img/icon-chat8.png') ?>"  alt="icon">
							</a>
						</li>
						<li>
							<a href="<?= site_url('#') ?>" >
								<img src="<?= site_url('assets/img/icon-chat9.png') ?>"  alt="icon">
							</a>
						</li>
						<li>
							<a href="<?= site_url('#') ?>" >
								<img src="<?= site_url('assets/img/icon-chat10.png') ?>"  alt="icon">
							</a>
						</li>
						<li>
							<a href="<?= site_url('#') ?>" >
								<img src="<?= site_url('assets/img/icon-chat11.png') ?>"  alt="icon">
							</a>
						</li>
						<li>
							<a href="<?= site_url('#') ?>" >
								<img src="<?= site_url('assets/img/icon-chat12.png') ?>"  alt="icon">
							</a>
						</li>
						<li>
							<a href="<?= site_url('#') ?>" >
								<img src="<?= site_url('assets/img/icon-chat13.png') ?>"  alt="icon">
							</a>
						</li>
						<li>
							<a href="<?= site_url('#') ?>" >
								<img src="<?= site_url('assets/img/icon-chat14.png') ?>"  alt="icon">
							</a>
						</li>
						<li>
							<a href="<?= site_url('#') ?>" >
								<img src="<?= site_url('assets/img/icon-chat15.png') ?>"  alt="icon">
							</a>
						</li>
						<li>
							<a href="<?= site_url('#') ?>" >
								<img src="<?= site_url('assets/img/icon-chat16.png') ?>"  alt="icon">
							</a>
						</li>
						<li>
							<a href="<?= site_url('#') ?>" >
								<img src="<?= site_url('assets/img/icon-chat17.png') ?>"  alt="icon">
							</a>
						</li>
						<li>
							<a href="<?= site_url('#') ?>" >
								<img src="<?= site_url('assets/img/icon-chat18.png') ?>"  alt="icon">
							</a>
						</li>
						<li>
							<a href="<?= site_url('#') ?>" >
								<img src="<?= site_url('assets/img/icon-chat19.png') ?>"  alt="icon">
							</a>
						</li>
						<li>
							<a href="<?= site_url('#') ?>" >
								<img src="<?= site_url('assets/img/icon-chat20.png') ?>"  alt="icon">
							</a>
						</li>
						<li>
							<a href="<?= site_url('#') ?>" >
								<img src="<?= site_url('assets/img/icon-chat21.png') ?>"  alt="icon">
							</a>
						</li>
						<li>
							<a href="<?= site_url('#') ?>" >
								<img src="<?= site_url('assets/img/icon-chat22.png') ?>"  alt="icon">
							</a>
						</li>
						<li>
							<a href="<?= site_url('#') ?>" >
								<img src="<?= site_url('assets/img/icon-chat23.png') ?>"  alt="icon">
							</a>
						</li>
						<li>
							<a href="<?= site_url('#') ?>" >
								<img src="<?= site_url('assets/img/icon-chat24.png') ?>"  alt="icon">
							</a>
						</li>
						<li>
							<a href="<?= site_url('#') ?>" >
								<img src="<?= site_url('assets/img/icon-chat25.png') ?>"  alt="icon">
							</a>
						</li>
						<li>
							<a href="<?= site_url('#') ?>" >
								<img src="<?= site_url('assets/img/icon-chat26.png') ?>"  alt="icon">
							</a>
						</li>
						<li>
							<a href="<?= site_url('#') ?>" >
								<img src="<?= site_url('assets/img/icon-chat27.png') ?>"  alt="icon">
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>

	</form>
		</div>
	</div>

</div>

<!-- ... end Window-popup-CHAT for responsive min-width: 768px -->

<?php $this->load->view('layout/footer'); ?>