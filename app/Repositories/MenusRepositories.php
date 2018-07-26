<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;
use App\Menu;

class MenusRepositories extends Repositories
{
    public function __construct(Menu $menu) {
        return $this->model = $menu;
    }
}
