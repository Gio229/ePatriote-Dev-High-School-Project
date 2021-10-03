<?php

namespace App\Entities;

use PhpFromZero\Entity\BaseEntity;

/**
 * Student entity
 * 
 */
class Student extends BaseEntity
{

     /**
     * @var String User's first name
     */
    protected $firstName;

    /**
     * @var String User's last name
     */
    protected $lastName;

    /**
     * @var String User's email
     */
    protected $email;

        /**
     * @var String the classroom
     */
    protected $classroom;



    /**
     * Get user's first name
     *
     * @return  String
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set user's first name
     *
     * @param  String  $name  User's first name
     *
     * 
     */
    public function setFirstName(?String $name)
    {
        $this->firstName = $name;

        return $this;
    }

    /**
     * Get user's last name
     *
     * @return  String
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set user's last name
     *
     * @param  String  $name  User's first name
     *
     * 
     */
    public function setLastName(?String $name)
    {
        $this->lastName = $name;

        return $this;
    }

    /*
     * Get user profile's photo path
     *
     * @return  String
     */
    /*public function getPhoto()
    {
        return $this->photo;
    }*/

    /*
     * Set user profile's photo path
     *
     * @param  String  $photo  User profile's photo path
     *
     * 
     */
    /*public function setPhoto(?String $photo)
    {
        $this->photo = $photo;

        return $this;
    }*/

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
        $this->email = $email;

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

    
}
