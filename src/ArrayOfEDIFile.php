<?php

namespace NemEDI;

class ArrayOfEDIFile implements \ArrayAccess, \Iterator, \Countable
{

	/**
	 * @var EDIFile[] $EDIFile
	 */
	protected $EDIFile = null;

	
	public function __construct()
	{
	
	}

	/**
	 * @return EDIFile[]
	 */
	public function getEDIFile()
	{
		return $this->EDIFile;
	}

	/**
	 * @param EDIFile[] $EDIFile
	 * @return \NemEDI\ArrayOfEDIFile
	 */
	public function setEDIFile(array $EDIFile = null)
	{
		$this->EDIFile = $EDIFile;
		return $this;
	}

	/**
	 * ArrayAccess implementation
	 *
	 * @param mixed $offset An offset to check for
	 * @return boolean true on success or false on failure
	 */
	public function offsetExists($offset)
	{
		return isset($this->EDIFile[$offset]);
	}

	/**
	 * ArrayAccess implementation
	 *
	 * @param mixed $offset The offset to retrieve
	 * @return EDIFile
	 */
	public function offsetGet($offset)
	{
		return $this->EDIFile[$offset];
	}

	/**
	 * ArrayAccess implementation
	 *
	 * @param mixed $offset The offset to assign the value to
	 * @param EDIFile $value The value to set
	 * @return void
	 */
	public function offsetSet($offset, $value)
	{
		if (!isset($offset))
		{
			$this->EDIFile[] = $value;
		}
		else
		{
			$this->EDIFile[$offset] = $value;
		}
	}

	/**
	 * ArrayAccess implementation
	 *
	 * @param mixed $offset The offset to unset
	 * @return void
	 */
	public function offsetUnset($offset)
	{
		unset($this->EDIFile[$offset]);
	}

	/**
	 * Iterator implementation
	 *
	 * @return EDIFile Return the current element
	 */
	public function current()
	{
		return current($this->EDIFile);
	}

	/**
	 * Iterator implementation
	 * Move forward to next element
	 *
	 * @return void
	 */
	public function next()
	{
		next($this->EDIFile);
	}

	/**
	 * Iterator implementation
	 *
	 * @return string|null Return the key of the current element or null
	 */
	public function key()
	{
		return key($this->EDIFile);
	}

	/**
	 * Iterator implementation
	 *
	 * @return boolean Return the validity of the current position
	 */
	public function valid()
	{
		return $this->key() !== null;
	}

	/**
	 * Iterator implementation
	 * Rewind the Iterator to the first element
	 *
	 * @return void
	 */
	public function rewind()
	{
		reset($this->EDIFile);
	}

	/**
	 * Countable implementation
	 *
	 * @return EDIFile Return count of elements
	 */
	public function count()
	{
		return count($this->EDIFile);
	}

}
