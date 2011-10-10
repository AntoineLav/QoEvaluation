		<!-- Primary Page Layout
	================================================== -->

	<!-- Delete everything in this .container and get started on your own site! -->

	<div class="container">
		<div class="sixteen columns">
			<h1 class="remove-bottom" style="margin-top: 40px">QoE evaluation</h1>
		</div>
		<div class="eight columns">
			<h5>Version 1.1</h5>
		</div>
		<div class="eight columns">
			<h6 class="signature">@ A. Lavignotte</h6>
		</div>
		<hr />
	</div>
		
	<div class="container">
		
		<div class="offset-by-four seven columns down">
			<h5  id="tableTitle" class="offset-by-one three columns">To conclude</h5>
			<div id="form" class="seven columns">
			 	<h5>Can you tell us at which grade you could watch the movie during 1h30 :</h5>
			 	<?php 
			 	echo $this->Form->create('Notes', array('action' => 'saveAverage'));
			 	
			 	$options = array('1' => 1, '2' => 2, '3' => 3, '4' => 4, '5' => 5);
			 	$attributes = array('legend' => 'Grade');
			 	echo $this->Form->radio('Note.note', $options, $attributes);
			 	
			 	echo $this->Form->hidden('Note.user_id', array('value' => $_COOKIE['userId']));
			 	echo $this->Form->hidden('Note.video_id', array('value' => $_COOKIE['videoNumber']));
			 	
			 	echo $this->Form->submit('Finnish');
			 	?>
			</div>
		</div>
		
	</div>



<!-- End Document
================================================== -->