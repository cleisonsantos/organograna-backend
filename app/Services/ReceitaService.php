<?php

namespace App\Services;

use App\Repositories\Eloquent\ReceitaRepository;

class ReceitaService
{
    private $repository;

    public function __construct()
    {
        $this->repository = new ReceitaRepository();
    }
}