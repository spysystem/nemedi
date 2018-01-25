<?php

namespace NemEDI;

class DownloadLabelResponse
{

	/**
	 * @var string $DownloadLabelResult
	 */
	protected $DownloadLabelResult = null;

	/**
	 * @var Label $Label
	 */
	protected $Label = null;

	/**
	 * @param string $DownloadLabelResult
	 * @param Label $Label
	 */
	public function __construct($DownloadLabelResult, $Label)
	{
		$this->DownloadLabelResult = $DownloadLabelResult;
		$this->Label = $Label;
	}

	/**
	 * @return string
	 */
	public function getDownloadLabelResult()
	{
		return $this->DownloadLabelResult;
	}

	/**
	 * @param string $DownloadLabelResult
	 * @return \NemEDI\DownloadLabelResponse
	 */
	public function setDownloadLabelResult($DownloadLabelResult)
	{
		$this->DownloadLabelResult = $DownloadLabelResult;
		return $this;
	}

	/**
	 * @return Label
	 */
	public function getLabel()
	{
		return $this->Label;
	}

	/**
	 * @param Label $Label
	 * @return \NemEDI\DownloadLabelResponse
	 */
	public function setLabel($Label)
	{
		$this->Label = $Label;
		return $this;
	}

}
