<?php

namespace NemEDI;

class QueryUserResponse
{

	/**
	 * @var string $QueryUserResult
	 */
	protected $QueryUserResult = null;

	/**
	 * @param string $QueryUserResult
	 */
	public function __construct($QueryUserResult)
	{
		$this->QueryUserResult = $QueryUserResult;
	}

	/**
	 * @return string
	 */
	public function getQueryUserResult()
	{
		return $this->QueryUserResult;
	}

	/**
	 * @param string $QueryUserResult
	 * @return \NemEDI\QueryUserResponse
	 */
	public function setQueryUserResult($QueryUserResult)
	{
		$this->QueryUserResult = $QueryUserResult;
		return $this;
	}

}
