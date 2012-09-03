<div id="managers-add-view">
	<?php
	
		echo $this->Form->error('title');
		
		if(isset($validationError))
			echo $validationError;
	?>
	
	<?php
		echo $this->Form->create("Newsletter",array('url' => array('controller' => 'newsletters', 'action' =>'add', 'manager' => true), 'type' => 'file'));
	?>
	
	<p>
		<label for="name">Name:</label>
		<?php echo $this->Form->input('title',array('label' => false)) ?>
	</p>
	
	
	<p>
		<label for="content">inhalt:</label>
		<p><textarea id ="NewsletterContent" name="data[Newsletter][content]" cols="60" rows="60" ></textarea></p>
	</p>
	
	<input type="file" name="data[Images][]" multiple="multiple">
	<p>		
		<?php echo $this->Form->button('save',array('type' => "submit")) ?>
	</p>


	
	<?php
		echo $this->Form->end();
	?>

	

	
</div>