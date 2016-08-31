<?php

namespace NemEDI;

class DownloadFilesResponse
{
	const	DownloadFilesResponse_OK		= 'OK';
	const	DownloadFilesResponse_NoFiles	= 'No Files';

    /**
     * @var string $DownloadFilesResult
     */
    protected $DownloadFilesResult = null;

    /**
     * @var ArrayOfEDIFile $EDIFiles
     */
    protected $EDIFiles = null;

    /**
     * @param string $DownloadFilesResult
     * @param ArrayOfEDIFile $EDIFiles
     */
    public function __construct($DownloadFilesResult, $EDIFiles)
    {
      $this->DownloadFilesResult = $DownloadFilesResult;
      $this->EDIFiles = $EDIFiles;
    }

    /**
     * @return string
     */
    public function getDownloadFilesResult()
    {
      return $this->DownloadFilesResult;
    }

    /**
     * @param string $DownloadFilesResult
     * @return \NemEDI\DownloadFilesResponse
     */
    public function setDownloadFilesResult($DownloadFilesResult)
    {
      $this->DownloadFilesResult = $DownloadFilesResult;
      return $this;
    }

    /**
     * @return ArrayOfEDIFile
     */
    public function getEDIFiles()
    {
      return $this->EDIFiles;
    }

    /**
     * @param ArrayOfEDIFile $EDIFiles
     * @return \NemEDI\DownloadFilesResponse
     */
    public function setEDIFiles($EDIFiles)
    {
      $this->EDIFiles = $EDIFiles;
      return $this;
    }

}
