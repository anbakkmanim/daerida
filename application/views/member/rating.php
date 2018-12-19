<?php $this->load->view('layout/header'); ?>
<?php $this->load->view('layout/nav'); ?>

<!-- ... end Responsive Header-BP -->



<div class="container">
	<div class="row">
		<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
			<div class="ui-block">
				<div class="top-header top-header-favorit">
					<div class="top-header-thumb">
                        <img src="<?= '/assets/img/top-header2.jpg' ?>"  alt="nature">
						<div class="top-header-author">
							<div class="author-thumb">
								<img src="<?= '/uploads/profile/'.$CompanyInfo->me_c_profile.'' ?>" alt="author">
							</div>
							<div class="author-content">
								<a href="#" class="h3 author-name"><?=$CompanyInfo->me_c_name?></a>
								<div class="country"><?=$CompanyInfo->me_c_sido?></div>
							</div>
						</div>
					</div>
					<div class="profile-section">
						<div class="row">
							<div class="col col-xl-8 m-auto col-lg-8 col-md-12">
								<ul class="profile-menu">
									<li>
										<a href="<?= '/member/Company?me_c_idx='.$CompanyInfo->me_c_idx.'' ?>">기업정보</a>
									</li>
									<li>
										<a href="<?= '/member/companyQnA?me_c_idx='.$CompanyInfo->me_c_idx.'' ?>" class="active">Q&A</a>
									</li>
                                    <li>
                                        <a href="/hiring/hiringList?co_idx=<?= $me_c_idx ?>">채용 공고</a>
                                    </li>
								</ul>
							</div>
						</div>

						<div class="control-block-button">


						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>



