<?php 
namespace App\Repositories;
use App\Entities\ProgInterro;
use PhpFromZero\Orm\Orm;

/**
 * ProgInterro repository
 * 
 */
class ProgInterroRepository extends Orm{

    public function __construct()
    {
        parent::__construct(ProgInterro::class);
    }
}