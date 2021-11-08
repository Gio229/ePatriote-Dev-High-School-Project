<?php

namespace App\Entities;

use PhpFromZero\Entity\BaseEntity;

/**
 * NGINX entity
 * 
 */
class NGINX extends BaseEntity
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
     * @var Float interrogation note 1
     */
    protected $ni1 = 0;

    /**
     * @var Float interrogation note 2
     */
    protected $ni2 = 0;

    /**
     * @var Float interrogation note 3
     */
    protected $ni3 = 0;

    /**
     * @var Float interrogation average
     */
    protected $mi = 0;

    /**
     * @var Float exam note 1
     */
    protected $nd1 = 0;

    /**
     * @var Float exam note 2
     */
    protected $nd2 = 0;

    /**
     * @var Float exam average
     */
    protected $md = 0;

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
     * Get the ni1
     *
     * @return  Float
     */
    public function getNi1()
    {
        return $this->ni1;
    }

    /**
     * Set the ni1
     *
     * @param  Float  $ni1
     * 
     */
    public function setNi1(?Float $ni1)
    {
        if(!empty($ni1)){
            $this->ni1 = $ni1;
        }

        return $this;
    }

    /**
     * Get the ni2
     *
     * @return  Float
     */
    public function getNi2()
    {
        return $this->ni2;
    }

    /**
     * Set the ni2
     *
     * @param  Float  $ni2
     * 
     */
    public function setNi2(?Float $ni2)
    {
        if(!empty($ni2)){
            $this->ni2 = $ni2;
        }

        return $this;
    }

    /**
     * Get the ni3
     *
     * @return  Float
     */
    public function getNi3()
    {
        return $this->ni3;
    }

    /**
     * Set the ni3
     *
     * @param  Float  $ni3
     * 
     */
    public function setNi3(?Float $ni3)
    {
        if(!empty($ni3)){
            $this->ni3 = $ni3;
        }

        return $this;
    }

    /**
     * Get the mi
     *
     * @return  Float
     */
    public function getMi()
    {   
        return $this->mi;
    }

    /**
     * Set the mi
     *
     * @param  Float  $mi
     * 
     */
    public function setMi(?Float $mi)
    {
        if(!empty($mi)){
            $this->mi = $mi;
        }

        return $this;
    }

    /**
     * Get the nd1
     *
     * @return  Float
     */
    public function getNd1()
    {
        return $this->nd1;
    }

    /**
     * Set the nd1
     *
     * @param  Float  $nd1
     * 
     */
    public function setNd1(?Float $nd1)
    {
        if(!empty($nd1)){
            $this->nd1 = $nd1;
        }

        return $this;
    }

    /**
     * Get the nd2
     *
     * @return  Float
     */
    public function getNd2()
    {
        return $this->nd2;
    }

    /**
     * Set the nd2
     *
     * @param  Float  $nd2
     * 
     */
    public function setNd2(?Float $nd2)
    {
        if(!empty($nd2)){
            $this->nd2 = $nd2;
        }

        return $this;
    }
    
    /**
     * Get the md
     *
     * @return  Float
     */
    public function getMd()
    {   
        return $this->md;
    }

    /**
     * Set the md
     *
     * @param  Float  $md
     * 
     */
    public function setMd(?Float $md)
    {
        if(!empty($md)){
            $this->md = $md;
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
