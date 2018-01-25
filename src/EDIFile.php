<?php

namespace NemEDI;

class EDIFile
{

	/**
	 * @var string $FileName
	 */
	protected $FileName = null;

	/**
     * @var string $FileContect
	 */
	protected $FileContect = null;


	public function __construct()
	{

	}

	/**
	 * @return string
	 */
	public function getFileName()
	{
		return $this->FileName;
	}

	/**
	 * @param string $FileName
	 * @return \NemEDI\EDIFile
	 */
	public function setFileName($FileName)
	{
		$this->FileName = $FileName;
		return $this;
	}

	/**
     * @return string
	 */
	public function getFileContect()
	{
		return $this->FileContect;
	}

	/**
     * @param string $FileContect
	 * @return \NemEDI\EDIFile
	 */
	public function setFileContect($FileContect)
	{
		$this->FileContect = $FileContect;
		return $this;
	}

}
