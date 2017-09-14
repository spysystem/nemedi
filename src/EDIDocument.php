<?php

namespace NemEDI;

class EDIDocument
{

    /**
     * @var DocumentTypes $Documenttype
     */
    protected $Documenttype = null;

    /**
     * @var ArrayOfPropertyValue $Properties
     */
    protected $Properties = null;

    /**
     * @var ArrayOfEDIDocumentLine $Lines
     */
    protected $Lines = null;

    /**
     * @param DocumentTypes $Documenttype
     */
    public function __construct($Documenttype)
    {
      $this->Documenttype = $Documenttype;
    }

    /**
     * @return DocumentTypes
     */
    public function getDocumenttype()
    {
      return $this->Documenttype;
    }

    /**
     * @param DocumentTypes $Documenttype
     * @return \NemEDI\EDIDocument
     */
    public function setDocumenttype($Documenttype)
    {
      $this->Documenttype = $Documenttype;
      return $this;
    }

    /**
     * @return ArrayOfPropertyValue
     */
    public function getProperties()
    {
      return $this->Properties;
    }

    /**
     * @param ArrayOfPropertyValue $Properties
     * @return \NemEDI\EDIDocument
     */
    public function setProperties($Properties)
    {
      $this->Properties = $Properties;
      return $this;
    }

    /**
     * @return ArrayOfEDIDocumentLine
     */
    public function getLines()
    {
      return $this->Lines;
    }

    /**
     * @param ArrayOfEDIDocumentLine $Lines
     * @return \NemEDI\EDIDocument
     */
    public function setLines($Lines)
    {
      $this->Lines = $Lines;
      return $this;
    }

}
