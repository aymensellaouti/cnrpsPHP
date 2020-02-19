<?php
include_once 'autoload.php';

class ProduitModel extends RepositoryModel
{
    const TABLE_NAME = 'produit';
    public function setTableName()
    {
      $this->tableName = self::TABLE_NAME;
    }
}