<div class="container">
	<div class="row">
		<div class="col col-xl-8 order-xl-2 col-lg-12 order-lg-1 col-sm-12 col-12">
			<div id="newsfeed-items-grid">
                <?php if($this->session->me_idx != $CompanyInfo->me_c_idx && $this->session->me_type == "me_n_") { ?>
                        <div class='ui-block' >
                            <form action = '/member/companyQuestion' class='comment-form inline-items' method = 'POST' >
                                <input type = 'hidden' name = 'me_c_idx' value = '<?=$CompanyInfo->me_c_idx?>' >
                                <div class='post__author author vcard inline-items' >
                                        <textarea class='form-control' name = 'qna_question' ></textarea >
                                </div >
                                <input type = 'submit' class='btn btn-md-2 btn-primary' value = '질문하기' >
                            </form >
                        </div >
                <?php   } ?>
				<div class="ui-block">
					<!-- Post -->
                    <?php
                    foreach($QnA as $rows) {
                        ?>

                        <article class="hentry post">

                            <div class="post__author author vcard inline-items">
                                <img src="<?= "/uploads/profile/" . $rows['me_n_profile'] ?>" alt="author">

                                <div class="author-date">
                                    <a class="h6 post__author-name fn"
                                       href="#"><?= $rows['me_n_name'] ?></a>
                                </div>

                                <div class="more">
                                    <svg class="olymp-three-dots-icon">
                                        <use xlink:href="<?= '/assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon' ?>"></use>
                                    </svg>
                                    <ul class="more-dropdown">
                                        <li>
                                            <a href="#">Edit Post</a>
                                        </li>
                                        <li>
                                            <a href="#">Delete Post</a>
                                        </li>
                                        <li>
                                            <a href="#">Turn Off Notifications</a>
                                        </li>
                                        <li>
                                            <a href="#">Select as Featured</a>
                                        </li>
                                    </ul>
                                </div>

                            </div>

                            <p><?= $rows['co_qna_content'] ?>
                            </p>

                        </article>

                        <!-- ... end Post -->


                        <!-- Comments -->
                        <?php
                        if ($rows['co_qna_answer']) {
                            ?>
                            <ul class="comments-list">
                                <li class="comment-item">
                                    <div class="post__author author vcard inline-items">
                                        <img src="<?= "/uploads/profile/" . $rows['me_c_profile'] ?>" alt="author">

                                        <div class="author-date">
                                            <a class="h6 post__author-name fn" href="#"> <?=$rows['me_c_name']?> </a>
                                            <div class="post__date">
                                                <time class="published" datetime="2017-03-24T18:18">
                                                    <?= explode(" ", $rows['co_qna_time'])[0] ?>
                                                </time>
                                            </div>
                                        </div>

                                        <a href="#" class="more">
                                            <svg class="olymp-three-dots-icon">
                                                <use xlink:href="<?= '/assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon' ?>"></use>
                                            </svg>
                                        </a>

                                    </div>

                                    <p><?=$rows['co_qna_answer']?></p>
                                </li>

                            </ul>


                            <?php
                        }else{?>
                            <?php if($this->session->me_idx == $CompanyInfo->me_c_idx && $this->session->me_type == "me_c_"){ ?>
                                <form class='comment-form inline-items' action= '/member/companyAnswer' method='POST'>
                                    <div class='post__author author vcard inline-items'>
                                        <img src='<?='/img/author-page.jpg'?>' alt='author'>
                                        <div class='form-group with-icon-right'>
                                            <textarea class='form-control' name='qna_answer'></textarea>
                                            <div class='add-options-message'>
                                                <a href='<?='/#'?>' class='options-message' data-toggle='modal'
                                                   data-target='#update-header-photo'>
                                                    <svg class='olymp-camera-icon'>
                                                        <use xlink:href=''/assets/svg-icons/sprites/icons.svg#olymp-camera-icon''></use>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <input type='hidden' name='me_c_idx' value='<?=$CompanyInfo->me_c_idx?>'>
                                    <input type='hidden' name='qna_idx' value='<?=$rows['co_qna_idx']?>'>
                                    <input type='submit' class='btn btn-md-2 btn-primary' value='답변달기'>

                                    <button class='btn btn-md-2 btn-border-think c-grey btn-transparent custom-color'>취소하기
                                    </button>
                                </form>
                            <?php } ?>

                    <?php
                        }
                    }
                        ?>
					<!-- ... end Comment Form  -->
				</div>

			</div>
			

		</div>

        <div class="col col-xl-4 order-xl-1 col-lg-4 order-lg-1 col-md-12 order-md-2 col-sm-12 col-12">
            <div class="ui-block">
                <div class="ui-block-title">
                    <h6 class="title">프로필</h6>
                    <a href="#"  class="more"><svg class="olymp-three-dots-icon">
                            <use xlink:href="<?= '/assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon' ?>" ></use>
                        </svg></a>
                </div>
                <div class="ui-block-content">


                    <!-- W-Personal-Info -->

                    <ul class="widget w-personal-info">
                        <!--							<li>-->
                        <!--								<span class="title">정보:</span>-->
                        <!--								<span class="text">--><?//= $me_c_info ?><!--</span>-->
                        <!--							</li>-->
                        <li>
                            <span class="title">기업명:</span>
                            <span class="text"><?= $CompanyInfo->me_c_name ?></span>
                        </li>
                        <li>
                            <span class="title">기업담당자:</span>
                            <span class="text"><?= $CompanyInfo->me_c_manager ?></span>
                        </li>
                        <li>
                            <span class="title">이메일:</span>
                            <a href="mailto:<?= $CompanyInfo->me_c_email ?>" class="text"><?= $CompanyInfo->me_c_email ?></a>
                        </li>
                        <li>
                            <span class="title">초봉:</span>
                            <span class="text"><?= $CompanyInfo->me_c_salary ?></span>
                        </li>
                        <li>
                            <span class="title">분야:</span>
                            <span class="text"><?= $CompanyInfo->fi_l_name . "/" . $CompanyInfo->fi_s_name ?></span>
                        </li>
                        <li>
                            <span class="title">지역:</span>
                            <span class="text"><?= $CompanyInfo->me_c_sido ?></span>
                        </li>
                        <li>
                            <span class="title">복리후생:</span>
                            <span class="text"><?= $CompanyInfo->me_c_benefit ?></span>
                        </li>
                        <li>
                            <span class="title">병역 여부:</span>
                            <span class="text"><?= $CompanyInfo->me_c_isMilitary ?></span>
                        </li>

                    </ul>
                    <br>
                </div>
            </div>
        </div>


	</div>
</div>



<!-- Playlist Popup -->

