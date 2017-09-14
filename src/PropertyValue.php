<?php

namespace NemEDI;

class PropertyValue
{

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var mixed $Value
     */
    protected $Value = null;


    public function __construct()
    {

    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return \NemEDI\PropertyValue
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
      return $this->Value;
    }

    /**
     * @param mixed $Value
     * @return \NemEDI\PropertyValue
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

}
