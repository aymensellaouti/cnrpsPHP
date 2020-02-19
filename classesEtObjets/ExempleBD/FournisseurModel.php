<?php
include_once 'autoload.php';

class FournisseurModel extends RepositoryModel
{
    const TABLE_NAME = 'fournisseur';
    public function setTableName()
    {
        $this->tableName = self::TABLE_NAME;
    }
}