<?php


interface IRepositoryModel
{
    public function findAll();
    public function findOneById($id);
}