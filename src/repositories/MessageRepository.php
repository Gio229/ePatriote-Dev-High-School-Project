<?php 
namespace App\Repositories;

use App\Entities\Message;
use PhpFromZero\Orm\Orm;

/**
 * Message repository
 * 
 */
class MessageRepository extends Orm {

    public function __construct()
    {
        parent::__construct(Message::class);
    }
}