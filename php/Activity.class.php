<?php
use Page;
use Request;

class Activity extends Page {
	
	/*
	 * @Overridable
	 */
	protected function before(){
		$this->argv_ = Request::in();
		$this->noVisual();
		$this->result_ = "@";
	}

}
