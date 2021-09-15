<?php 
namespace App\Repositories;
use App\Entities\User;
use PhpFromZero\Orm\Orm;

/**
 * User repository
 * 
 */
class UserRepository extends Orm{

    public function __construct()
    {
        parent::__construct(User::class);
    }
}