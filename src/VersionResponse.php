<?php

namespace NemEDI;

class VersionResponse
{

	/**
	 * @var string $VersionResult
	 */
	protected $VersionResult = null;

	/**
	 * @param string $VersionResult
	 */
	public function __construct($VersionResult)
	{
		$this->VersionResult = $VersionResult;
	}

	/**
	 * @return string
	 */
	public function getVersionResult()
	{
		return $this->VersionResult;
	}

	/**
	 * @param string $VersionResult
	 * @return \NemEDI\VersionResponse
	 */
	public function setVersionResult($VersionResult)
	{
		$this->VersionResult = $VersionResult;
		return $this;
	}

}
