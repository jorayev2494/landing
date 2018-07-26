<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;
use App\Offer;

class OffersRepositories extends Repositories
{
    public function __construct(Offer $offer) {
        return $this->model = $offer;
    }
}
