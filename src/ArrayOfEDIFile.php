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
    	if (is_array($this->EDIFile))
		{
			return $this->EDIFile;
		}
		else
		{
			return [$this->EDIFile];
		}
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
