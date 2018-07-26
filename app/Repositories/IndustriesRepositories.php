<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;
use App\Industrie;

class IndustriesRepositories extends Repositories
{
    public function __construct(Industrie $industrie) {
        $this->model = $industrie;
        // dd($this->model);
    }
}
