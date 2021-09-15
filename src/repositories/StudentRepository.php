<?php 
namespace App\Repositories;
use App\Entities\Student;
use PhpFromZero\Orm\Orm;

/**
 * Student repository
 * 
 */
class StudentRepository extends Orm{

    public function __construct()
    {
        parent::__construct(Student::class);
    }
}