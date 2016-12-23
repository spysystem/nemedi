<?php

namespace NemEDI;

class DownloadFileResponse
{
	const	DownloadFileResult_OK	= 'OK';

    /**
     * @var string $DownloadFileResult
     */
    protected $DownloadFileResult = null;

    /**
     * @var EDIFile $EDIFile
     */
    protected $EDIFile = null;

    /**
     * @param string $DownloadFileResult
     * @param EDIFile $EDIFile
     */
    public function __construct($DownloadFileResult, $EDIFile)
    {
      $this->DownloadFileResult = $DownloadFileResult;
      $this->EDIFile = $EDIFile;
    }

    /**
     * @return string
     */
    public function getDownloadFileResult()
    {
      return $this->DownloadFileResult;
    }

    /**
     * @param string $DownloadFileResult
     * @return \NemEDI\DownloadFileResponse
     */
    public function setDownloadFileResult($DownloadFileResult)
    {
      $this->DownloadFileResult = $DownloadFileResult;
      return $this;
    }

    /**
     * @return EDIFile
     */
    public function getEDIFile()
    {
      return $this->EDIFile;
    }

    /**
     * @param EDIFile $EDIFile
     * @return \NemEDI\DownloadFileResponse
     */
    public function setEDIFile($EDIFile)
    {
      $this->EDIFile = $EDIFile;
      return $this;
    }

}
