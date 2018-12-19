<?php $this->load->view('layout/header'); ?>

<?php $this->load->view('layout/nav'); ?>

<?php $this->load->view('layout/inner_header', [
    'title' => '팀 게시물 작성',
    'content' => '글을 작성해 주세요.',
    'color' => 3
]); ?>


<div class="container mt-3">
	<div class="row">
		<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

			<div class="ui-block">
				<div class="ui-block-title bg-blue">
					<h6 class="title c-white">새로운 글을 쓰세요!</h6>
				</div>
				<div class="ui-block-content">
					
					<form class="content" action="/team/addPost" method="post">
						<div class="row">
							<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<div class="form-group label-floating">
									<label class="control-label">제목</label>
									<input class="form-control" type="text" name="te_po_title" placeholder="">
								<span class="material-input"></span></div>
							</div>
					
							<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<div class="form-group label-floating">
									<label class="control-label">내용</label>
                                    <textarea class="form-control"  name="te_po_content" style="height: 240px"></textarea>
								<span class="material-input"></span></div>
							</div>
					
							<div class="col col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
								<a href="/team/board?te_idx=<?=$te_idx?>" class="btn btn-secondary btn-lg full-width">취소</a>
							</div>
					
							<div class="col col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
								<input type=submit class="btn btn-blue btn-lg full-width" value="글올리기">
							</div>
						</div>
					</form>
				</div>
			</div>

		</div>

	</div>
</div>


<?php $this->load->view('layout/footer'); ?>