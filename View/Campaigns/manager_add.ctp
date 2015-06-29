<div class="newsletter-plugin" id="campaigns-manager-add">
<?php echo $this->Html->link('Übersicht',array('action' => 'index', 'manager' => true,'controller' => 'campaigns', 'plugin' => 'newsletter')) ?>
<h1>Kampagne erstellen</h1>
	<?php
		echo $this->Form->create("Campaign",array('url' => array(
																		'controller' => 'campaigns',
																		'action' =>'manager_add',
																		'manager' => true,
																		'plugin' => "newsletter")));
	?>
	
	<p>
		<label for="name">Name:</label>
		<?php echo $this->Form->input('name',array('label' => false)) ?>
	</p>
	
	
	<p>
		<label for="content">description:</label>
		<?php echo $this->Form->input('description'); ?> 
	</p>

	<p>
		<label for="tags">Aktive:</label>
		<?php echo $this->Form->input('active',array('label' => false,'type' => 'checkbox')) ?>
	</p>
	
	<p>		
		<?php echo $this->Form->button('save',array('type' => "submit")) ?>
	</p>
	
	<?php
		echo $this->Form->end();
	?>
</div>
