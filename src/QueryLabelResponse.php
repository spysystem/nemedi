<?php

namespace NemEDI;

class QueryLabelResponse
{

    /**
     * @var string $QueryLabelResult
     */
    protected $QueryLabelResult = null;

    /**
     * @param string $QueryLabelResult
     */
    public function __construct($QueryLabelResult)
    {
      $this->QueryLabelResult = $QueryLabelResult;
    }

    /**
     * @return string
     */
    public function getQueryLabelResult()
    {
      return $this->QueryLabelResult;
    }

    /**
     * @param string $QueryLabelResult
     * @return \NemEDI\QueryLabelResponse
     */
    public function setQueryLabelResult($QueryLabelResult)
    {
      $this->QueryLabelResult = $QueryLabelResult;
      return $this;
    }

}
