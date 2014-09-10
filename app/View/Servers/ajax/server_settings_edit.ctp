<?php
	echo $this->Form->create('Server', array('class' => 'inline-form inline-field-form', 'url' => '/servers/serverSettingsEdit/' . $setting['setting'], 'id' => 'setting_' . $id . '_form'));
?>
	<div class='inline-input inline-input-container'>	
	<div class="inline-input-accept inline-input-button inline-input-passive"><span class = "icon-ok"></span></div>	
	<div class="inline-input-decline inline-input-button inline-input-passive"><span class = "icon-remove"></span></div>	
<?php 
	if ($setting['test'] != 'testBool') {
		echo $this->Form->input('value', array(
				'type' => 'text',
				'label' => false,
				'value' => $setting['value'],
				'error' => array('escape' => false),
				'class' => 'inline-input',
				'id' => 'setting_' . $id . '_field',
				'div' => false
		));
	} else {
		echo $this->Form->input('value', array(
				'label' => false,
				'options' => array(false => 'false', true => 'true'),
				'value' => $setting['value'],
				'class' => 'inline-input',
				'id' => 'setting_' . $id . '_field',
				'div' => false
		));
	}
?>
	</div>
<?php 
	echo $this->Form->end();
?>