<div class="window-popup playlist-popup" tabindex="-1" role="dialog" aria-labelledby="playlist-popup" aria-hidden="true">
	

	<a href="<?= '/' ?>" class="icon-close js-close-popup">
		<svg class="olymp-close-icon"><use xlink:href="<?= '/assets/svg-icons/sprites/icons.svg#olymp-close-icon' ?>"></use></svg>
	</a>

	<table class="playlist-popup-table">

		<thead>

		<tr>

			<th class="play">
				PLAY
			</th>

			<th class="cover">
				COVER
			</th>

			<th class="song-artist">
				SONG AND ARTIST
			</th>

			<th class="album">
				ALBUM
			</th>

			<th class="released">
				RELEASED
			</th>

			<th class="duration">
				DURATION
			</th>

			<th class="spotify">
				GET IT ON SPOTIFY
			</th>

			<th class="remove">
				REMOVE
			</th>
		</tr>

		</thead>

		<tbody>
		<tr>
			<td class="play">
				<a href="#" class="play-icon">
					<svg class="olymp-music-play-icon-big"><use xlink:href="<?= '/assets/svg-icons/sprites/icons-music.svg#olymp-music-play-icon-big' ?>"></use></svg>
				</a>
			</td>
			<td class="cover">
				<div class="playlist-thumb">
					<img src="<?= '/img/playlist19.jpg' ?>" alt="thumb-composition">
				</div>
			</td>
			<td class="song-artist">
				<div class="composition">
					<a href="#" class="composition-name">We Can Be Heroes</a>
					<a href="#" class="composition-author">Jason Bowie</a>
				</div>
			</td>
			<td class="album">
				<a href="#" class="album-composition">Ziggy Firedust</a>
			</td>
			<td class="released">
				<div class="release-year">2014</div>
			</td>
			<td class="duration">
				<div class="composition-time">
					<time class="published" datetime="2017-03-24T18:18">6:17</time>
				</div>
			</td>
			<td class="spotify">
				<i class="fab fa-spotify composition-icon" aria-hidden="true"></i>
			</td>
			<td class="remove">
				<a href="#" class="remove-icon">
					<svg class="olymp-close-icon"><use xlink:href="<?= '/assets/svg-icons/sprites/icons.svg#olymp-close-icon' ?>"></use></svg>
				</a>
			</td>
		</tr>

		<tr>
			<td class="play">
				<a href="#" class="play-icon">
					<svg class="olymp-music-play-icon-big"><use xlink:href="<?= '/assets/svg-icons/sprites/icons-music.svg#olymp-music-play-icon-big' ?>"></use></svg>
				</a>
			</td>
			<td class="cover">
				<div class="playlist-thumb">
					<img src="<?= '/img/playlist6.jpg' ?>" alt="thumb-composition">
				</div>
			</td>
			<td class="song-artist">
				<div class="composition">
					<a href="#" class="composition-name">The Past Starts Slow and Ends</a>
					<a href="#" class="composition-author">System of a Revenge</a>
				</div>
			</td>
			<td class="album">
				<a href="#" class="album-composition">Wonderize</a>
			</td>
			<td class="released">
				<div class="release-year">2014</div>
			</td>
			<td class="duration">
				<div class="composition-time">
					<time class="published" datetime="2017-03-24T18:18">6:17</time>
				</div>
			</td>
			<td class="spotify">
				<i class="fab fa-spotify composition-icon" aria-hidden="true"></i>
			</td>
			<td class="remove">
				<a href="#" class="remove-icon">
					<svg class="olymp-close-icon"><use xlink:href="<?= '/assets/svg-icons/sprites/icons.svg#olymp-close-icon' ?>"></use></svg>
				</a>
			</td>
		</tr>

		<tr>
			<td class="play">
				<a href="#" class="play-icon">
					<svg class="olymp-music-play-icon-big"><use xlink:href="<?= '/assets/svg-icons/sprites/icons-music.svg#olymp-music-play-icon-big' ?>"></use></svg>
				</a>
			</td>
			<td class="cover">
				<div class="playlist-thumb">
					<img src="<?= '/img/playlist7.jpg' ?>" alt="thumb-composition">
				</div>
			</td>
			<td class="song-artist">
				<div class="composition">
					<a href="#" class="composition-name">The Pretender</a>
					<a href="#" class="composition-author">Kung Fighters</a>
				</div>
			</td>
			<td class="album">
				<a href="#" class="album-composition">Warping Lights</a>
			</td>
			<td class="released">
				<div class="release-year">2014</div>
			</td>
			<td class="duration">
				<div class="composition-time">
					<time class="published" datetime="2017-03-24T18:18">6:17</time>
				</div>
			</td>
			<td class="spotify">
				<i class="fab fa-spotify composition-icon" aria-hidden="true"></i>
			</td>
			<td class="remove">
				<a href="#" class="remove-icon">
					<svg class="olymp-close-icon"><use xlink:href="<?= '/assets/svg-icons/sprites/icons.svg#olymp-close-icon' ?>"></use></svg>
				</a>
			</td>
		</tr>

		<tr>
			<td class="play">
				<a href="#" class="play-icon">
					<svg class="olymp-music-play-icon-big"><use xlink:href="<?= '/assets/svg-icons/sprites/icons-music.svg#olymp-music-play-icon-big' ?>"></use></svg>
				</a>
			</td>
			<td class="cover">
				<div class="playlist-thumb">
					<img src="<?= '/img/playlist8.jpg' ?>" alt="thumb-composition">
				</div>
			</td>
			<td class="song-artist">
				<div class="composition">
					<a href="#" class="composition-name">Seven Nation Army</a>
					<a href="#" class="composition-author">The Black Stripes</a>
				</div>
			</td>
			<td class="album">
				<a href="#" class="album-composition ">Icky Strung (LIVE at Cube Garden)</a>
			</td>
			<td class="released">
				<div class="release-year">2014</div>
			</td>
			<td class="duration">
				<div class="composition-time">
					<time class="published" datetime="2017-03-24T18:18">6:17</time>
				</div>
			</td>
			<td class="spotify">
				<i class="fab fa-spotify composition-icon" aria-hidden="true"></i>
			</td>
			<td class="remove">
				<a href="#" class="remove-icon">
					<svg class="olymp-close-icon"><use xlink:href="<?= '/assets/svg-icons/sprites/icons.svg#olymp-close-icon' ?>"></use></svg>
				</a>
			</td>
		</tr>

		<tr>
			<td class="play">
				<a href="#" class="play-icon">
					<svg class="olymp-music-play-icon-big"><use xlink:href="<?= '/assets/svg-icons/sprites/icons-music.svg#olymp-music-play-icon-big' ?>"></use></svg>
				</a>
			</td>
			<td class="cover">
				<div class="playlist-thumb">
					<img src="<?= '/img/playlist9.jpg' ?>" alt="thumb-composition">
				</div>
			</td>
			<td class="song-artist">
				<div class="composition">
					<a href="#" class="composition-name">Leap of Faith</a>
					<a href="#" class="composition-author">Eden Artifact</a>
				</div>
			</td>
			<td class="album">
				<a href="#" class="album-composition">The Assassins’s Soundtrack</a>
			</td>
			<td class="released">
				<div class="release-year">2014</div>
			</td>
			<td class="duration">
				<div class="composition-time">
					<time class="published" datetime="2017-03-24T18:18">6:17</time>
				</div>
			</td>
			<td class="spotify">
				<i class="fab fa-spotify composition-icon" aria-hidden="true"></i>
			</td>
			<td class="remove">
				<a href="#" class="remove-icon">
					<svg class="olymp-close-icon"><use xlink:href="<?= '/assets/svg-icons/sprites/icons.svg#olymp-close-icon' ?>"></use></svg>
				</a>
			</td>
		</tr>

		<tr>
			<td class="play">
				<a href="#" class="play-icon">
					<svg class="olymp-music-play-icon-big"><use xlink:href="<?= '/assets/svg-icons/sprites/icons-music.svg#olymp-music-play-icon-big' ?>"></use></svg>
				</a>
			</td>
			<td class="cover">
				<div class="playlist-thumb">
					<img src="<?= '/img/playlist10.jpg' ?>" alt="thumb-composition">
				</div>
			</td>
			<td class="song-artist">
				<div class="composition">
					<a href="#" class="composition-name">Killer Queen</a>
					<a href="#" class="composition-author">Archiduke</a>
				</div>
			</td>
			<td class="album">
				<a href="#" class="album-composition ">News of the Universe</a>
			</td>
			<td class="released">
				<div class="release-year">2014</div>
			</td>
			<td class="duration">
				<div class="composition-time">
					<time class="published" datetime="2017-03-24T18:18">6:17</time>
				</div>
			</td>
			<td class="spotify">
				<i class="fab fa-spotify composition-icon" aria-hidden="true"></i>
			</td>
			<td class="remove">
				<a href="#" class="remove-icon">
					<svg class="olymp-close-icon"><use xlink:href="<?= '/assets/svg-icons/sprites/icons.svg#olymp-close-icon' ?>"></use></svg>
				</a>
			</td>
		</tr>
		</tbody>
	</table>

	<audio id="mediaplayer" data-showplaylist="true">
		<source src="<?= '/mp3/Twice.mp3' ?>" title="Track 1" data-poster="track1.png" type="audio/mpeg">
		<source src="<?= '/mp3/Twice.mp3' ?>" title="Track 2" data-poster="track2.png" type="audio/mpeg">
		<source src="<?= '/mp3/Twice.mp3' ?>" title="Track 3" data-poster="track3.png" type="audio/mpeg">
		<source src="<?= '/mp3/Twice.mp3' ?>" title="Track 4" data-poster="track4.png" type="audio/mpeg">
	</audio>

