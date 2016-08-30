<?php

namespace NemEDI;

class StringArray
{

    /**
     * @var string[] $StringArray
     */
    protected $StringArray = null;

    /**
     * @param string[] $StringArray
     */
    public function __construct(array $StringArray)
    {
      $this->StringArray = $StringArray;
    }

    /**
     * @return string[]
     */
    public function getStringArray()
    {
      return $this->StringArray;
    }

    /**
     * @param string[] $StringArray
     * @return \NemEDI\StringArray
     */
    public function setStringArray(array $StringArray)
    {
      $this->StringArray = $StringArray;
      return $this;
    }

}
