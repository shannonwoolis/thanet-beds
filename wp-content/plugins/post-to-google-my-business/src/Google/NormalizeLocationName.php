<?php

namespace PGMB\Google;

class NormalizeLocationName {

	private $account_id;
	private $location_id;

	public function __construct($account_id, $location_id){
		if(!is_numeric($account_id) || !is_numeric($location_id)){
			throw new \InvalidArgumentException('One of the passed IDs is not numeric');
		}
		$this->account_id = $account_id;
		$this->location_id = $location_id;
	}

	public static function from_with_account($name){
		if(!preg_match('/accounts\/(\d+)\/locations\/(\d+)/', $name, $matches)){
			return false;
		}
		return new static($matches[1], $matches[2]);
	}

	public static function from_without_account($name, $account_id){
		if(!preg_match('/locations\/(\d+)/', $name, $matches)){
			return false;
		}
		return new static($account_id, $matches[1]);
	}

	public function with_account_id(){
		return "accounts/{$this->account_id}/locations/{$this->location_id}";
	}

	public function without_account_id(){
		return "locations/{$this->location_id}";
	}
}