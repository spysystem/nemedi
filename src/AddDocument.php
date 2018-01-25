<?php

namespace NemEDI;

class AddDocument
{

	/**
	 * @var EDIDocument $Document
	 */
	protected $Document = null;

	/**
	 * @var boolean $Approved
	 */
	protected $Approved = null;

	/**
	 * @var int $PartnerID
	 */
	protected $PartnerID = null;

	/**
	 * @var int $CustomerNumber
	 */
	protected $CustomerNumber = null;

	/**
	 * @var string $Password
	 */
	protected $Password = null;

	/**
	 * @param EDIDocument $Document
	 * @param boolean $Approved
	 * @param int $PartnerID
	 * @param int $CustomerNumber
	 * @param string $Password
	 */
	public function __construct($Document, $Approved, $PartnerID, $CustomerNumber, $Password)
	{
		$this->Document = $Document;
		$this->Approved = $Approved;
		$this->PartnerID = $PartnerID;
		$this->CustomerNumber = $CustomerNumber;
		$this->Password = $Password;
	}

	/**
	 * @return EDIDocument
	 */
	public function getDocument()
	{
		return $this->Document;
	}

	/**
	 * @param EDIDocument $Document
	 * @return \NemEDI\AddDocument
	 */
	public function setDocument($Document)
	{
		$this->Document = $Document;
		return $this;
	}

	/**
	 * @return boolean
	 */
	public function getApproved()
	{
		return $this->Approved;
	}

	/**
	 * @param boolean $Approved
	 * @return \NemEDI\AddDocument
	 */
	public function setApproved($Approved)
	{
		$this->Approved = $Approved;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getPartnerID()
	{
		return $this->PartnerID;
	}

	/**
	 * @param int $PartnerID
	 * @return \NemEDI\AddDocument
	 */
	public function setPartnerID($PartnerID)
	{
		$this->PartnerID = $PartnerID;
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
	 * @return \NemEDI\AddDocument
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
	 * @return \NemEDI\AddDocument
	 */
	public function setPassword($Password)
	{
		$this->Password = $Password;
		return $this;
	}

}
