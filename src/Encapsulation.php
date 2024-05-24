<?php
declare(strict_types=1);
/** 
 * Encapsulation example
 * */
class Employee 
{
    private $salary =  500000.00;

    public function getSalary() : float
    {
        return $this->salary;
    }
}

$employee = new Employee;
echo $employee->getSalary();
