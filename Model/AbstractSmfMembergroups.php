<?php

namespace Sima\SmfForumBundle\Model;



/**
 * SmfMembergroups
 */
abstract class AbstractSmfMembergroups
{
    /**
     * @var integer
     */
    protected $idGroup;

    /**
     * @var string
     */
    protected $groupName;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var string
     */
    protected $onlineColor;

    /**
     * @var integer
     */
    protected $minPosts;

    /**
     * @var integer
     */
    protected $maxMessages;

    /**
     * @var string
     */
    protected $stars;

    /**
     * @var boolean
     */
    protected $groupType;

    /**
     * @var boolean
     */
    protected $hidden;

    /**
     * @var integer
     */
    protected $idParent;


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
     * Set groupName
     *
     * @param string $groupName
     * @return SmfMembergroups
     */
    public function setGroupName($groupName)
    {
        $this->groupName = $groupName;

        return $this;
    }

    /**
     * Get groupName
     *
     * @return string 
     */
    public function getGroupName()
    {
        return $this->groupName;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return SmfMembergroups
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
     * Set onlineColor
     *
     * @param string $onlineColor
     * @return SmfMembergroups
     */
    public function setOnlineColor($onlineColor)
    {
        $this->onlineColor = $onlineColor;

        return $this;
    }

    /**
     * Get onlineColor
     *
     * @return string 
     */
    public function getOnlineColor()
    {
        return $this->onlineColor;
    }

    /**
     * Set minPosts
     *
     * @param integer $minPosts
     * @return SmfMembergroups
     */
    public function setMinPosts($minPosts)
    {
        $this->minPosts = $minPosts;

        return $this;
    }

    /**
     * Get minPosts
     *
     * @return integer 
     */
    public function getMinPosts()
    {
        return $this->minPosts;
    }

    /**
     * Set maxMessages
     *
     * @param integer $maxMessages
     * @return SmfMembergroups
     */
    public function setMaxMessages($maxMessages)
    {
        $this->maxMessages = $maxMessages;

        return $this;
    }

    /**
     * Get maxMessages
     *
     * @return integer 
     */
    public function getMaxMessages()
    {
        return $this->maxMessages;
    }

    /**
     * Set stars
     *
     * @param string $stars
     * @return SmfMembergroups
     */
    public function setStars($stars)
    {
        $this->stars = $stars;

        return $this;
    }

    /**
     * Get stars
     *
     * @return string 
     */
    public function getStars()
    {
        return $this->stars;
    }

    /**
     * Set groupType
     *
     * @param boolean $groupType
     * @return SmfMembergroups
     */
    public function setGroupType($groupType)
    {
        $this->groupType = $groupType;

        return $this;
    }

    /**
     * Get groupType
     *
     * @return boolean 
     */
    public function getGroupType()
    {
        return $this->groupType;
    }

    /**
     * Set hidden
     *
     * @param boolean $hidden
     * @return SmfMembergroups
     */
    public function setHidden($hidden)
    {
        $this->hidden = $hidden;

        return $this;
    }

    /**
     * Get hidden
     *
     * @return boolean 
     */
    public function getHidden()
    {
        return $this->hidden;
    }

    /**
     * Set idParent
     *
     * @param integer $idParent
     * @return SmfMembergroups
     */
    public function setIdParent($idParent)
    {
        $this->idParent = $idParent;

        return $this;
    }

    /**
     * Get idParent
     *
     * @return integer 
     */
    public function getIdParent()
    {
        return $this->idParent;
    }
}
