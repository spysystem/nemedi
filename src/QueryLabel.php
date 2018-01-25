<?php

namespace NemEDI;

class QueryLabel
{

	/**
	 * @var int $CustomerNumber
	 */
	protected $CustomerNumber = null;

	/**
	 * @var string $Password
	 */
	protected $Password = null;

	/**
	 * @param int $CustomerNumber
	 * @param string $Password
	 */
	public function __construct($CustomerNumber, $Password)
	{
		$this->CustomerNumber = $CustomerNumber;
		$this->Password = $Password;
	}

	/**
	 * @return int
	 */
	public function getCustomerNumber()
	{
		return $this->CustomerNumber;
	}

	/**
	 * @param int $CustomerNumber
	 * @return \NemEDI\QueryLabel
	 */
	public function setCustomerNumber($CustomerNumber)
	{
		$this->CustomerNumber = $CustomerNumber;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getPassword()
	{
		return $this->Password;
	}

	/**
	 * @param string $Password
	 * @return \NemEDI\QueryLabel
	 */
	public function setPassword($Password)
	{
		$this->Password = $Password;
		return $this;
	}

}
