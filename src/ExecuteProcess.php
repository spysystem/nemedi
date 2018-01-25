<?php

namespace NemEDI;

class ExecuteProcess
{

	/**
	 * @var string $ScriptGuid
	 */
	protected $ScriptGuid = null;

	/**
	 * @var int $CustomerNumber
	 */
	protected $CustomerNumber = null;

	/**
	 * @var string $Password
	 */
	protected $Password = null;

	/**
	 * @param string $ScriptGuid
	 * @param int $CustomerNumber
	 * @param string $Password
	 */
	public function __construct($ScriptGuid, $CustomerNumber, $Password)
	{
		$this->ScriptGuid = $ScriptGuid;
		$this->CustomerNumber = $CustomerNumber;
		$this->Password = $Password;
	}

	/**
	 * @return string
	 */
	public function getScriptGuid()
	{
		return $this->ScriptGuid;
	}

	/**
	 * @param string $ScriptGuid
	 * @return \NemEDI\ExecuteProcess
	 */
	public function setScriptGuid($ScriptGuid)
	{
		$this->ScriptGuid = $ScriptGuid;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getCustomerNumber()
	{
		return $this->CustomerNumber;
	}

	/**
	 * @param int $CustomerNumber
	 * @return \NemEDI\ExecuteProcess
	 */
	public function setCustomerNumber($CustomerNumber)
	{
		$this->CustomerNumber = $CustomerNumber;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getPassword()
	{
		return $this->Password;
	}

	/**
	 * @param string $Password
	 * @return \NemEDI\ExecuteProcess
	 */
	public function setPassword($Password)
	{
		$this->Password = $Password;
		return $this;
	}

}
