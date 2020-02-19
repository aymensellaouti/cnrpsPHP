<?php
include_once 'autoload.php';

Abstract class RepositoryModel 
{
    protected $cnx;
    protected $tableName = 'emptyTable';
    abstract function setTableName();
    public function __construct()
    {
        $this->cnx = ConnexionBD::getInstance();
        $this->setTableName();
    }
    public function findAll() {
        $query = "select * from ".$this->tableName;
        $datas = $this->cnx->query($query)->fetchAll(PDO::FETCH_OBJ);
        return $datas;
    }

    public function findOneById($id)
    {
        $query = "select * from ".$this->tableName." where id = ${id}";
        $data = $this->cnx->query($query)->fetch(PDO::FETCH_OBJ);
        return $data;
    }

}