<?php $this->load->view('layout/header'); ?>

<?php $this->load->view('layout/nav'); ?>

<?php $this->load->view('layout/inner_header', [
    'title' => '팀 게시물',
    'content' => '게시물 목록입니다.',
    'color' => 3
]); ?>

<?php
foreach ($result as $rows) {
    ?>
<div class="container mt-3">
	<div class="row">
		<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

			<div class="ui-block responsive-flex">
				<div class="ui-block-title">
					<div class="h2 title"><?= $rows['te_po_title']?></div>
				</div>

				
				<!-- Open Topic Table -->
				
				<table class="open-topic-table">
				
					<thead>
				
					<tr class="text-center">
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
			</div>

		</div>

	</div>
</div>

<?php $this->load->view('layout/footer'); ?>