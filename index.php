<?php

$greeting = "Hello World";
$names = ['Galen','Justine','Danelle'];
$person = ['age'=>31,'haircolor'=>"black",'career'=>"student",'human'=>true];
$person['name'] = "Galen";

require 'functions.php';
class Task{
	protected $description;
	protected $completed = false;

	public function __construct($description){
		$this ->description=$description;
	}
	public function isCompleted(){
		return $this-> completed;
	}
	public function complete(){
		$this-> completed = true;
	}
	public function getDescription(){
		return $this->description;
	}
}

$tasks = [
	new Task('First task'),
	new Task('Second Task'),
	new Task('Third Task')
];

$tasks[0]->complete();
require 'index.view.php';
die(dumper($tasks));

new PDO('mysql:host=127.0.0.1;dbname=mytodo','root','');