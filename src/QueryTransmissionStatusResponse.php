<?php

namespace NemEDI;

class QueryTransmissionStatusResponse
{

    /**
     * @var string $QueryTransmissionStatusResult
     */
    protected $QueryTransmissionStatusResult = null;

    /**
     * @var Transmission $Transmission
     */
    protected $Transmission = null;

    /**
     * @param string $QueryTransmissionStatusResult
     * @param Transmission $Transmission
     */
    public function __construct($QueryTransmissionStatusResult, $Transmission)
    {
      $this->QueryTransmissionStatusResult = $QueryTransmissionStatusResult;
      $this->Transmission = $Transmission;
    }

    /**
     * @return string
     */
    public function getQueryTransmissionStatusResult()
    {
      return $this->QueryTransmissionStatusResult;
    }

    /**
     * @param string $QueryTransmissionStatusResult
     * @return \NemEDI\QueryTransmissionStatusResponse
     */
    public function setQueryTransmissionStatusResult($QueryTransmissionStatusResult)
    {
      $this->QueryTransmissionStatusResult = $QueryTransmissionStatusResult;
      return $this;
    }

    /**
     * @return Transmission
     */
    public function getTransmission()
    {
      return $this->Transmission;
    }

    /**
     * @param Transmission $Transmission
     * @return \NemEDI\QueryTransmissionStatusResponse
     */
    public function setTransmission($Transmission)
    {
      $this->Transmission = $Transmission;
      return $this;
    }

}
