<?php

namespace NemEDI;

class UploadFileResponse
{
	const	UploadFileResult_OK	= 'OK';

	/**
	 * @var string $UploadFileResult
	 */
	protected $UploadFileResult = null;

	/**
	 * @param string $UploadFileResult
	 */
	public function __construct($UploadFileResult)
	{
		$this->UploadFileResult = $UploadFileResult;
	}

	/**
	 * @return string
	 */
	public function getUploadFileResult()
	{
		return $this->UploadFileResult;
	}

	/**
	 * @param string $UploadFileResult
	 * @return \NemEDI\UploadFileResponse
	 */
	public function setUploadFileResult($UploadFileResult)
	{
		$this->UploadFileResult = $UploadFileResult;
		return $this;
	}

}
