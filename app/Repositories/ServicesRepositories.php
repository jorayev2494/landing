<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;
use App\Service;

class ServicesRepositories extends Repositories
{
    public function __construct(Service $service) {
        $this->model = $service;
    }
}
