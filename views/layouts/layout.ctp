<html>
<head>
	<title>QoE Evaluation</title>
	<?php 
		header('content-type: text/html; charset=utf-8');
		echo $this->Html->css(array('base','layout','skeleton','accueil'));
		echo $this->Html->script(array('tabs','keyboard','jquery','jquery.cookie'));
	?>

</head>
<body>
	<?php
		echo $content_for_layout;
		//echo $this->element('sql_dump');
	?>
</body>
</html>