<?php

namespace NemEDI;

class ReleaseDocumentResponse
{

	/**
	 * @var string $ReleaseDocumentResult
	 */
	protected $ReleaseDocumentResult = null;

	/**
	 * @param string $ReleaseDocumentResult
	 */
	public function __construct($ReleaseDocumentResult)
	{
		$this->ReleaseDocumentResult = $ReleaseDocumentResult;
	}

	/**
	 * @return string
	 */
	public function getReleaseDocumentResult()
	{
		return $this->ReleaseDocumentResult;
	}

	/**
	 * @param string $ReleaseDocumentResult
	 * @return \NemEDI\ReleaseDocumentResponse
	 */
	public function setReleaseDocumentResult($ReleaseDocumentResult)
	{
		$this->ReleaseDocumentResult = $ReleaseDocumentResult;
		return $this;
	}

}
