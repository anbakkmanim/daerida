<?php $this->load->view('layout/header'); ?>

<?php $this->load->view('layout/nav'); ?>

<div class="main-header">
	<div class="content-bg-wrap bg-group"></div>
	<div class="container">
		<div class="row">
			<div class="col col-lg-8 m-auto col-md-8 col-sm-12 col-12">
				<div class="main-header-content">
					<h1>팀 초대하기</h1>
					<p>나만의 팀에 사람들을 초대해보세요!</p>
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

					<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
						<div class="row mt-3">
							<div class="col-xl-6 mt-3">
								<div class="h6 title">사람 검색</div>
							</div>
							<div class="col col-xl-4 col-12">
								<div class="form-group label-floating">
									<label class="control-label">이름 검색</label>
									<input class="form-control" name="me_name" type="text" id="me_name">
								</div>
							</div>
							<div class='col col-xl-2 col-12 mt-1'>
								<script>
									function searchUser(){
											$.ajax({
											type:"POST",
											url:"/team/searchUser",
											data:{"me_n_name":$("#me_name").val() , "te_idx" : <?= $te_idx ?>},
											success (data) {
												data = JSON.parse(data).result;
												$("#usertable tbody tr").empty();
												for(var i in data){
													addUser(data[i]);
												}
											}
										});
									}

									function addUser(user){
										$("#userdata").append(`<tr class="bg-smoke-light">
											<td class="posts" style="width:10%;">
												<form action="/team/joinTeam" method="post">
													<input type="hidden" name="te_idx" value="${user.te_idx}">
													<input type="hidden" name="me_n_idx" value="${user.me_n_idxx}">
													<input type="hidden" name="fi_s_idx" value="${user.fi_s_idx}">
													<div class='col col-xl-12 col-sm-4 full-width'>
														<input type="submit" value="초대">
													</div>
												</form>
											</td>

											<td class="posts">
												<a href="/member/User?me_n_idx=${user.me_n_idx}">${user.me_n_name}</a> 
											</td>
											
											<td class="posts"> 
												${user.me_n_age}
											</td>

											<td class="posts"> 
												${user.fi_l_name} / ${user.fi_s_name}
											</td>

											<td class="posts"> 
												${user.me_n_email}
											</td>
										</tr>`)
									}
								</script>
								<a href="#" class="btn btn-blue btn-md full-width" onclick="searchUser()">검색하기</a>
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
		<div class="col">

			<div class="ui-block">

				
				<!-- Forums Table -->
				
				<table class="forums-table" id="usertable">
				
					<thead>
						<tr >
							<th></th>
							<th>이름</th>
							<th>나이</th>
							<th>분야</th>
							<th>이메일</th>				
						</tr>
					</thead>
				
					<tbody id="userdata">

						<?php foreach($user as $row) { ?>
										<tr class="bg-smoke-light">
											<td class="posts" style="width:10%;">
												<form action="/team/joinTeam" method="post">
													<input type="hidden" name="te_idx" value="<?= $te_idx ?>">
													<input type="hidden" name="me_n_idx" value="<?= $row['me_n_idx'] ?>">
													<input type="hidden" name="fi_s_idx" value="<?= $row['fi_s_idx'] ?>">
													<div class='col col-xl-12 col-sm-4 full-width'>
														<input type="submit" value="초대">
													</div>
												</form>
											</td>

											<td class="posts"> 
												<a href="/member/User?me_n_idx=<?= $row['me_n_idx'] ?>"><?= $row['me_n_name'] ?></a> 
											</td>
											
											<td class="posts"> 
												<?=$row['me_n_age']?>
											</td>

											<td class="posts"> 
												<?=$row['fi_l_name'] ." / ". $row['fi_s_name']?>
											</td>

											<td class="posts"> 
												<?=$row['me_n_email']?>
											</td>
										</tr>
						<?php } ?> 
					</tbody>
				</table>
				
				<!-- ... end Forums Table -->

			</div>

		</div>


	</div>
</div>

<script>
document.querySelector(".bg-group").style.backgroundImage = "url(/assets/img/top-header5.png)";
</script>

<?php $this->load->view('layout/footer'); ?>