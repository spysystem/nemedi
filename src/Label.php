<?php

namespace NemEDI;

class Label
{

    /**
     * @var base64Binary $Content
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
     * @param base64Binary $Content
     * @param int $Copies
     * @param ArrayOfPropertyValue $Properties
     */
    public function __construct($Content, $Copies, $Properties)
    {
      $this->Content = $Content;
      $this->Copies = $Copies;
      $this->Properties = $Properties;
    }

    /**
     * @return base64Binary
     */
    public function getContent()
    {
      return $this->Content;
    }

    /**
     * @param base64Binary $Content
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
