<?php

namespace NemEDI;

class ListNewFiles
{

    /**
     * @var ArrayOfGuid $EDIFiles
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
     * @param ArrayOfGuid $EDIFiles
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
     * @return ArrayOfGuid
     */
    public function getEDIFiles()
    {
      return $this->EDIFiles;
    }

    /**
     * @param ArrayOfGuid $EDIFiles
     * @return \NemEDI\ListNewFiles
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
     * @return \NemEDI\ListNewFiles
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
     * @return \NemEDI\ListNewFiles
     */
    public function setPassword($Password)
    {
      $this->Password = $Password;
      return $this;
    }

}
