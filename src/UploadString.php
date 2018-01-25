<?php

namespace NemEDI;

class UploadString
{

	/**
	 * @var string $f
	 */
	protected $f = null;

	/**
	 * @var string $FileName
	 */
	protected $FileName = null;

	/**
	 * @var int $CustomerNumber
	 */
	protected $CustomerNumber = null;

	/**
	 * @var string $Password
	 */
	protected $Password = null;

	/**
	 * @param string $f
	 * @param string $FileName
	 * @param int $CustomerNumber
	 * @param string $Password
	 */
	public function __construct($f, $FileName, $CustomerNumber, $Password)
	{
		$this->f = $f;
		$this->FileName = $FileName;
		$this->CustomerNumber = $CustomerNumber;
		$this->Password = $Password;
	}

	/**
	 * @return string
	 */
	public function getF()
	{
		return $this->f;
	}

	/**
	 * @param string $f
	 * @return \NemEDI\UploadString
	 */
	public function setF($f)
	{
		$this->f = $f;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getFileName()
	{
		return $this->FileName;
	}

	/**
	 * @param string $FileName
	 * @return \NemEDI\UploadString
	 */
	public function setFileName($FileName)
	{
		$this->FileName = $FileName;
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
	 * @return \NemEDI\UploadString
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
	 * @return \NemEDI\UploadString
	 */
	public function setPassword($Password)
	{
		$this->Password = $Password;
		return $this;
	}

}
