<?php

namespace NemEDI;

class ArrayOfEDIFile
{

    /**
     * @var EDIFile[] $EDIFile
     */
    protected $EDIFile = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return EDIFile[]
     */
    public function getEDIFile()
    {
      return $this->EDIFile;
    }

    /**
     * @param EDIFile[] $EDIFile
     * @return \NemEDI\ArrayOfEDIFile
     */
    public function setEDIFile(array $EDIFile)
    {
      $this->EDIFile = $EDIFile;
      return $this;
    }

}
