<?php


interface IProduitModel
{
    public function findAll();
    public function findOneById($id);
}