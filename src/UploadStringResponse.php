<?php

namespace NemEDI;

class UploadStringResponse
{

	/**
	 * @var string $UploadStringResult
	 */
	protected $UploadStringResult = null;

	/**
	 * @param string $UploadStringResult
	 */
	public function __construct($UploadStringResult)
	{
		$this->UploadStringResult = $UploadStringResult;
	}

	/**
	 * @return string
	 */
	public function getUploadStringResult()
	{
		return $this->UploadStringResult;
	}

	/**
	 * @param string $UploadStringResult
	 * @return \NemEDI\UploadStringResponse
	 */
	public function setUploadStringResult($UploadStringResult)
	{
		$this->UploadStringResult = $UploadStringResult;
		return $this;
	}

}
