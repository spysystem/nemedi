<?php

namespace NemEDI;

class ArrayOfEDIDocumentLine
{

    /**
     * @var EDIDocumentLine[] $EDIDocumentLine
     */
    protected $EDIDocumentLine = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return EDIDocumentLine[]
     */
    public function getEDIDocumentLine()
    {
      return $this->EDIDocumentLine;
    }

    /**
     * @param EDIDocumentLine[] $EDIDocumentLine
     * @return \NemEDI\ArrayOfEDIDocumentLine
     */
    public function setEDIDocumentLine(array $EDIDocumentLine)
    {
      $this->EDIDocumentLine = $EDIDocumentLine;
      return $this;
    }

}
