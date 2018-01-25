<?php

namespace NemEDI;

class DownloadLabel
{

	/**
	 * @var Label $Label
	 */
	protected $Label = null;

	/**
	 * @var int $CustomerNumber
	 */
	protected $CustomerNumber = null;

	/**
	 * @var string $Password
	 */
	protected $Password = null;

	/**
	 * @param Label $Label
	 * @param int $CustomerNumber
	 * @param string $Password
	 */
	public function __construct($Label, $CustomerNumber, $Password)
	{
		$this->Label = $Label;
		$this->CustomerNumber = $CustomerNumber;
		$this->Password = $Password;
	}

	/**
	 * @return Label
	 */
	public function getLabel()
	{
		return $this->Label;
	}

	/**
	 * @param Label $Label
	 * @return \NemEDI\DownloadLabel
	 */
	public function setLabel($Label)
	{
		$this->Label = $Label;
		return $this;
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
	 * @return \NemEDI\DownloadLabel
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
	 * @return \NemEDI\DownloadLabel
	 */
	public function setPassword($Password)
	{
		$this->Password = $Password;
		return $this;
	}

}
