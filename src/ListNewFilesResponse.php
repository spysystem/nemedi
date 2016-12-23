<?php

namespace NemEDI;

class ListNewFilesResponse
{
	const	ListNewFilesResponse_OK			= 'OK';
	const	ListNewFilesResponse_NoFiles	= 'No Files';

    /**
     * @var string $ListNewFilesResult
     */
    protected $ListNewFilesResult = null;

    /**
     * @var ArrayOfGuid $EDIFiles
     */
    protected $EDIFiles = null;

    /**
     * @param string $ListNewFilesResult
     * @param ArrayOfGuid $EDIFiles
     */
    public function __construct($ListNewFilesResult, $EDIFiles)
    {
      $this->ListNewFilesResult = $ListNewFilesResult;
      $this->EDIFiles = $EDIFiles;
    }

    /**
     * @return string
     */
    public function getListNewFilesResult()
    {
      return $this->ListNewFilesResult;
    }

    /**
     * @param string $ListNewFilesResult
     * @return \NemEDI\ListNewFilesResponse
     */
    public function setListNewFilesResult($ListNewFilesResult)
    {
      $this->ListNewFilesResult = $ListNewFilesResult;
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
     * @return \NemEDI\ListNewFilesResponse
     */
    public function setEDIFiles($EDIFiles)
    {
      $this->EDIFiles = $EDIFiles;
      return $this;
    }

}
