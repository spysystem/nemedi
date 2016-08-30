<?php

namespace NemEDI;

class ReleaseDocument
{

    /**
     * @var string $DocKey
     */
    protected $DocKey = null;

    /**
     * @param string $DocKey
     */
    public function __construct($DocKey)
    {
      $this->DocKey = $DocKey;
    }

    /**
     * @return string
     */
    public function getDocKey()
    {
      return $this->DocKey;
    }

    /**
     * @param string $DocKey
     * @return \NemEDI\ReleaseDocument
     */
    public function setDocKey($DocKey)
    {
      $this->DocKey = $DocKey;
      return $this;
    }

}
