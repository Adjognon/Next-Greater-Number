<?php

class NextGreaterNumber{

    protected $number;
    protected $min_index;
    protected $number_length;
    protected $indexTo;

    function __construct($number_param){
        $this->number = $number_param;
        $this->number_length = strlen($this->number);
        $this->indexTo = ($this->number_length - 1);
        $this->min_index = '';
    }
}

?>