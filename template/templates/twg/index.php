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
			<jdoc:include type="modules" name="sidebar" style="xhtml" />
		</div>
		<div class="clear"></div>
	</div></div></div>
		
	<div id="footer"><div>
		<div>Site by CCI Studios</div>
			<div><img src="../templates/twg/images/employmentontariologo.png" width="78" height="24" alt="Employmentontariologo" /></div>
				<div>Copyright 2008 <img src="../templates/twg/images/twglogomini2.png" width="117" height="25" alt="Twglogomini" /></div>
	</div></div>

</body>
</html>
