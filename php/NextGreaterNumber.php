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

    public function next_greater_number(){
        $output = '';

        for($i = ($this->number_length - 1); $i >= 0; $i--){
            if($this->number[$i] > $this->number[$i - 1] && $i > 0){;
               $this->min_index = ($i - 1);
            break;
            }
        }

        if($this->min_index !== ''){

            for($j = ($this->min_index + 1); $j < $this->number_length; $j++){
            
                if($this->number[$j] > $this->number[$this->min_index] && $this->number[$j] < $this->number[$j - 1]){
                     $this->indexTo = $j;
                }
                
            }

        }

    }
}

?>