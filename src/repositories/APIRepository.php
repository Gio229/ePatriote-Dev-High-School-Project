<?php 
namespace App\Repositories;
use App\Entities\API;
use PhpFromZero\Orm\Orm;

/**
 * API repository
 * 
 */
class APIRepository extends Orm{

    public function __construct()
    {
        parent::__construct(API::class);
    }
}