</div>

<!-- ... end Playlist Popup -->
<!-- Window-popup Update Header Photo -->

<div class="modal fade" id="update-header-photo" tabindex="-1" role="dialog" aria-labelledby="update-header-photo" aria-hidden="true">
	<div class="modal-dialog window-popup update-header-photo" role="document">
		<div class="modal-content">
			<a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
				<svg class="olymp-close-icon"><use xlink:href="<?= '/assets/svg-icons/sprites/icons.svg#olymp-close-icon' ?>"></use></svg>
			</a>

			<div class="modal-header">
				<h6 class="title">Update Header Photo</h6>
			</div>

			<div class="modal-body">
				<a href="#" class="upload-photo-item">
				<svg class="olymp-computer-icon"><use xlink:href="<?= '/assets/svg-icons/sprites/icons.svg#olymp-computer-icon' ?>"></use></svg>

				<h6>Upload Photo</h6>
				<span>Browse your computer.</span>
			</a>

				<a href="#" class="upload-photo-item" data-toggle="modal" data-target="#choose-from-my-photo">

			<svg class="olymp-photos-icon"><use xlink:href="<?= '/assets/svg-icons/sprites/icons.svg#olymp-photos-icon' ?>"></use></svg>

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
			<a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
				<svg class="olymp-close-icon"><use xlink:href="<?= '/assets/svg-icons/sprites/icons.svg#olymp-close-icon' ?>"></use></svg>
			</a>
			<div class="modal-header">
				<h6 class="title">Choose from My Photos</h6>

				<!-- Nav tabs -->
				<ul class="nav nav-tabs" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" data-toggle="tab" href="<?= '/#home' ?>" role="tab" aria-expanded="true">
							<svg class="olymp-photos-icon"><use xlink:href="<?= '/assets/svg-icons/sprites/icons.svg#olymp-photos-icon' ?>"></use></svg>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="<?= '/#profile' ?>" role="tab" aria-expanded="false">
							<svg class="olymp-albums-icon"><use xlink:href="<?= '/assets/svg-icons/sprites/icons.svg#olymp-albums-icon' ?>"></use></svg>
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
									<img src="<?= '/img/choose-photo1.jpg' ?>" alt="photo">
									<input type="radio" name="optionsRadios">
								</label>
							</div>
						</div>
						<div class="choose-photo-item" data-mh="choose-item">
							<div class="radio">
								<label class="custom-radio">
									<img src="<?= '/img/choose-photo2.jpg' ?>" alt="photo">
									<input type="radio" name="optionsRadios">
								</label>
							</div>
						</div>
						<div class="choose-photo-item" data-mh="choose-item">
							<div class="radio">
								<label class="custom-radio">
									<img src="<?= '/img/choose-photo3.jpg' ?>" alt="photo">
									<input type="radio" name="optionsRadios">
								</label>
							</div>
						</div>

						<div class="choose-photo-item" data-mh="choose-item">
							<div class="radio">
								<label class="custom-radio">
									<img src="<?= '/img/choose-photo4.jpg' ?>" alt="photo">
									<input type="radio" name="optionsRadios">
								</label>
							</div>
						</div>
						<div class="choose-photo-item" data-mh="choose-item">
							<div class="radio">
								<label class="custom-radio">
									<img src="<?= '/img/choose-photo5.jpg' ?>" alt="photo">
									<input type="radio" name="optionsRadios">
								</label>
							</div>
						</div>
						<div class="choose-photo-item" data-mh="choose-item">
							<div class="radio">
								<label class="custom-radio">
									<img src="<?= '/img/choose-photo6.jpg' ?>" alt="photo">
									<input type="radio" name="optionsRadios">
								</label>
							</div>
						</div>

						<div class="choose-photo-item" data-mh="choose-item">
							<div class="radio">
								<label class="custom-radio">
									<img src="<?= '/img/choose-photo7.jpg' ?>" alt="photo">
									<input type="radio" name="optionsRadios">
								</label>
							</div>
						</div>
						<div class="choose-photo-item" data-mh="choose-item">
							<div class="radio">
								<label class="custom-radio">
									<img src="<?= '/img/choose-photo8.jpg' ?>" alt="photo">
									<input type="radio" name="optionsRadios">
								</label>
							</div>
						</div>
						<div class="choose-photo-item" data-mh="choose-item">
							<div class="radio">
								<label class="custom-radio">
									<img src="<?= '/img/choose-photo9.jpg' ?>" alt="photo">
									<input type="radio" name="optionsRadios">
								</label>
							</div>
						</div>


						<a href="#" class="btn btn-secondary btn-lg btn--half-width">Cancel</a>
						<a href="#" class="btn btn-primary btn-lg btn--half-width">Confirm Photo</a>

					</div>
					<div class="tab-pane" id="profile" role="tabpanel" aria-expanded="false">

						<div class="choose-photo-item" data-mh="choose-item">
							<figure>
								<img src="<?= '/img/choose-photo10.jpg' ?>" alt="photo">
								<figcaption>
									<a href="#">South America Vacations</a>
									<span>Last Added: 2 hours ago</span>
								</figcaption>
							</figure>
						</div>
						<div class="choose-photo-item" data-mh="choose-item">
							<figure>
								<img src="<?= '/img/choose-photo11.jpg' ?>" alt="photo">
								<figcaption>
									<a href="#">Photoshoot Summer 2016</a>
									<span>Last Added: 5 weeks ago</span>
								</figcaption>
							</figure>
						</div>
						<div class="choose-photo-item" data-mh="choose-item">
							<figure>
								<img src="<?= '/img/choose-photo12.jpg' ?>" alt="photo">
								<figcaption>
									<a href="#">Amazing Street Food</a>
									<span>Last Added: 6 mins ago</span>
								</figcaption>
							</figure>
						</div>

						<div class="choose-photo-item" data-mh="choose-item">
							<figure>
								<img src="<?= '/img/choose-photo13.jpg' ?>" alt="photo">
								<figcaption>
									<a href="#">Graffity & Street Art</a>
									<span>Last Added: 16 hours ago</span>
								</figcaption>
							</figure>
						</div>
						<div class="choose-photo-item" data-mh="choose-item">
							<figure>
								<img src="<?= '/img/choose-photo14.jpg' ?>" alt="photo">
								<figcaption>
									<a href="#">Amazing Landscapes</a>
									<span>Last Added: 13 mins ago</span>
								</figcaption>
							</figure>
						</div>
						<div class="choose-photo-item" data-mh="choose-item">
							<figure>
								<img src="<?= '/img/choose-photo15.jpg' ?>" alt="photo">
								<figcaption>
									<a href="#">The Majestic Canyon</a>
									<span>Last Added: 57 mins ago</span>
								</figcaption>
							</figure>
						</div>


						<a href="#" class="btn btn-secondary btn-lg btn--half-width">Cancel</a>
						<a href="#" class="btn btn-primary btn-lg disabled btn--half-width">Confirm Photo</a>
					</div>
				</div>
			</div>
		</div>

	</div>
