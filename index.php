<html>
<head><title>CSS Layout</title>
<!-- 
we use an internal CSS 
this CSS Example write in windows notepad by Oka Dayendra
-->
<style type="text/css">
body{background-color : #EEEEEE;}
div#main{width : 900px; border : 1px solid #606060; background-color : #FFFFFF; margin : 0 auto; /* margin : 0 auto; to place div id="main" in center 

position */}
div#header{width : 900px; height : 100px; background-color : #303030; color : #FFFFFF;}
div#body{width : 900px; height : 400px;color : #000000;}
div#footer{width : 900px; height : 30px; background-color : #303030; color ; #FFFFFF;}
</style>
</head>
<body>
<!-- here is main layer -->
<div id="main">
	<div id="header"><!-- here is a header --></div>
	<div id="body"><!-- here is a content website --></div>
	<div id="footer"><!-- here is a footer --></div>
</div>
</body>
</html>

<html>
<head><title>Containers Update - TERC</title>
<!-- 
we use an internal CSS 
this CSS Example write in windows notepad by Oka Dayendra
-->
<style type="text/css">
body{background-color : #EEEEEE;}
div#main{width : 900px; border : 1px solid #606060; background-color : #FFFFFF; margin : 0 auto; /* margin : 0 auto; to place div id="main" in center 

position */}
div#header{width : 900px; height : 100px; background-color : #303030; color : #FFFFFF;}
div#body{width : 900px; height : 400px;color : #000000;}
div#kiri{width : 200px;height : 400px;background-color : #FFCCCC; float : left;}
div#kanan{width : 700px; height : 400px;float : left;}
div#footer{width : 900px; height : 30px; background-color : #303030; color ; #FFFFFF;}
</style>
</head>
<body>
<!-- here is main layer -->
<div id="main">
	<div id="header"><!-- here is a header --></div>
	<div id="body"><!-- here is a content website -->
		<div id="kiri"><!-- here is a left content --></div>
		<div id="kanan"><!-- here is a right content --></div>
	</div>
	<div id="footer"><!-- here is a footer --></div>
</div>
</body>
</html>
