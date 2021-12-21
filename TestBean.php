<?php

class TestBean {
	private int $test;

	public function __construct(){
		$this->setTest(0);
	}

	/**
	 * @return int
	 */
	public function getTest(): int {
		return $this->test;
	}

	/**
	 * @param int $test
	 */
	public function setTest(int $test): void {
		$this->test = $test;
	}

}