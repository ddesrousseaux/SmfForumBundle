<?php

namespace Sima\SmfForumBundle\Model;



/**
 * SmfCalendarHolidays
 */
interface SmfCalendarHolidaysInterface
{
    /**
     * @var integer
     */
    private $idHoliday;

    /**
     * @var \DateTime
     */
    private $eventDate;

    /**
     * @var string
     */
    private $title;


    /**
     * Get idHoliday
     *
     * @return integer 
     */
    public function getIdHoliday()
    {
        return $this->idHoliday;
    }

    /**
     * Set eventDate
     *
     * @param \DateTime $eventDate
     * @return SmfCalendarHolidays
     */
    public function setEventDate($eventDate)
    {
        $this->eventDate = $eventDate;

        return $this;
    }

    /**
     * Get eventDate
     *
     * @return \DateTime 
     */
    public function getEventDate()
    {
        return $this->eventDate;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return SmfCalendarHolidays
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
}
