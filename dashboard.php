<?php

include $_SERVER['DOCUMENT_ROOT'].'/.inc/controller.php';
include $_SERVER['DOCUMENT_ROOT'].'/.inc/userInfo.php';

$loadedModule = 'Customer';

header("Location: /".strtolower($userData['role'])."/dashboard");
exit;

include $_SERVER['DOCUMENT_ROOT'].'/.inc/topFrame.php';

?>
			<div class="content-wrapper">
				<section class="content-header">
					<h1>
						Control System
					</h1>
					<ol class="breadcrumb">
						<li><a href="#"><i class="fa fa-dashboard"></i> CS</a></li>
						<li class="active"><?php echo $loadedModule; ?></li>
					</ol>
				</section>
				<section class="content container-fluid">
					<i><?php echo $userData['latin']; ?></i>
				</section>
			</div>
<?php
include $_SERVER['DOCUMENT_ROOT'].'/.inc/bottomFrame.php'; 
?>