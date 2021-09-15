<?php 
namespace App\Repositories;
use App\Entities\Informatic;
use PhpFromZero\Orm\Orm;

/**
 * Informatic repository
 *
 */
class InformaticRepository extends Orm{

    public function __construct()
    {
        parent::__construct(Informatic::class);
    }
}