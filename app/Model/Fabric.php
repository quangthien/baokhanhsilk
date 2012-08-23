<?php
App::uses('AuthComponent', 'Controller/Component');
class Fabric extends AppModel {
	public $name = 'Fabric';
	
	var $belongsTo = array('Collection' => array('className' => 'Collection'));
	
	var $validate = array(
		'code' => array(
			'required' => true,
			'allowEmpty' => false,
			'rule' => array('minLength' => 255),
			'message' => 'This field is required.'
		)
	);
}

?>