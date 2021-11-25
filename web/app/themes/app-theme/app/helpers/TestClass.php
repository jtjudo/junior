<?php
namespace TestClass2;
use TestClass3\TestClass4;

class TestClass extends TestClass4
{
	public $name;
	public $surename;
//	public function fio()
//	{
//		$res = 'Имя:' . $this->name . 'Фамилия:' . $this->surename;
//	}

	public function __construct($name, $surename)
	{
		$this->name = $name;
		$this->surename = $surename;
	}
}

