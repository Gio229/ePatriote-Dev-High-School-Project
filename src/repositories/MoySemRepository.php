<?php 
namespace App\Repositories;
use App\Entities\MoySem;
use PhpFromZero\Orm\Orm;

/**
 * MoySem repository
 *
 */
class MoySemRepository extends Orm{

    public function __construct()
    {
        parent::__construct(MoySem::class);
    }
}