<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

	<title>EHSM-2014 / June 27-29 / Hamburg</title>
	
	<link rel="stylesheet" type="text/css" media="screen" href="style.css" />
	<link href="http://fonts.googleapis.com/css?family=Cabin+Sketch:bold" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

</head>

<body>

<div id="wrapper">

<center style="padding-top: 2em;">
<img src="logo_web.png">

</center>

 <div class="column" style="width: 100%; padding-bottom:5em;">
        <div class="inner">

<h3>Feedback</h3>

<p>
	Thank you for providing feedback!
</p>

<?
$fh = fopen("feedback/results.txt", 'a');

fwrite($fh, $_REQUEST['general']);
fwrite($fh, "\n");
fwrite($fh, $_REQUEST['heard']);
fwrite($fh, "\n");
fwrite($fh, $_REQUEST['heardother']);
fwrite($fh, "\n");
fwrite($fh, $_REQUEST['been2012']);
fwrite($fh, "\n");
fwrite($fh, $_REQUEST['motivation']);
fwrite($fh, "\n--------\n");
fwrite($fh, $_REQUEST['howimprove']);
fwrite($fh, "\n--------\n");
fwrite($fh, $_REQUEST['etc']);
fwrite($fh, "\n\n################################\n\n");
fclose($fh);
?>

</div> <!-- .inner -->
</div> <!-- .column -->
</div> <!-- #wrapper -->

</body>
</html>
