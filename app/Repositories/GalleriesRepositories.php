<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;
use App\Gallery;

class GalleriesRepositories extends Repositories
{
    public function __construct(Gallery $gallery)  {
        $this->model = $gallery;
    }
}
