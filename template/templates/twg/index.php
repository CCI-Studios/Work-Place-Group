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
	</div>
	
	<div id="mainmenu"><div>
		<jdoc:include type="modules" name="mainmenu" style="xhtml" />
	</div></div>
	
	<div id="content">
		<div id="main">
			<div id="component">
				<jdoc:include type="component" />
			</div>
			<div id="bottom">
				<jdoc:include type="modules" name="bottom" style="xhtml" />
			</div>
			<div id="bottomdummy">
			</div>
		</div>
		<div id="sidebar">
			<jdoc:include type="modules" name="sidebar" style="xhtml" />
		</div>
		<div class="clear"></div>
	</div></div></div>
		
	<div id="footer">
		<div>Site by CCI Studios
			<img src="../templates/twg/images/employmentontariologo.png" width="78" height="24" alt="Employmentontariologo" />
			Copyright 2008 The WorkPlace Group
			<img src="../templates/twg/images/twglogomini.png" width="25" height="25" alt="Twglogomini" />
		</div>
	</div>

</body>
</html>
