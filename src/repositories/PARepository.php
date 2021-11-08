<?php 
namespace App\Repositories;
use App\Entities\PA;
use PhpFromZero\Orm\Orm;

/**
 * PA repository
 * 
 */
class PARepository extends Orm{

    public function __construct()
    {
        parent::__construct(PA::class);
    }
}