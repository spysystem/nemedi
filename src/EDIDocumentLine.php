<?php

namespace NemEDI;

class EDIDocumentLine
{

	/**
	 * @var ArrayOfPropertyValue $Properties
	 */
	protected $Properties = null;

	
	public function __construct()
	{
	
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
	 * @return \NemEDI\EDIDocumentLine
	 */
	public function setProperties($Properties)
	{
		$this->Properties = $Properties;
		return $this;
	}

}
