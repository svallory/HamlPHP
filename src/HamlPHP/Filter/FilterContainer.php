<?php

require_once 'IFilter.php';

class FilterContainer
{
  private $_filters = array();

  public function __construct($filters = array())
  {
    foreach ($filters as $filter) {
      $this->addFilter($filter);
    }
  }

  public function addFilter(IFilter $filter)
  {
    $this->_filters[$filter->getIdentifier()] = $filter;
  }

  public function getFilters()
  {
    return $this->_filters;
  }

  public function getFilter($identifier)
  {
    if (isset($this->_filters[$identifier])) {
      return $this->_filters[$identifier];
    }

    return null;
  }
}