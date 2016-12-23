<?php

namespace NemEDI;

class ArrayOfEDIDocumentLine implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var EDIDocumentLine[] $EDIDocumentLine
     */
    protected $EDIDocumentLine = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return EDIDocumentLine[]
     */
    public function getEDIDocumentLine()
    {
      return $this->EDIDocumentLine;
    }

    /**
     * @param EDIDocumentLine[] $EDIDocumentLine
     * @return \NemEDI\ArrayOfEDIDocumentLine
     */
    public function setEDIDocumentLine(array $EDIDocumentLine = null)
    {
      $this->EDIDocumentLine = $EDIDocumentLine;
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
      return isset($this->EDIDocumentLine[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return EDIDocumentLine
     */
    public function offsetGet($offset)
    {
      return $this->EDIDocumentLine[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param EDIDocumentLine $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->EDIDocumentLine[] = $value;
      } else {
        $this->EDIDocumentLine[$offset] = $value;
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
      unset($this->EDIDocumentLine[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return EDIDocumentLine Return the current element
     */
    public function current()
    {
      return current($this->EDIDocumentLine);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->EDIDocumentLine);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->EDIDocumentLine);
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
      reset($this->EDIDocumentLine);
    }

    /**
     * Countable implementation
     *
     * @return EDIDocumentLine Return count of elements
     */
    public function count()
    {
      return count($this->EDIDocumentLine);
    }

}
