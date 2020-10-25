
    <body>
		<!-- Fixed navbar -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<a class="navbar-brand" target = "_blanc" href="<?php echo "../../index.php" ?>">Invoice system</a>
				</div>
				<div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav">
						<li <?php if($page_name == PAGENAME_INDEX || $page_name == PAGENAME_CONTACTS) echo 'class="active"'; ?>><a href="index.php"><i class="fa fa-users" aria-hidden="true"></i><font color="#202020"> <b><?php echo PAGENAME_INDEX; ?></font></b></a></li>
						<li><a target ="_blanc" href="../../new.php"><i class="fa fa-check-square" aria-hidden="true"></i><font color="#202020"> <b>New invoice</font></b></a></li>
					</ul>
				</div><!--/.nav-collapse -->
			</div>
		</nav>
		
		<div class="container pt-50">
			<h2><?php if(isset($subpage_name)) { echo $subpage_name; } else { echo $page_name; } ?></h2>
			
			<hr/>