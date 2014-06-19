<?php

namespace Sima\SmfForumBundle\Model;



/**
 * SmfBanGroups
 */
abstract class AbstractSmfBanGroups
{
    /**
     * @var integer
     */
    protected $idBanGroup;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var integer
     */
    protected $banTime;

    /**
     * @var integer
     */
    protected $expireTime;

    /**
     * @var boolean
     */
    protected $cannotAccess;

    /**
     * @var boolean
     */
    protected $cannotRegister;

    /**
     * @var boolean
     */
    protected $cannotPost;

    /**
     * @var boolean
     */
    protected $cannotLogin;

    /**
     * @var string
     */
    protected $reason;

    /**
     * @var string
     */
    protected $notes;


    /**
     * Get idBanGroup
     *
     * @return integer 
     */
    public function getIdBanGroup()
    {
        return $this->idBanGroup;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return SmfBanGroups
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
     * Set banTime
     *
     * @param integer $banTime
     * @return SmfBanGroups
     */
    public function setBanTime($banTime)
    {
        $this->banTime = $banTime;

        return $this;
    }

    /**
     * Get banTime
     *
     * @return integer 
     */
    public function getBanTime()
    {
        return $this->banTime;
    }

    /**
     * Set expireTime
     *
     * @param integer $expireTime
     * @return SmfBanGroups
     */
    public function setExpireTime($expireTime)
    {
        $this->expireTime = $expireTime;

        return $this;
    }

    /**
     * Get expireTime
     *
     * @return integer 
     */
    public function getExpireTime()
    {
        return $this->expireTime;
    }

    /**
     * Set cannotAccess
     *
     * @param boolean $cannotAccess
     * @return SmfBanGroups
     */
    public function setCannotAccess($cannotAccess)
    {
        $this->cannotAccess = $cannotAccess;

        return $this;
    }

    /**
     * Get cannotAccess
     *
     * @return boolean 
     */
    public function getCannotAccess()
    {
        return $this->cannotAccess;
    }

    /**
     * Set cannotRegister
     *
     * @param boolean $cannotRegister
     * @return SmfBanGroups
     */
    public function setCannotRegister($cannotRegister)
    {
        $this->cannotRegister = $cannotRegister;

        return $this;
    }

    /**
     * Get cannotRegister
     *
     * @return boolean 
     */
    public function getCannotRegister()
    {
        return $this->cannotRegister;
    }

    /**
     * Set cannotPost
     *
     * @param boolean $cannotPost
     * @return SmfBanGroups
     */
    public function setCannotPost($cannotPost)
    {
        $this->cannotPost = $cannotPost;

        return $this;
    }

    /**
     * Get cannotPost
     *
     * @return boolean 
     */
    public function getCannotPost()
    {
        return $this->cannotPost;
    }

    /**
     * Set cannotLogin
     *
     * @param boolean $cannotLogin
     * @return SmfBanGroups
     */
    public function setCannotLogin($cannotLogin)
    {
        $this->cannotLogin = $cannotLogin;

        return $this;
    }

    /**
     * Get cannotLogin
     *
     * @return boolean 
     */
    public function getCannotLogin()
    {
        return $this->cannotLogin;
    }

    /**
     * Set reason
     *
     * @param string $reason
     * @return SmfBanGroups
     */
    public function setReason($reason)
    {
        $this->reason = $reason;

        return $this;
    }

    /**
     * Get reason
     *
     * @return string 
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * Set notes
     *
     * @param string $notes
     * @return SmfBanGroups
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;

        return $this;
    }

    /**
     * Get notes
     *
     * @return string 
     */
    public function getNotes()
    {
        return $this->notes;
    }
}
