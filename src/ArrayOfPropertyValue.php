<?php

namespace NemEDI;

class ArrayOfPropertyValue implements \ArrayAccess, \Iterator, \Countable
{

	/**
	 * @var PropertyValue[] $PropertyValue
	 */
	protected $PropertyValue = null;

	
	public function __construct()
	{
	
	}

	/**
	 * @return PropertyValue[]
	 */
	public function getPropertyValue()
	{
		return $this->PropertyValue;
	}

	/**
	 * @param PropertyValue[] $PropertyValue
	 * @return \NemEDI\ArrayOfPropertyValue
	 */
	public function setPropertyValue(array $PropertyValue = null)
	{
		$this->PropertyValue = $PropertyValue;
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
		return isset($this->PropertyValue[$offset]);
	}

	/**
	 * ArrayAccess implementation
	 *
	 * @param mixed $offset The offset to retrieve
	 * @return PropertyValue
	 */
	public function offsetGet($offset)
	{
		return $this->PropertyValue[$offset];
	}

	/**
	 * ArrayAccess implementation
	 *
	 * @param mixed $offset The offset to assign the value to
	 * @param PropertyValue $value The value to set
	 * @return void
	 */
	public function offsetSet($offset, $value)
	{
		if (!isset($offset))
		{
			$this->PropertyValue[] = $value;
		}
		else
		{
			$this->PropertyValue[$offset] = $value;
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
		unset($this->PropertyValue[$offset]);
	}

	/**
	 * Iterator implementation
	 *
	 * @return PropertyValue Return the current element
	 */
	public function current()
	{
		return current($this->PropertyValue);
	}

	/**
	 * Iterator implementation
	 * Move forward to next element
	 *
	 * @return void
	 */
	public function next()
	{
		next($this->PropertyValue);
	}

	/**
	 * Iterator implementation
	 *
	 * @return string|null Return the key of the current element or null
	 */
	public function key()
	{
		return key($this->PropertyValue);
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
		reset($this->PropertyValue);
	}

	/**
	 * Countable implementation
	 *
	 * @return PropertyValue Return count of elements
	 */
	public function count()
	{
		return count($this->PropertyValue);
	}

}
