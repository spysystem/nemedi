<?php

namespace NemEDI;

class Transmission
{

	/**
     * @var string $InFile
	 */
	protected $InFile = null;

	/**
	 * @var boolean $InFileProcessed
	 */
	protected $InFileProcessed = null;

	/**
     * @var string $Document
	 */
	protected $Document = null;

	/**
	 * @var boolean $DocumentProcessed
	 */
	protected $DocumentProcessed = null;

	/**
     * @var string $OutFile
	 */
	protected $OutFile = null;

	/**
	 * @var boolean $OutFileProcessed
	 */
	protected $OutFileProcessed = null;

	/**
     * @param string $InFile
	 * @param boolean $InFileProcessed
     * @param string $Document
	 * @param boolean $DocumentProcessed
     * @param string $OutFile
	 * @param boolean $OutFileProcessed
	 */
	public function __construct($InFile, $InFileProcessed, $Document, $DocumentProcessed, $OutFile, $OutFileProcessed)
	{
		$this->InFile = $InFile;
		$this->InFileProcessed = $InFileProcessed;
		$this->Document = $Document;
		$this->DocumentProcessed = $DocumentProcessed;
		$this->OutFile = $OutFile;
		$this->OutFileProcessed = $OutFileProcessed;
	}

	/**
     * @return string
	 */
	public function getInFile()
	{
		return $this->InFile;
	}

	/**
     * @param string $InFile
	 * @return \NemEDI\Transmission
	 */
	public function setInFile($InFile)
	{
		$this->InFile = $InFile;
		return $this;
	}

	/**
	 * @return boolean
	 */
	public function getInFileProcessed()
	{
		return $this->InFileProcessed;
	}

	/**
	 * @param boolean $InFileProcessed
	 * @return \NemEDI\Transmission
	 */
	public function setInFileProcessed($InFileProcessed)
	{
		$this->InFileProcessed = $InFileProcessed;
		return $this;
	}

	/**
     * @return string
	 */
	public function getDocument()
	{
		return $this->Document;
	}

	/**
     * @param string $Document
	 * @return \NemEDI\Transmission
	 */
	public function setDocument($Document)
	{
		$this->Document = $Document;
		return $this;
	}

	/**
	 * @return boolean
	 */
	public function getDocumentProcessed()
	{
		return $this->DocumentProcessed;
	}

	/**
	 * @param boolean $DocumentProcessed
	 * @return \NemEDI\Transmission
	 */
	public function setDocumentProcessed($DocumentProcessed)
	{
		$this->DocumentProcessed = $DocumentProcessed;
		return $this;
	}

	/**
     * @return string
	 */
	public function getOutFile()
	{
		return $this->OutFile;
	}

	/**
     * @param string $OutFile
	 * @return \NemEDI\Transmission
	 */
	public function setOutFile($OutFile)
	{
		$this->OutFile = $OutFile;
		return $this;
	}

	/**
	 * @return boolean
	 */
	public function getOutFileProcessed()
	{
		return $this->OutFileProcessed;
	}

	/**
	 * @param boolean $OutFileProcessed
	 * @return \NemEDI\Transmission
	 */
	public function setOutFileProcessed($OutFileProcessed)
	{
		$this->OutFileProcessed = $OutFileProcessed;
		return $this;
	}

}
