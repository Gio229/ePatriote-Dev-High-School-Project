<?php 
namespace App\Repositories;
use App\Entities\CourseMoySem;
use PhpFromZero\Orm\Orm;

/**
 * CourseMoySem repository
 *
 */
class CourseMoySemRepository extends Orm{

    public function __construct()
    {
        parent::__construct(CourseMoySem::class);
    }
}