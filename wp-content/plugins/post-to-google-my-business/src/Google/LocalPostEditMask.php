<?php


namespace PGMB\Google;


class LocalPostEditMask {
	private $livePostFlat, $updatedPostFlat = [];
	private $mask;

	public function __construct($livePost, LocalPost $updatedPost) {
		$this->walk((array)$livePost, $this->livePostFlat);
		$this->walk($updatedPost->getArray(), $this->updatedPostFlat);
		$this->mask = implode(',', array_keys(array_diff_assoc($this->updatedPostFlat, $this->livePostFlat)));
	}

	private function walk($array, &$output, $parent = ''){
		foreach($array as $key => $value){
			if(is_array($value)){
				$this->walk($value, $output, "{$key}.");
				continue;
			}
			$output[$parent.$key] = $value;
		}
	}

	public function getMask(){
		return $this->mask;
	}
}
