<?php

namespace NemEDI;

class Label
{

    /**
     * @var string $Content
     */
    protected $Content = null;

    /**
     * @var int $Copies
     */
    protected $Copies = null;

    /**
     * @var ArrayOfPropertyValue $Properties
     */
    protected $Properties = null;

    /**
     * @param int $Copies
     */
    public function __construct($Copies)
    {
      $this->Copies = $Copies;
    }

    /**
     * @return string
     */
    public function getContent()
    {
      return $this->Content;
    }

    /**
     * @param string $Content
     * @return \NemEDI\Label
     */
    public function setContent($Content)
    {
      $this->Content = $Content;
      return $this;
    }

    /**
     * @return int
     */
    public function getCopies()
    {
      return $this->Copies;
    }

    /**
     * @param int $Copies
     * @return \NemEDI\Label
     */
    public function setCopies($Copies)
    {
      $this->Copies = $Copies;
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
     * @return \NemEDI\Label
     */
    public function setProperties($Properties)
    {
      $this->Properties = $Properties;
      return $this;
    }

}
