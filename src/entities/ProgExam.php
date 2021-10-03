<?php

namespace App\Entities;

use PhpFromZero\Entity\BaseEntity;

/**
 * ProgExam entity
 * 
 */
class ProgExam extends BaseEntity
{

    /**
     * @var String the classroom
     */
    protected $classroom;

    /**
     * @var String the course
     */
    protected $course;

    /**
     * @var String the date of the interrogation
     */
    protected $theDate;

    /**
     * @var String the hour of the interrogation
     */
    protected $theHour;



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
     * Get the course
     *
     * @return  String
     */
    public function getCourse()
    {
        return $this->course;
    }

    /**
     * Set the course
     *
     * @param  String  $course  the course
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
     * Get the date of the interrogation
     *
     * @return  String
     */
    public function getTheDate()
    {
        return $this->theDate;
    }

    /**
     * Set the date of the interrogation
     *
     * @param  String  $theDate  the date of the interrogation
     *
     * 
     */
    public function setTheDate(?String $theDate)
    {
        if(!empty($theDate)){
            $this->theDate = $theDate;
        }

        return $this;
    }



    /**
     * Get the hour of the interrogation
     *
     * @return  String
     */
    public function getTheHour()
    {
        return $this->theHour;
    }

    /**
     * Set the hour of the interrogation
     *
     * @param  String  $theHour  the hour of the interrogation
     *
     * 
     */
    public function setTheHour(?String $theHour)
    {
        if(!empty($theHour)){
            $this->theHour = $theHour;
        }

        return $this;
    }
    
}
