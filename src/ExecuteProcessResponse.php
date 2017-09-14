<?php

namespace NemEDI;

class ExecuteProcessResponse
{

    /**
     * @var string $ExecuteProcessResult
     */
    protected $ExecuteProcessResult = null;

    /**
     * @param string $ExecuteProcessResult
     */
    public function __construct($ExecuteProcessResult)
    {
      $this->ExecuteProcessResult = $ExecuteProcessResult;
    }

    /**
     * @return string
     */
    public function getExecuteProcessResult()
    {
      return $this->ExecuteProcessResult;
    }

    /**
     * @param string $ExecuteProcessResult
     * @return \NemEDI\ExecuteProcessResponse
     */
    public function setExecuteProcessResult($ExecuteProcessResult)
    {
      $this->ExecuteProcessResult = $ExecuteProcessResult;
      return $this;
    }

}
