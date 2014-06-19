<?php

namespace Sima\SmfForumBundle\Model;



/**
 * SmfBoards
 */
abstract class AbstractSmfBoards
{
    /**
     * @var integer
     */
    protected $idBoard;

    /**
     * @var boolean
     */
    protected $idCat;

    /**
     * @var boolean
     */
    protected $childLevel;

    /**
     * @var integer
     */
    protected $idParent;

    /**
     * @var integer
     */
    protected $boardOrder;

    /**
     * @var integer
     */
    protected $idLastMsg;

    /**
     * @var integer
     */
    protected $idMsgUpdated;

    /**
     * @var integer
     */
    protected $lastupdated;

    /**
     * @var string
     */
    protected $memberGroups;

    /**
     * @var integer
     */
    protected $idProfile;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var integer
     */
    protected $numTopics;

    /**
     * @var integer
     */
    protected $numPosts;

    /**
     * @var boolean
     */
    protected $countPosts;

    /**
     * @var boolean
     */
    protected $idTheme;

    /**
     * @var boolean
     */
    protected $overrideTheme;

    /**
     * @var string
     */
    protected $boardText;

    /**
     * @var string
     */
    protected $redirect;

    /**
     * @var integer
     */
    protected $unapprovedPosts;

    /**
     * @var integer
     */
    protected $unapprovedTopics;


    /**
     * Get idBoard
     *
     * @return integer 
     */
    public function getIdBoard()
    {
        return $this->idBoard;
    }

    /**
     * Set idCat
     *
     * @param boolean $idCat
     * @return SmfBoards
     */
    public function setIdCat($idCat)
    {
        $this->idCat = $idCat;

        return $this;
    }

    /**
     * Get idCat
     *
     * @return boolean 
     */
    public function getIdCat()
    {
        return $this->idCat;
    }

    /**
     * Set childLevel
     *
     * @param boolean $childLevel
     * @return SmfBoards
     */
    public function setChildLevel($childLevel)
    {
        $this->childLevel = $childLevel;

        return $this;
    }

    /**
     * Get childLevel
     *
     * @return boolean 
     */
    public function getChildLevel()
    {
        return $this->childLevel;
    }

    /**
     * Set idParent
     *
     * @param integer $idParent
     * @return SmfBoards
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

    /**
     * Set boardOrder
     *
     * @param integer $boardOrder
     * @return SmfBoards
     */
    public function setBoardOrder($boardOrder)
    {
        $this->boardOrder = $boardOrder;

        return $this;
    }

    /**
     * Get boardOrder
     *
     * @return integer 
     */
    public function getBoardOrder()
    {
        return $this->boardOrder;
    }

    /**
     * Set idLastMsg
     *
     * @param integer $idLastMsg
     * @return SmfBoards
     */
    public function setIdLastMsg($idLastMsg)
    {
        $this->idLastMsg = $idLastMsg;

        return $this;
    }

    /**
     * Get idLastMsg
     *
     * @return integer 
     */
    public function getIdLastMsg()
    {
        return $this->idLastMsg;
    }

    /**
     * Set idMsgUpdated
     *
     * @param integer $idMsgUpdated
     * @return SmfBoards
     */
    public function setIdMsgUpdated($idMsgUpdated)
    {
        $this->idMsgUpdated = $idMsgUpdated;

        return $this;
    }

    /**
     * Get idMsgUpdated
     *
     * @return integer 
     */
    public function getIdMsgUpdated()
    {
        return $this->idMsgUpdated;
    }

    /**
     * Set lastupdated
     *
     * @param integer $lastupdated
     * @return SmfBoards
     */
    public function setLastupdated($lastupdated)
    {
        $this->lastupdated = $lastupdated;

        return $this;
    }

    /**
     * Get lastupdated
     *
     * @return integer 
     */
    public function getLastupdated()
    {
        return $this->lastupdated;
    }

    /**
     * Set memberGroups
     *
     * @param string $memberGroups
     * @return SmfBoards
     */
    public function setMemberGroups($memberGroups)
    {
        $this->memberGroups = $memberGroups;

        return $this;
    }

