<?php 
namespace App\Repositories;
use App\Entities\Parents;
use PhpFromZero\Orm\Orm;

/**
 * Parent repository
 * 
 */
class ParentRepository extends Orm{

    public function __construct()
    {
        parent::__construct(Parents::class);
    }
}