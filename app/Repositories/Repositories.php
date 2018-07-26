<?php

namespace App\Repositories;

// use App\Menu;

class Repositories
{
    protected $model = false;

    public function get($select = "*", $take = false) {
        $builder = $this->model->select($select)->where("active", true);
        if ($take == true) {
            return $builder = $this->model->select($select)->take($take)->where("active", true)->get();
        }
        return $builder->get();
    }

}
