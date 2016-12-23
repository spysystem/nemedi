<?php

namespace NemEDI;

class DownloadFile
{

    /**
     * @var EDIFile $EDIFile
     */
    protected $EDIFile = null;

    /**
     * @var string $FileID
     */
    protected $FileID = null;

    /**
     * @var int $CustomerNumber
     */
    protected $CustomerNumber = null;

    /**
     * @var string $Password
     */
    protected $Password = null;

    /**
     * @param EDIFile $EDIFile
     * @param string $FileID
     * @param int $CustomerNumber
     * @param string $Password
     */
    public function __construct($EDIFile, $FileID, $CustomerNumber, $Password)
    {
      $this->EDIFile = $EDIFile;
      $this->FileID = $FileID;
      $this->CustomerNumber = $CustomerNumber;
      $this->Password = $Password;
    }

    /**
     * @return EDIFile
     */
    public function getEDIFile()
    {
      return $this->EDIFile;
    }

    /**
     * @param EDIFile $EDIFile
     * @return \NemEDI\DownloadFile
     */
    public function setEDIFile($EDIFile)
    {
      $this->EDIFile = $EDIFile;
      return $this;
    }

    /**
     * @return string
     */
    public function getFileID()
    {
      return $this->FileID;
    }

    /**
     * @param string $FileID
     * @return \NemEDI\DownloadFile
     */
    public function setFileID($FileID)
    {
      $this->FileID = $FileID;
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
     * @return \NemEDI\DownloadFile
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
     * @return \NemEDI\DownloadFile
     */
    public function setPassword($Password)
    {
      $this->Password = $Password;
      return $this;
    }

}
