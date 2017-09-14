<?php

namespace NemEDI;

class SearchDocument
{
	const DefaultDocumentID	= '00000000-0000-0000-0000-000000000000';

    /**
     * @var string $DocumentID
     */
    protected $DocumentID = null;

    /**
     * @var string $DocType
     */
    protected $DocType = null;

    /**
     * @var string $Field
     */
    protected $Field = null;

    /**
     * @var string $Value
     */
    protected $Value = null;

    /**
     * @var int $CustomerNumber
     */
    protected $CustomerNumber = null;

    /**
     * @var string $Password
     */
    protected $Password = null;

    /**
     * @param string $DocumentID
     * @param string $DocType
     * @param string $Field
     * @param string $Value
     * @param int $CustomerNumber
     * @param string $Password
     */
    public function __construct($DocumentID, $DocType, $Field, $Value, $CustomerNumber, $Password)
    {
      $this->DocumentID = $DocumentID;
      $this->DocType = $DocType;
      $this->Field = $Field;
      $this->Value = $Value;
      $this->CustomerNumber = $CustomerNumber;
      $this->Password = $Password;
    }

    /**
     * @return string
     */
    public function getDocumentID()
    {
      return $this->DocumentID;
    }

    /**
     * @param string $DocumentID
     * @return \NemEDI\SearchDocument
     */
    public function setDocumentID($DocumentID)
    {
      $this->DocumentID = $DocumentID;
      return $this;
    }

    /**
     * @return string
     */
    public function getDocType()
    {
      return $this->DocType;
    }

    /**
     * @param string $DocType
     * @return \NemEDI\SearchDocument
     */
    public function setDocType($DocType)
    {
      $this->DocType = $DocType;
      return $this;
    }

    /**
     * @return string
     */
    public function getField()
    {
      return $this->Field;
    }

    /**
     * @param string $Field
     * @return \NemEDI\SearchDocument
     */
    public function setField($Field)
    {
      $this->Field = $Field;
      return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
      return $this->Value;
    }

    /**
     * @param string $Value
     * @return \NemEDI\SearchDocument
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
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
     * @return \NemEDI\SearchDocument
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
     * @return \NemEDI\SearchDocument
     */
    public function setPassword($Password)
    {
      $this->Password = $Password;
      return $this;
    }

}