</div>

<!-- ... end Window-popup Choose from my Photo -->


<a class="back-to-top" href="#">
	<img src="<?= '/assets/svg-icons/back-to-top.svg' ?>" alt="arrow" class="back-icon">
</a>




<!-- Window-popup-CHAT for responsive min-width: 768px -->

<div class="ui-block popup-chat popup-chat-responsive" tabindex="-1" role="dialog" aria-labelledby="update-header-photo" aria-hidden="true">

	<div class="modal-content">
		<div class="modal-header">
			<span class="icon-status online"></span>
			<h6 class="title" >Chat</h6>
			<div class="more">
				<svg class="olymp-three-dots-icon"><use xlink:href="<?= '/assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon' ?>"></use></svg>
				<svg class="olymp-little-delete js-chat-open"><use xlink:href="<?= '/assets/svg-icons/sprites/icons.svg#olymp-little-delete' ?>"></use></svg>
			</div>
		</div>
		<div class="modal-body">
			<div class="mCustomScrollbar">
				<ul class="notification-list chat-message chat-message-field">
					<li>
						<div class="author-thumb">
							<img src="<?= '/img/avatar14-sm.jpg' ?>" alt="author" class="mCS_img_loaded">
						</div>
						<div class="notification-event">
							<span class="chat-message-item">Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks</span>
							<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 8:10pm</time></span>
						</div>
					</li>

					<li>
						<div class="author-thumb">
							<img src="<?= '/img/author-page.jpg' ?>" alt="author" class="mCS_img_loaded">
						</div>
						<div class="notification-event">
							<span class="chat-message-item">Don’t worry Mathilda!</span>
							<span class="chat-message-item">I already bought everything</span>
							<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 8:29pm</time></span>
						</div>
					</li>

					<li>
						<div class="author-thumb">
							<img src="<?= '/img/avatar14-sm.jpg' ?>" alt="author" class="mCS_img_loaded">
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
				<a href="#" class="options-message">
					<svg class="olymp-computer-icon"><use xlink:href="<?= '/assets/svg-icons/sprites/icons.svg#olymp-computer-icon' ?>"></use></svg>
				</a>
				<div class="options-message smile-block">

					<svg class="olymp-happy-sticker-icon"><use xlink:href="<?= '/assets/svg-icons/sprites/icons.svg#olymp-happy-sticker-icon' ?>"></use></svg>

					<ul class="more-dropdown more-with-triangle triangle-bottom-right">
						<li>
							<a href="#">
								<img src="<?= '/img/icon-chat1.png' ?>" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?= '/img/icon-chat2.png' ?>" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?= '/img/icon-chat3.png' ?>" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?= '/img/icon-chat4.png' ?>" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?= '/img/icon-chat5.png' ?>" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?= '/img/icon-chat6.png' ?>" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?= '/img/icon-chat7.png' ?>" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?= '/img/icon-chat8.png' ?>" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?= '/img/icon-chat9.png' ?>" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?= '/img/icon-chat10.png' ?>" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?= '/img/icon-chat11.png' ?>" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?= '/img/icon-chat12.png' ?>" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?= '/img/icon-chat13.png' ?>" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?= '/img/icon-chat14.png' ?>" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?= '/img/icon-chat15.png' ?>" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?= '/img/icon-chat16.png' ?>" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?= '/img/icon-chat17.png' ?>" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?= '/img/icon-chat18.png' ?>" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?= '/img/icon-chat19.png' ?>" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?= '/img/icon-chat20.png' ?>" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?= '/img/icon-chat21.png' ?>" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?= '/img/icon-chat22.png' ?>" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?= '/img/icon-chat23.png' ?>" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?= '/img/icon-chat24.png' ?>" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?= '/img/icon-chat25.png' ?>" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?= '/img/icon-chat26.png' ?>" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?= '/img/icon-chat27.png' ?>" alt="icon">
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

<script>
	
$('.starRev span').click(function(){
  $(this).parent().children('span').removeClass('on');
  $(this).addClass('on').prevAll('span').addClass('on');
  return false;
});

</script>

<?php $this->load->view('layout/footer'); ?>