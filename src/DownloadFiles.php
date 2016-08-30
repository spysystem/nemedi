<?php

namespace NemEDI;

class DownloadFiles
{

    /**
     * @var ArrayOfEDIFile $EDIFiles
     */
    protected $EDIFiles = null;

    /**
     * @var int $CustomerNumber
     */
    protected $CustomerNumber = null;

    /**
     * @var string $Password
     */
    protected $Password = null;

    /**
     * @param ArrayOfEDIFile $EDIFiles
     * @param int $CustomerNumber
     * @param string $Password
     */
    public function __construct($EDIFiles, $CustomerNumber, $Password)
    {
      $this->EDIFiles = $EDIFiles;
      $this->CustomerNumber = $CustomerNumber;
      $this->Password = $Password;
    }

    /**
     * @return ArrayOfEDIFile
     */
    public function getEDIFiles()
    {
      return $this->EDIFiles;
    }

    /**
     * @param ArrayOfEDIFile $EDIFiles
     * @return \NemEDI\DownloadFiles
     */
    public function setEDIFiles($EDIFiles)
    {
      $this->EDIFiles = $EDIFiles;
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
     * @return \NemEDI\DownloadFiles
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
     * @return \NemEDI\DownloadFiles
     */
    public function setPassword($Password)
    {
      $this->Password = $Password;
      return $this;
    }

}
