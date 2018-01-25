<?php

namespace NemEDI;

class SearchDocumentResponse
{
	const	SearchDocumentResponse_OK			= 'OK';
	const	SearchDocumentResponse_NoDocuments	= 'No Documents';

	/**
	 * @var string $SearchDocumentResult
	 */
	protected $SearchDocumentResult = null;

	/**
     * @var string $DocumentID
	 */
	protected $DocumentID = null;

	/**
	 * @param string $SearchDocumentResult
     * @param string $DocumentID
	 */
	public function __construct($SearchDocumentResult, $DocumentID)
	{
		$this->SearchDocumentResult = $SearchDocumentResult;
		$this->DocumentID = $DocumentID;
	}

	/**
	 * @return string
	 */
	public function getSearchDocumentResult()
	{
		return $this->SearchDocumentResult;
	}

	/**
	 * @param string $SearchDocumentResult
	 * @return \NemEDI\SearchDocumentResponse
	 */
	public function setSearchDocumentResult($SearchDocumentResult)
	{
		$this->SearchDocumentResult = $SearchDocumentResult;
		return $this;
	}

	/**
     * @return string
	 */
	public function getDocumentID()
	{
		return $this->DocumentID;
	}

	/**
     * @param string $DocumentID
	 * @return \NemEDI\SearchDocumentResponse
	 */
	public function setDocumentID($DocumentID)
	{
		$this->DocumentID = $DocumentID;
		return $this;
	}

}
