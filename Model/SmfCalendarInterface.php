<?php

namespace Sima\SmfForumBundle\Model;



/**
 * SmfCalendar
 */
interface SmfCalendarInterface
{
    /**
     * @var integer
     */
    private $idEvent;

    /**
     * @var \DateTime
     */
    private $startDate;

    /**
     * @var integer
     */
    private $idBoard;

    /**
     * @var integer
     */
    private $idTopic;

    /**
     * @var string
     */
    private $title;

    /**
     * @var integer
     */
    private $idMember;

    /**
     * @var \DateTime
     */
    private $endDate;


    /**
     * Get idEvent
     *
     * @return integer 
     */
    public function getIdEvent()
    {
        return $this->idEvent;
    }

    /**
     * Set startDate
     *
     * @param \DateTime $startDate
     * @return SmfCalendar
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * Get startDate
     *
     * @return \DateTime 
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Set idBoard
     *
     * @param integer $idBoard
     * @return SmfCalendar
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
     * Set idTopic
     *
     * @param integer $idTopic
     * @return SmfCalendar
     */
    public function setIdTopic($idTopic)
    {
        $this->idTopic = $idTopic;

        return $this;
    }

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
     * Set title
     *
     * @param string $title
     * @return SmfCalendar
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set idMember
     *
     * @param integer $idMember
     * @return SmfCalendar
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
     * Set endDate
     *
     * @param \DateTime $endDate
     * @return SmfCalendar
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * Get endDate
     *
     * @return \DateTime 
     */
    public function getEndDate()
    {
        return $this->endDate;
    }
}
