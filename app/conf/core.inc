<?php
Core::set('debug', 1);
Core::set('App.Encoding', 'UTF-8');
Core::set('App.Module', array(
	'admin',
	'crm' => 'abc'
));
?>