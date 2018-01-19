<?php

namespace App\ORM\Drivers;

use App\ORM\Model;

class MysqlPdo implements DriverStrategy
{

    protected $pdo;
    protected $table;

    public function __construct(\PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function setTable(string $table)
    {
        $this->table = $table;
        return $this;
    }

    public function save(Model $data)
    {
        
    }

    public function insert(Model $data)
    {
        
    }

    public function update(Model $data)
    {
        
    }

    public function select(array $data = [])
    {
        
    }

    public function delete(array $data)
    {
        
    }

    public function exec(string $query = null)
    {
        
    }

    public function first()
    {
        
    }

    public function all()
    {
        
    }

}
