<?php

namespace NemEDI;

class QueryTransmissionStatus
{

	/**
	 * @var Transmission $Transmission
	 */
	protected $Transmission = null;

	/**
     * @var string $DocID
	 */
	protected $DocID = null;

	/**
	 * @var int $CustomerNumber
	 */
	protected $CustomerNumber = null;

	/**
	 * @var string $Password
	 */
	protected $Password = null;

	/**
	 * @param Transmission $Transmission
     * @param string $DocID
	 * @param int $CustomerNumber
	 * @param string $Password
	 */
	public function __construct($Transmission, $DocID, $CustomerNumber, $Password)
	{
		$this->Transmission = $Transmission;
		$this->DocID = $DocID;
		$this->CustomerNumber = $CustomerNumber;
		$this->Password = $Password;
	}

	/**
	 * @return Transmission
	 */
	public function getTransmission()
	{
		return $this->Transmission;
	}

	/**
	 * @param Transmission $Transmission
	 * @return \NemEDI\QueryTransmissionStatus
	 */
	public function setTransmission($Transmission)
	{
		$this->Transmission = $Transmission;
		return $this;
	}

	/**
     * @return string
	 */
	public function getDocID()
	{
		return $this->DocID;
	}

	/**
     * @param string $DocID
	 * @return \NemEDI\QueryTransmissionStatus
	 */
	public function setDocID($DocID)
	{
		$this->DocID = $DocID;
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
	 * @return \NemEDI\QueryTransmissionStatus
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
	 * @return \NemEDI\QueryTransmissionStatus
	 */
	public function setPassword($Password)
	{
		$this->Password = $Password;
		return $this;
	}

}
