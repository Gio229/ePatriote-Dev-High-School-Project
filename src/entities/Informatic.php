<?php

namespace App\Entities;

use PhpFromZero\Entity\BaseEntity;

/**
 * Parents entity
 * 
 * @author Justin Dah-kenangnon <dah.kenangnon@gmail.com>
 * 
 * @link https://github.com/Dahkenangnon
 * @link https://ePatriote.com
 * @link https://Creative.ePatriote.com
 */
class Informatic extends BaseEntity
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
        $this->name = $name;

        return $this;
    }

    /**
     * Get user's last name
     *
     * @return  String
     */
    public function getLastName()
    {
        return $this->firstName;
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
        $this->name = $name;

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
    
}
