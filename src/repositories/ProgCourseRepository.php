<?php 
namespace App\Repositories;

use App\Entities\ProgCourse;
use App\Entities\ProgExam;
use PhpFromZero\Orm\Orm;

/**
 * ProgCourse repository
 * 
 */
class ProgCourseRepository extends Orm{

    public function __construct()
    {
        parent::__construct(ProgCourse::class);
    }
}