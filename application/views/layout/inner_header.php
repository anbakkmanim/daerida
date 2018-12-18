<!--

  $this->load->view('layout/inner_header', [
    'title' => '타이틀' (mandatory),
    'content' => '서브타이틀 혹은 자세 설명' (optional),
    'color' => 1, 2, 3, 4 (mandatory)
  ]);

-->

<?php

if (!isset($color) || $color == null) {
  $color = 1;
}

?>

<div class="main-header">
	<div class="content-bg-wrap
  <?php
  if ($color == 1) echo "bg-account";
  else if ($color == 2) echo "bg-weather";
  else if ($color == 3) echo "bg-music";
  else if ($color == 4) echo "bg-users";
  ?>
  "></div>
	<div class="container mb-5">
		<div class="row">
			<div class="col col-lg-8 m-auto col-md-8 col-sm-12 col-12">
				<div class="main-header-content">
					<h1><?= $title ?></h1>
          <?php if (isset($content)
            && ($content != null)
            && trim($content) != "") {
          ?>
            <p><?= $content ?></p>
          <?php } ?>
				</div>
			</div>
		</div>
	</div>
</div>