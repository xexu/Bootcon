<!DOCTYPE html>
<html lang="en">
<head>
	<link href="<?php echo base_url();?>css/bootstrap.min.css" rel="stylesheet">
	<meta charset="utf-8">
	<title>Welcome to bootcon!</title>
</head>
<body>

<div class="container">
	<h1>Welcome to bootcon!</h1>
	<?= bootcon('plus') ?>
	<ul>
		<?= bootcon('star','<li class="li-icon"> This is a star</li>') ?>
		<?= bootcon('thumbs-up','<li class="li-icon"> This is the thumbs up!</li>') ?>
	</ul>
	<div style="background-color: red;"><?= bootcon('chevron-right','',true) ?></div>
</div>
</body>
</html>