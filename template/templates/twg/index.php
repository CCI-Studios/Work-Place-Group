<!DOCTYPE html>

<html>
<head>
	<jdoc:include type="head" />
	<link rel="shortcut icon" href="/templates/twg/images/favicon.ico" />
	<link rel="stylesheet" href="/templates/twg/css/template.css" />
</head>

<body>
	<div id="top">
		<jdoc:include type="modules" name="logo" style="xhtml" />
		<jdoc:include type="modules" name="topmenu" style="xhtml" />
	</div>
	
	<div id="mainmenu">
			<jdoc:include type="modules" name="mainmenu" style="xhtml" />
	</div>
	
	<div id="content">
	<div id="sidebar">
		<div></div>
		<jdoc:include type="modules" name="sidebar" style="xhtml" />
	</div></div>
	
	<div class="clear"></div>
	
	<div id="footer">
		<div>Site by CCI Studios
			<img src="../templates/twg/images/employmentontariologo.png" width="78" height="24" alt="Employmentontariologo">
			Copyright 2008 The WorkPlace Group
			<img src="../templates/twg/images/twglogomini.png" width="25" height="25" alt="Twglogomini">
			<jdoc:include type="modules" name="footer" style="xhtml">
		</div>	
	</div>

</body>
</html>
