<?php

namespace Sima\SmfForumBundle\Model;



/**
 * SmfTopics
 */
abstract class AbstractSmfTopics
{
    /**
     * @var integer
     */
    protected $idTopic;

    /**
     * @var boolean
     */
    protected $isSticky;

    /**
     * @var integer
     */
    protected $idBoard;

    /**
     * @var integer
     */
    protected $idFirstMsg;

    /**
     * @var integer
     */
    protected $idLastMsg;

    /**
     * @var integer
     */
    protected $idMemberStarted;

    /**
     * @var integer
     */
    protected $idMemberUpdated;

    /**
     * @var integer
     */
    protected $idPoll;

    /**
     * @var integer
     */
    protected $numReplies;

    /**
     * @var integer
     */
    protected $numViews;

    /**
     * @var boolean
     */
    protected $locked;

    /**
     * @var integer
     */
    protected $unapprovedPosts;

    /**
     * @var boolean
     */
    protected $approved;

    /**
     * @var integer
     */
    protected $idPreviousBoard;

    /**
     * @var integer
     */
    protected $idPreviousTopic;


    /**
     * Get idTopic
     *
     * @return integer 
     */
    public function getIdTopic()
    {
        return $this->idTopic;
    }

    /**
     * Set isSticky
     *
     * @param boolean $isSticky
     * @return SmfTopics
     */
    public function setIsSticky($isSticky)
    {
        $this->isSticky = $isSticky;

        return $this;
    }

    /**
     * Get isSticky
     *
     * @return boolean 
     */
    public function getIsSticky()
    {
        return $this->isSticky;
    }

    /**
     * Set idBoard
     *
     * @param integer $idBoard
     * @return SmfTopics
     */
    public function setIdBoard($idBoard)
    {
        $this->idBoard = $idBoard;

        return $this;
    }

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
     * Set idFirstMsg
     *
     * @param integer $idFirstMsg
     * @return SmfTopics
     */
    public function setIdFirstMsg($idFirstMsg)
    {
        $this->idFirstMsg = $idFirstMsg;

        return $this;
    }

    /**
     * Get idFirstMsg
     *
     * @return integer 
     */
    public function getIdFirstMsg()
    {
        return $this->idFirstMsg;
    }

    /**
     * Set idLastMsg
     *
     * @param integer $idLastMsg
     * @return SmfTopics
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
     * Set idMemberStarted
     *
     * @param integer $idMemberStarted
     * @return SmfTopics
     */
    public function setIdMemberStarted($idMemberStarted)
    {
        $this->idMemberStarted = $idMemberStarted;

        return $this;
    }

    /**
     * Get idMemberStarted
     *
     * @return integer 
     */
    public function getIdMemberStarted()
    {
        return $this->idMemberStarted;
    }

    /**
     * Set idMemberUpdated
     *
     * @param integer $idMemberUpdated
     * @return SmfTopics
     */
    public function setIdMemberUpdated($idMemberUpdated)
    {
        $this->idMemberUpdated = $idMemberUpdated;

        return $this;
    }

    /**
     * Get idMemberUpdated
     *
     * @return integer 
     */
    public function getIdMemberUpdated()
    {
        return $this->idMemberUpdated;
    }

    /**
     * Set idPoll
     *
     * @param integer $idPoll
     * @return SmfTopics
     */
    public function setIdPoll($idPoll)
    {
        $this->idPoll = $idPoll;

        return $this;
    }

    /**
     * Get idPoll
     *
     * @return integer 
     */
    public function getIdPoll()
    {
        return $this->idPoll;
    }

    /**
     * Set numReplies
     *
     * @param integer $numReplies
     * @return SmfTopics
     */
    public function setNumReplies($numReplies)
    {
        $this->numReplies = $numReplies;

        return $this;
    }

    /**
     * Get numReplies
     *
     * @return integer 
     */
    public function getNumReplies()
    {
        return $this->numReplies;
    }

    /**
     * Set numViews
     *
     * @param integer $numViews
     * @return SmfTopics
     */
    public function setNumViews($numViews)
    {
        $this->numViews = $numViews;

        return $this;
    }

    /**
     * Get numViews
     *
     * @return integer 
     */
    public function getNumViews()
    {
        return $this->numViews;
    }

    /**
     * Set locked
     *
     * @param boolean $locked
     * @return SmfTopics
     */
    public function setLocked($locked)
    {
        $this->locked = $locked;

        return $this;
    }

    /**
     * Get locked
     *
     * @return boolean 
     */
    public function getLocked()
    {
        return $this->locked;
    }

    /**
     * Set unapprovedPosts
     *
     * @param integer $unapprovedPosts
     * @return SmfTopics
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
     * Set approved
     *
     * @param boolean $approved
     * @return SmfTopics
     */
    public function setApproved($approved)
    {
        $this->approved = $approved;

        return $this;
    }

    /**
     * Get approved
     *
     * @return boolean 
     */
    public function getApproved()
    {
        return $this->approved;
    }

    /**
     * Set idPreviousBoard
     *
     * @param integer $idPreviousBoard
     * @return SmfTopics
     */
    public function setIdPreviousBoard($idPreviousBoard)
    {
        $this->idPreviousBoard = $idPreviousBoard;

        return $this;
    }

    /**
     * Get idPreviousBoard
     *
     * @return integer 
     */
    public function getIdPreviousBoard()
    {
        return $this->idPreviousBoard;
    }

    /**
     * Set idPreviousTopic
     *
     * @param integer $idPreviousTopic
     * @return SmfTopics
     */
    public function setIdPreviousTopic($idPreviousTopic)
    {
        $this->idPreviousTopic = $idPreviousTopic;

        return $this;
    }

    /**
     * Get idPreviousTopic
     *
     * @return integer 
     */
    public function getIdPreviousTopic()
    {
        return $this->idPreviousTopic;
    }
}
