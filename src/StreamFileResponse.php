<?php

namespace NemEDI;

class StreamFileResponse
{

    /**
     * @var string $StreamFileResult
     */
    protected $StreamFileResult = null;

    /**
     * @param string $StreamFileResult
     */
    public function __construct($StreamFileResult)
    {
      $this->StreamFileResult = $StreamFileResult;
    }

    /**
     * @return string
     */
    public function getStreamFileResult()
    {
      return $this->StreamFileResult;
    }

    /**
     * @param string $StreamFileResult
     * @return \NemEDI\StreamFileResponse
     */
    public function setStreamFileResult($StreamFileResult)
    {
      $this->StreamFileResult = $StreamFileResult;
      return $this;
    }

}
