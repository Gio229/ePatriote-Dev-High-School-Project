<?php 
namespace App\Repositories;
use App\Entities\NGINX;
use PhpFromZero\Orm\Orm;

/**
 * NGINX repository
 * 
 */
class NGINXRepository extends Orm{

    public function __construct()
    {
        parent::__construct(NGINX::class);
    }
}