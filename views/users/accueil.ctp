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
		<h5  id="tableTitle" class="offset-by-one two columns">To begin</h5>
		<div id="form" class="seven columns">
		 	<?php
		 	echo $this->Session->flash();
		 	
		 	echo $this->Form->create('User', array('action' => 'begin'));
		 	echo $this->Form->input('User.prenom', array('label' => 'Firstname'));
		 	echo $this->Form->input('User.nom', array('label' => 'Lastname'));
		 	echo $this->Form->input('User.age', array('label' => 'Age'));
		 	
		 	$options = array('Male' => 'Male', 'Female' => 'Female');
		 	$attributes = array('legend' => 'Gender');
		 	
		 	echo $this->Form->radio('User.sexe', $options, $attributes);
		 	
		 	echo $this->Form->submit('Begin...');
		 	?>	
		</div>
	</div>
	
</div>


