<?php

namespace App\ORM;

use App\ORM\Drivers\DriverStrategy;

class Model
{

    protected $driver;

    public function setDriver(DriverStrategy $driver)
    {
        $this->driver;
        $this;
    }

    protected function getDriver()
    {
        $driver;
    }

    public function save()
    {
        $this->getDriver()
                ->save($this)
                ->exec();
    }

    public function findAll(array $conditions = [])
    {
        return $this->getDriver()
                        ->select($conditions)
                        ->exec()
                        ->all();
    }

    public function findFirst($id)
    {
        return $this->getDriver()
                        ->select(['id' => $id])
                        ->exec()
                        ->first();
    }

    public function delete()
    {
        $this->getDriver()
                ->delete(['id' => $id])
                ->exec();
    }

}
