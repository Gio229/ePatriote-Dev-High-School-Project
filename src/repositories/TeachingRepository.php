<?php 
namespace App\Repositories;
use App\Entities\Teaching;
use PhpFromZero\Orm\Orm;

/**
 * Teaching repository
 * 
 */
class TeachingRepository extends Orm{

    public function __construct()
    {
        parent::__construct(Teaching::class);
    }
}