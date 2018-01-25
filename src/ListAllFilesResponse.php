<?php

namespace NemEDI;

class ListAllFilesResponse
{

	/**
	 * @var string $ListAllFilesResult
	 */
	protected $ListAllFilesResult = null;

	/**
	 * @var ArrayOfGuid $EDIFiles
	 */
	protected $EDIFiles = null;

	/**
	 * @param string $ListAllFilesResult
	 * @param ArrayOfGuid $EDIFiles
	 */
	public function __construct($ListAllFilesResult, $EDIFiles)
	{
		$this->ListAllFilesResult = $ListAllFilesResult;
		$this->EDIFiles = $EDIFiles;
	}

	/**
	 * @return string
	 */
	public function getListAllFilesResult()
	{
		return $this->ListAllFilesResult;
	}

	/**
	 * @param string $ListAllFilesResult
	 * @return \NemEDI\ListAllFilesResponse
	 */
	public function setListAllFilesResult($ListAllFilesResult)
	{
		$this->ListAllFilesResult = $ListAllFilesResult;
		return $this;
	}

	/**
	 * @return ArrayOfGuid
	 */
	public function getEDIFiles()
	{
		return $this->EDIFiles;
	}

	/**
	 * @param ArrayOfGuid $EDIFiles
	 * @return \NemEDI\ListAllFilesResponse
	 */
	public function setEDIFiles($EDIFiles)
	{
		$this->EDIFiles = $EDIFiles;
		return $this;
	}

}
