<?php

namespace App\ORM;

use App\ORM\Drivers\DriverStrategy;

class Model
{

    public function setDriver(DriverStrategy $driver)
    {
        return $driver;
    }

    protected function getDriver()
    {
        
    }

    public function save()
    {
        
    }

    public function findAll(array $conditions = [])
    {
        
    }

    public function findFirst($id)
    {
        
    }

    public function delete()
    {
        
    }

}
