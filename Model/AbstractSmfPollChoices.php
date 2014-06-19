<?php

namespace Sima\SmfForumBundle\Model;



/**
 * SmfPollChoices
 */
abstract class AbstractSmfPollChoices
{
    /**
     * @var integer
     */
    protected $idPoll;

    /**
     * @var boolean
     */
    protected $idChoice;

    /**
     * @var string
     */
    protected $label;

    /**
     * @var integer
     */
    protected $votes;


    /**
     * Set idPoll
     *
     * @param integer $idPoll
     * @return SmfPollChoices
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
     * Set idChoice
     *
     * @param boolean $idChoice
     * @return SmfPollChoices
     */
    public function setIdChoice($idChoice)
    {
        $this->idChoice = $idChoice;

        return $this;
    }

    /**
     * Get idChoice
     *
     * @return boolean 
     */
    public function getIdChoice()
    {
        return $this->idChoice;
    }

    /**
     * Set label
     *
     * @param string $label
     * @return SmfPollChoices
     */
    public function setLabel($label)
    {
        $this->label = $label;

        return $this;
    }

    /**
     * Get label
     *
     * @return string 
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Set votes
     *
     * @param integer $votes
     * @return SmfPollChoices
     */
    public function setVotes($votes)
    {
        $this->votes = $votes;

        return $this;
    }

    /**
     * Get votes
     *
     * @return integer 
     */
    public function getVotes()
    {
        return $this->votes;
    }
}
