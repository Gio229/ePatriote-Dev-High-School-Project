<?php 
namespace App\Repositories;
use App\Entities\ProgExam;
use PhpFromZero\Orm\Orm;

/**
 * ProgExam repository
 * 
 */
class ProgExamRepository extends Orm{

    public function __construct()
    {
        parent::__construct(ProgExam::class);
    }
}