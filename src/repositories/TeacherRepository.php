<?php 
namespace App\Repositories;
use App\Entities\Teacher;
use PhpFromZero\Orm\Orm;

/**
 * Teacher repository
 * 
 */
class TeacherRepository extends Orm{

    public function __construct()
    {
        parent::__construct(Teacher::class);
    }
}