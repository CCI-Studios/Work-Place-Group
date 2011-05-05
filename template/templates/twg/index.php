<!DOCTYPE html>

<html>
<head>
	<jdoc:include type="head" />
	<link rel="shortcut icon" href="/templates/twg/images/favicon.ico" />
	<link rel="stylesheet" href="/templates/twg/css/template.css" />
</head>

<body>
	<div id="top">
		<jdoc:include type="modules" name="top" style="xhtml" />
		<div class="clear"></div>
	</div>
	
	<div id="mainmenu"><div>
		<jdoc:include type="modules" name="mainmenu" style="xhtml" />
	</div></div>
	
	<div id="content"><div><div>
		<div id="main">
			<div id="component">
				<jdoc:include type="component" />
			</div>
			<div id="bottom">
				<jdoc:include type="modules" name="bottom" style="xhtml" />
			</div>
			<div id="bottomdummy"></div>
		</div>
		<div id="sidebar">
			<jdoc:include type="modules" name="sidebar" style="rounded" />
		</div>
		<div class="clear"></div>
	</div></div></div>
		
	<div id="footer"><div>
		<div class="left">Site by CCI Studios</div>
		<div class="right">&copy; Copyright <?php echo date('Y') ?><img src="../templates/twg/images/twglogomini2.png" width="117" height="25" alt="Twglogomini" /></div>
		<div class="center"><img src="../templates/twg/images/employmentontariologo.png" width="78" height="24" alt="Employmentontariologo" /></div>
	</div></div>

</body>
</html>
