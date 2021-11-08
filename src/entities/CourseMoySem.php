<?php

namespace App\Entities;

use PhpFromZero\Entity\BaseEntity;

/**
 * CourseMoySem entity
 * 
 */
class CourseMoySem extends BaseEntity
{

    /**
     * @var String the classroom
     */
    protected $classroom;

    /**
     * @var String student's email
     */
    protected $email;

    /**
     * @var String course
     */
    protected $course;

    /**
     * @var Float average
     */
    protected $average = 0;


    /**
     * @var int semester
     */
    protected $sem;



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
        if(!empty($classroom)){
            $this->classroom = $classroom;
        }

        return $this;
    }

    /**
     * Get user's email
     *
     * @return  String
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set user's email
     *
     * @param  String  $email  User's email
     *
     * 
     */
    public function setEmail(?String $email)
    {
        if(!empty($email)){
            $this->email = $email;
        }

        return $this;
    }

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
     * @param  String  $course
     *
     * 
     */
    public function setCourse(?String $course)
    {
        if(!empty($course)){
            $this->course = $course;
        }

        return $this;
    }
    

     /**
     * Get the average
     *
     * @return  Float
     */
    public function getAverage()
    {
        return $this->average;
    }

    /**
     * Set the average
     *
     * @param  Float  $average
     * 
     */
    public function setAverage(?Float $average)
    {
        if(!empty($average)){
            $this->average = $average;
        }

        return $this;
    }

    /**
     * Get the sem
     *
     * @return  Int
     */
    public function getSem()
    {   
        return $this->sem;
    }

    /**
     * Set the sem
     *
     * @param  Int  $sem
     * 
     */
    public function setSem(?Int $sem)
    {
        if(!empty($sem)){
            $this->sem = $sem;
        }

        return $this;
    }

}
