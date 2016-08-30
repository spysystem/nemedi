<?php

namespace NemEDI;

class EDIFile
{

    /**
     * @var string $FileName
     */
    protected $FileName = null;

    /**
     * @var base64Binary $FileContect
     */
    protected $FileContect = null;

    /**
     * @param string $FileName
     * @param base64Binary $FileContect
     */
    public function __construct($FileName, $FileContect)
    {
      $this->FileName = $FileName;
      $this->FileContect = $FileContect;
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
     * @return \NemEDI\EDIFile
     */
    public function setFileName($FileName)
    {
      $this->FileName = $FileName;
      return $this;
    }

    /**
     * @return base64Binary
     */
    public function getFileContect()
    {
      return $this->FileContect;
    }

    /**
     * @param base64Binary $FileContect
     * @return \NemEDI\EDIFile
     */
    public function setFileContect($FileContect)
    {
      $this->FileContect = $FileContect;
      return $this;
    }

}
