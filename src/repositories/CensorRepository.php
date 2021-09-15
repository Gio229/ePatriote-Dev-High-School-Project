<?php 
namespace App\Repositories;
use App\Entities\Censor;
use PhpFromZero\Orm\Orm;

/**
 * Censor repository
 * 
 */
class CensorRepository extends Orm{

    public function __construct()
    {
        parent::__construct(Censor::class);
    }
}