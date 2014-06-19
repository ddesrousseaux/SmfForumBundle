<?php

namespace Sima\SmfForumBundle\Model;



/**
 * SmfSubscriptions
 */
abstract class AbstractSmfSubscriptions
{
    /**
     * @var integer
     */
    protected $idSubscribe;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var string
     */
    protected $cost;

    /**
     * @var string
     */
    protected $length;

    /**
     * @var integer
     */
    protected $idGroup;

    /**
     * @var string
     */
    protected $addGroups;

    /**
     * @var boolean
     */
    protected $active;

    /**
     * @var boolean
     */
    protected $repeatable;

    /**
     * @var boolean
     */
    protected $allowPartial;

    /**
     * @var boolean
     */
    protected $reminder;

    /**
     * @var string
     */
    protected $emailComplete;


    /**
     * Get idSubscribe
     *
     * @return integer 
     */
    public function getIdSubscribe()
    {
        return $this->idSubscribe;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return SmfSubscriptions
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return SmfSubscriptions
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set cost
     *
     * @param string $cost
     * @return SmfSubscriptions
     */
    public function setCost($cost)
    {
        $this->cost = $cost;

        return $this;
    }

    /**
     * Get cost
     *
     * @return string 
     */
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * Set length
     *
     * @param string $length
     * @return SmfSubscriptions
     */
    public function setLength($length)
    {
        $this->length = $length;

        return $this;
    }

    /**
     * Get length
     *
     * @return string 
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * Set idGroup
     *
     * @param integer $idGroup
     * @return SmfSubscriptions
     */
    public function setIdGroup($idGroup)
    {
        $this->idGroup = $idGroup;

        return $this;
    }

    /**
     * Get idGroup
     *
     * @return integer 
     */
    public function getIdGroup()
    {
        return $this->idGroup;
    }

    /**
     * Set addGroups
     *
     * @param string $addGroups
     * @return SmfSubscriptions
     */
    public function setAddGroups($addGroups)
    {
        $this->addGroups = $addGroups;

        return $this;
    }

    /**
     * Get addGroups
     *
     * @return string 
     */
    public function getAddGroups()
    {
        return $this->addGroups;
    }

    /**
     * Set active
     *
     * @param boolean $active
     * @return SmfSubscriptions
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return boolean 
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set repeatable
     *
     * @param boolean $repeatable
     * @return SmfSubscriptions
     */
    public function setRepeatable($repeatable)
    {
        $this->repeatable = $repeatable;

        return $this;
    }

    /**
     * Get repeatable
     *
     * @return boolean 
     */
    public function getRepeatable()
    {
        return $this->repeatable;
    }

    /**
     * Set allowPartial
     *
     * @param boolean $allowPartial
     * @return SmfSubscriptions
     */
    public function setAllowPartial($allowPartial)
    {
        $this->allowPartial = $allowPartial;

        return $this;
    }

    /**
     * Get allowPartial
     *
     * @return boolean 
     */
    public function getAllowPartial()
    {
        return $this->allowPartial;
    }

    /**
     * Set reminder
     *
     * @param boolean $reminder
     * @return SmfSubscriptions
     */
    public function setReminder($reminder)
    {
        $this->reminder = $reminder;

        return $this;
    }

    /**
     * Get reminder
     *
     * @return boolean 
     */
    public function getReminder()
    {
        return $this->reminder;
    }

    /**
     * Set emailComplete
     *
     * @param string $emailComplete
     * @return SmfSubscriptions
     */
    public function setEmailComplete($emailComplete)
    {
        $this->emailComplete = $emailComplete;

        return $this;
    }

    /**
     * Get emailComplete
     *
     * @return string 
     */
    public function getEmailComplete()
    {
        return $this->emailComplete;
    }
}
