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

    public function find(){
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

            $swaped_number = $this->swap($this->number, $this->min_index, $this->indexTo);
            if($swaped_number !== $this->number){
                $output = $this->sortNumber($swaped_number, $this->min_index);
            }else{
                $output = $this->error(); 
            }
            
            }else{
                $output = $this->error(); 
            }
        return $output;

        }

    private function swap($number, $indexFrom, $indexTo){
        if($number[$indexFrom] < $number[$indexTo] ){
            
         $tempNumner = $number[$indexFrom];
         $number[$indexFrom] = $number[$indexTo];
         $number[$indexTo] = $tempNumner;
        }
         return $number;
    }

    private function sortNumber($swaped_number, $min_index){
        $leftNumber = substr($swaped_number, 0, $min_index + 1);
        $rightNumber = substr($swaped_number, $min_index + 1);
        $numberToArray = str_split($rightNumber);
        sort($numberToArray);
        $fromArrayToNumber = implode('', $numberToArray);
        return $leftNumber.''.$fromArrayToNumber;
    }

    private function error(){
        return 0;    
    }
}

?>