    /**
     * Get memberGroups
     *
     * @return string 
     */
    public function getMemberGroups()
    {
        return $this->memberGroups;
    }

    /**
     * Set idProfile
     *
     * @param integer $idProfile
     * @return SmfBoards
     */
    public function setIdProfile($idProfile)
    {
        $this->idProfile = $idProfile;

        return $this;
    }

    /**
     * Get idProfile
     *
     * @return integer 
     */
    public function getIdProfile()
    {
        return $this->idProfile;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return SmfBoards
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
     * @return SmfBoards
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
     * Set numTopics
     *
     * @param integer $numTopics
     * @return SmfBoards
     */
    public function setNumTopics($numTopics)
    {
        $this->numTopics = $numTopics;

        return $this;
    }

    /**
     * Get numTopics
     *
     * @return integer 
     */
    public function getNumTopics()
    {
        return $this->numTopics;
    }

    /**
     * Set numPosts
     *
     * @param integer $numPosts
     * @return SmfBoards
     */
    public function setNumPosts($numPosts)
    {
        $this->numPosts = $numPosts;

        return $this;
    }

    /**
     * Get numPosts
     *
     * @return integer 
     */
    public function getNumPosts()
    {
        return $this->numPosts;
    }

    /**
     * Set countPosts
     *
     * @param boolean $countPosts
     * @return SmfBoards
     */
    public function setCountPosts($countPosts)
    {
        $this->countPosts = $countPosts;

        return $this;
    }

    /**
     * Get countPosts
     *
     * @return boolean 
     */
    public function getCountPosts()
    {
        return $this->countPosts;
    }

    /**
     * Set idTheme
     *
     * @param boolean $idTheme
     * @return SmfBoards
     */
    public function setIdTheme($idTheme)
    {
        $this->idTheme = $idTheme;

        return $this;
    }

    /**
     * Get idTheme
     *
     * @return boolean 
     */
    public function getIdTheme()
    {
        return $this->idTheme;
    }

    /**
     * Set overrideTheme
     *
     * @param boolean $overrideTheme
     * @return SmfBoards
     */
    public function setOverrideTheme($overrideTheme)
    {
        $this->overrideTheme = $overrideTheme;

        return $this;
    }

    /**
     * Get overrideTheme
     *
     * @return boolean 
     */
    public function getOverrideTheme()
    {
        return $this->overrideTheme;
    }

    /**
     * Set boardText
     *
     * @param string $boardText
     * @return SmfBoards
     */
    public function setBoardText($boardText)
    {
        $this->boardText = $boardText;

        return $this;
    }

    /**
     * Get boardText
     *
     * @return string 
     */
    public function getBoardText()
    {
        return $this->boardText;
    }

    /**
     * Set redirect
     *
     * @param string $redirect
     * @return SmfBoards
     */
    public function setRedirect($redirect)
    {
        $this->redirect = $redirect;

        return $this;
    }

    /**
     * Get redirect
     *
     * @return string 
     */
    public function getRedirect()
    {
        return $this->redirect;
    }

    /**
     * Set unapprovedPosts
     *
     * @param integer $unapprovedPosts
     * @return SmfBoards
     */
    public function setUnapprovedPosts($unapprovedPosts)
    {
        $this->unapprovedPosts = $unapprovedPosts;

        return $this;
    }

    /**
     * Get unapprovedPosts
     *
     * @return integer 
     */
    public function getUnapprovedPosts()
    {
        return $this->unapprovedPosts;
    }

    /**
     * Set unapprovedTopics
     *
     * @param integer $unapprovedTopics
     * @return SmfBoards
     */
    public function setUnapprovedTopics($unapprovedTopics)
    {
        $this->unapprovedTopics = $unapprovedTopics;

        return $this;
    }

    /**
     * Get unapprovedTopics
     *
     * @return integer 
     */
    public function getUnapprovedTopics()
    {
        return $this->unapprovedTopics;
    }
}
