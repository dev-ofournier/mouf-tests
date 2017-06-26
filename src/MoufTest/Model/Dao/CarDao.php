<?php

/*
 * This file has been automatically generated by TDBM.
 * You can edit this file as it will not be overwritten.
 */

namespace MoufTest\Model\Dao;

use MoufTest\Model\Dao\Generated\CarBaseDao;

/**
 * The CarDao class will maintain the persistence of CarBean class into the cars table.
 */
class CarDao extends CarBaseDao
{
    public function getCarByModel($name){
        return $this->findOne("name = :name", [ "name" => $name ]);
    }
}
