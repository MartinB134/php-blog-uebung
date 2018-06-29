<?php

class NewClass extends ParentClass  {

//Poperties and methods
	public $data = "I am a property";

	public function setNewproperty($newdata) {
		$this->data = $newdata;
	}

	public function getProperty(){
		return $this->data;
	}
 } 

$initiate = new NewClass;

$newdata = "New Property now meee, haha";

?>