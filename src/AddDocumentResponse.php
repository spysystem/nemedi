<?php

namespace NemEDI;

class AddDocumentResponse
{

    /**
     * @var string $AddDocumentResult
     */
    protected $AddDocumentResult = null;

    /**
     * @var EDIDocument $Document
     */
    protected $Document = null;

    /**
     * @param string $AddDocumentResult
     * @param EDIDocument $Document
     */
    public function __construct($AddDocumentResult, $Document)
    {
      $this->AddDocumentResult = $AddDocumentResult;
      $this->Document = $Document;
    }

    /**
     * @return string
     */
    public function getAddDocumentResult()
    {
      return $this->AddDocumentResult;
    }

    /**
     * @param string $AddDocumentResult
     * @return \NemEDI\AddDocumentResponse
     */
    public function setAddDocumentResult($AddDocumentResult)
    {
      $this->AddDocumentResult = $AddDocumentResult;
      return $this;
    }

    /**
     * @return EDIDocument
     */
    public function getDocument()
    {
      return $this->Document;
    }

    /**
     * @param EDIDocument $Document
     * @return \NemEDI\AddDocumentResponse
     */
    public function setDocument($Document)
    {
      $this->Document = $Document;
      return $this;
    }

}
