<?php

namespace App\Entities;

use PhpFromZero\Entity\BaseEntity;

/**
 * Student entity
 * 
 */
class Teaching extends BaseEntity
{

    /**
     * @var String course
     */
    protected $course;

    /**
     * @var String classroom
     */
    protected $classroom;

    /**
     * @var String teacher's email
     */
    protected $email_teacher;



    /**
     * Get course
     *
     * @return  String
     */
    public function getCourse()
    {
        return $this->course;
    }

    /**
     * Set course
     *
     * @param  String  $course  course
     * 
     */
    public function setCourse(?String $course)
    {
        $this->course = $course;

        return $this;
    }

    /**
     * Get the classroom
     *
     * @return  String
     */
    public function getClassroom()
    {
        return $this->classroom;
    }

    /**
     * Set the classroom
     *
     * @param  String  $classroom  the classroom
     * 
     */
    public function setClassroom(?String $classroom)
    {
        $this->classroom = $classroom;

        return $this;
    }

    /**
     * Get email teacher
     *
     * @return  String
     */
    public function getEmail_teacher()
    {
        return $this->email_teacher;
    }

    /**
     * Set email teacher
     *
     * @param  String  $email_teacher
     *
     * 
     */
    public function setEmail_teacher(?String $email_teacher)
    {
        $this->email_teacher = $email_teacher;

        return $this;
    }
    
}
