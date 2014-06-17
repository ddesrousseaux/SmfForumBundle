<?php

namespace Sima\SmfForumBundle\Model;



/**
 * SmfPolls
 */
interface SmfPollsInterface
{
    /**
     * @var integer
     */
    private $idPoll;

    /**
     * @var string
     */
    private $question;

    /**
     * @var boolean
     */
    private $votingLocked;

    /**
     * @var boolean
     */
    private $maxVotes;

    /**
     * @var integer
     */
    private $expireTime;

    /**
     * @var boolean
     */
    private $hideResults;

    /**
     * @var boolean
     */
    private $changeVote;

    /**
     * @var integer
     */
    private $idMember;

    /**
     * @var string
     */
    private $posterName;

    /**
     * @var boolean
     */
    private $guestVote;

    /**
     * @var integer
     */
    private $numGuestVoters;

    /**
     * @var integer
     */
    private $resetPoll;


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
     * Set question
     *
     * @param string $question
     * @return SmfPolls
     */
    public function setQuestion($question)
    {
        $this->question = $question;

        return $this;
    }

    /**
     * Get question
     *
     * @return string 
     */
    public function getQuestion()
    {
        return $this->question;
    }

    /**
     * Set votingLocked
     *
     * @param boolean $votingLocked
     * @return SmfPolls
     */
    public function setVotingLocked($votingLocked)
    {
        $this->votingLocked = $votingLocked;

        return $this;
    }

    /**
     * Get votingLocked
     *
     * @return boolean 
     */
    public function getVotingLocked()
    {
        return $this->votingLocked;
    }

    /**
     * Set maxVotes
     *
     * @param boolean $maxVotes
     * @return SmfPolls
     */
    public function setMaxVotes($maxVotes)
    {
        $this->maxVotes = $maxVotes;

        return $this;
    }

    /**
     * Get maxVotes
     *
     * @return boolean 
     */
    public function getMaxVotes()
    {
        return $this->maxVotes;
    }

    /**
     * Set expireTime
     *
     * @param integer $expireTime
     * @return SmfPolls
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
     * Set hideResults
     *
     * @param boolean $hideResults
     * @return SmfPolls
     */
    public function setHideResults($hideResults)
    {
        $this->hideResults = $hideResults;

        return $this;
    }

    /**
     * Get hideResults
     *
     * @return boolean 
     */
    public function getHideResults()
    {
        return $this->hideResults;
    }

    /**
     * Set changeVote
     *
     * @param boolean $changeVote
     * @return SmfPolls
     */
    public function setChangeVote($changeVote)
    {
        $this->changeVote = $changeVote;

        return $this;
    }

    /**
     * Get changeVote
     *
     * @return boolean 
     */
    public function getChangeVote()
    {
        return $this->changeVote;
    }

    /**
     * Set idMember
     *
     * @param integer $idMember
     * @return SmfPolls
     */
    public function setIdMember($idMember)
    {
        $this->idMember = $idMember;

        return $this;
    }

    /**
     * Get idMember
     *
     * @return integer 
     */
    public function getIdMember()
    {
        return $this->idMember;
    }

    /**
     * Set posterName
     *
     * @param string $posterName
     * @return SmfPolls
     */
    public function setPosterName($posterName)
    {
        $this->posterName = $posterName;

        return $this;
    }

    /**
     * Get posterName
     *
     * @return string 
     */
    public function getPosterName()
    {
        return $this->posterName;
    }

    /**
     * Set guestVote
     *
     * @param boolean $guestVote
     * @return SmfPolls
     */
    public function setGuestVote($guestVote)
    {
        $this->guestVote = $guestVote;

        return $this;
    }

    /**
     * Get guestVote
     *
     * @return boolean 
     */
    public function getGuestVote()
    {
        return $this->guestVote;
    }

    /**
     * Set numGuestVoters
     *
     * @param integer $numGuestVoters
     * @return SmfPolls
     */
    public function setNumGuestVoters($numGuestVoters)
    {
        $this->numGuestVoters = $numGuestVoters;

        return $this;
    }

    /**
     * Get numGuestVoters
     *
     * @return integer 
     */
    public function getNumGuestVoters()
    {
        return $this->numGuestVoters;
    }

    /**
     * Set resetPoll
     *
     * @param integer $resetPoll
     * @return SmfPolls
     */
    public function setResetPoll($resetPoll)
    {
        $this->resetPoll = $resetPoll;

        return $this;
    }

    /**
     * Get resetPoll
     *
     * @return integer 
     */
    public function getResetPoll()
    {
        return $this->resetPoll;
    }
}
