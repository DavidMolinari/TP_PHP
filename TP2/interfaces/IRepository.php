<?php
interface IRepository
{
    public function findById($id);
    public function findAll();
    public function insert($pArgs);
}

