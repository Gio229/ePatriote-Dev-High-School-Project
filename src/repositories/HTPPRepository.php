<?php 
namespace App\Repositories;
use App\Entities\HTPP;
use PhpFromZero\Orm\Orm;

/**
 * HTPP repository
 * 
 */
class HTPPRepository extends Orm{

    public function __construct()
    {
        parent::__construct(HTPP::class);
    }
}