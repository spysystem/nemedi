<?php

namespace NemEDI;

class ListAllFiles
{

    /**
     * @var ArrayOfGuid $EDIFiles
     */
    protected $EDIFiles = null;

    /**
     * @var \DateTime $FromDate
     */
    protected $FromDate = null;

    /**
     * @var \DateTime $ToDate
     */
    protected $ToDate = null;

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
     * @param \DateTime $FromDate
     * @param \DateTime $ToDate
     * @param int $CustomerNumber
     * @param string $Password
     */
    public function __construct($EDIFiles, \DateTime $FromDate, \DateTime $ToDate, $CustomerNumber, $Password)
    {
      $this->EDIFiles = $EDIFiles;
      $this->FromDate = $FromDate->format(\DateTime::ATOM);
      $this->ToDate = $ToDate->format(\DateTime::ATOM);
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
     * @return \NemEDI\ListAllFiles
     */
    public function setEDIFiles($EDIFiles)
    {
      $this->EDIFiles = $EDIFiles;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getFromDate()
    {
      if ($this->FromDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->FromDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $FromDate
     * @return \NemEDI\ListAllFiles
     */
    public function setFromDate(\DateTime $FromDate)
    {
      $this->FromDate = $FromDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getToDate()
    {
      if ($this->ToDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ToDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ToDate
     * @return \NemEDI\ListAllFiles
     */
    public function setToDate(\DateTime $ToDate)
    {
      $this->ToDate = $ToDate->format(\DateTime::ATOM);
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
     * @return \NemEDI\ListAllFiles
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
     * @return \NemEDI\ListAllFiles
     */
    public function setPassword($Password)
    {
      $this->Password = $Password;
      return $this;
    }

}
