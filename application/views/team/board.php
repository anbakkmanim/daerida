<?php $this->load->view('layout/header'); ?>

<?php $this->load->view('layout/nav'); ?>

<?php $this->load->view('layout/inner_header', [
    'title' => '팀 게시물 목록',
    'content' => '게시물 목록입니다.',
    'color' => 3
]); ?>


<div class="container">
	<div class="row">
		<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
			<div class="ui-block responsive-flex">
				<div class="ui-block-title">
					<div class="align-right">
<!--						<form class="w-search">-->
<!--							<div class="form-group with-button is-empty">-->
<!--								<input class="form-control" type="text" placeholder="Search the forums...">-->
<!--								<button>-->
<!--									<svg class="olymp-magnifying-glass-icon"><use xlink:href="/assets/svg-icons/sprites/icons.svg#olymp-magnifying-glass-icon"></use></svg>-->
<!--								</button>-->
<!--							<span class="material-input"></span></div>-->
<!--						</form>-->
						<a href="/team/boardWrite" class="btn btn-blue btn-md">글쓰기</a>
						<a href="/team/invite?te_idx=<?=$te_idx?>" class="btn btn-blue btn-md">팀 초대하기</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

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
								<a href="/member/User?me_n_idx=<?= $rows['me_n_idx']?>" class="h6 title"><?= $rows['me_n_name'] ?></a>
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

			
			<!-- ... end Pagination -->

		</div>


	</div>
</div>

<script>
document.querySelector(".bg-group").style.backgroundImage = "url(/assets/img/top-header5.png)";
</script>

<?php $this->load->view('layout/footer'); ?>