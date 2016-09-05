<?php

namespace NemEDI;

class UploadFile
{

    /**
     * @var base64Binary $f
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
     * @var boolean $Recognize
     */
    protected $Recognize = null;

    /**
     * @var boolean $Process
     */
    protected $Process = null;

    /**
     * @var boolean $Print
     */
    protected $Print = null;

    /**
     * @param base64Binary $f
     * @param string $FileName
     * @param int $CustomerNumber
     * @param string $Password
     * @param boolean $Recognize
     * @param boolean $Process
     * @param boolean $Print
     */
    public function __construct($f, $FileName, $CustomerNumber, $Password, $Recognize = false, $Process = false, $Print = false)
    {
      $this->f = $f;
      $this->FileName = $FileName;
      $this->CustomerNumber = $CustomerNumber;
      $this->Password = $Password;
      $this->Recognize = $Recognize;
      $this->Process = $Process;
      $this->Print = $Print;
    }

    /**
     * @return base64Binary
     */
    public function getF()
    {
      return $this->f;
    }

    /**
     * @param base64Binary $f
     * @return \NemEDI\UploadFile
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
     * @return \NemEDI\UploadFile
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
     * @return \NemEDI\UploadFile
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
     * @return \NemEDI\UploadFile
     */
    public function setPassword($Password)
    {
      $this->Password = $Password;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getRecognize()
    {
      return $this->Recognize;
    }

    /**
     * @param boolean $Recognize
     * @return \NemEDI\UploadFile
     */
    public function setRecognize($Recognize)
    {
      $this->Recognize = $Recognize;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getProcess()
    {
      return $this->Process;
    }

    /**
     * @param boolean $Process
     * @return \NemEDI\UploadFile
     */
    public function setProcess($Process)
    {
      $this->Process = $Process;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPrint()
    {
      return $this->Print;
    }

    /**
     * @param boolean $Print
     * @return \NemEDI\UploadFile
     */
    public function setPrint($Print)
    {
      $this->Print = $Print;
      return $this;
    }

}
