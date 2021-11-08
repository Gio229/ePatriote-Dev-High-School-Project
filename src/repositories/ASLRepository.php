<?php 
namespace App\Repositories;
use App\Entities\ASL;
use PhpFromZero\Orm\Orm;

/**
 * ASL repository
 * 
 */
class ASLRepository extends Orm{

    public function __construct()
    {
        parent::__construct(ASL::class);
    }
}