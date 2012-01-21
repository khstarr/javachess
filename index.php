<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>javachess</title>

<!-- jQuery script -->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script src='scripts/jqueryUI.js'></script>

<link rel="stylesheet" type="text/css" href="css/styles.css">
<link rel="stylesheet" type="text/css" href="css/khstarr.css">

<script src='scripts/chess.js'></script>
<script src='scripts/util.js'></script>
<script src='scripts/khstarr.js'></script>
<script src='scripts/cookie-wrapper.js'></script>


</head>

<body onload="drawBoard(board);">


<div id='wrapper'>


	<div id='board'>
	</div>
    
    <div id='info'>
            Share this link with your opponent: <a href='#' class='opponent-link'></a>
        </div>


</div>
        
</body>
</html>