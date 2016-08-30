<?php

namespace NemEDI;

class ArrayOfPropertyValue
{

    /**
     * @var PropertyValue[] $PropertyValue
     */
    protected $PropertyValue = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PropertyValue[]
     */
    public function getPropertyValue()
    {
      return $this->PropertyValue;
    }

    /**
     * @param PropertyValue[] $PropertyValue
     * @return \NemEDI\ArrayOfPropertyValue
     */
    public function setPropertyValue(array $PropertyValue)
    {
      $this->PropertyValue = $PropertyValue;
      return $this;
    }

}
