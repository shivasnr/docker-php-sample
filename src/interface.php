<?php

interface Lawnmower
{
    public function cut_grass();
}

class Scissors implements Lawnmower {
    public function cut_grass(){
        return 'Finished cutting the grass in 14.2 hours.';
    }
}

class Landscaper
{
    protected $mower;
    protected $customer;
    
    public function __construct(Lawnmower $mower, $customer = ''){
        $this->mower = $mower;
        $this->customer = $customer;
    }
    
    public function help_customer(){
        return 'Finished mowing '. $this->customer .' lawn'.PHP_EOL.$this->mower->cut_grass();
    }
}

$landscaper = new Landscaper(new Scissors, 'The McFlys');
var_dump($landscaper->help_customer());
// string 'Finished mowing The McFlys lawn' (length=31)