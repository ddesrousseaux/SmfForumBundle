<?php

namespace Sima\SmfForumBundle\Model;



/**
 * SmfScheduledTasks
 */
interface SmfScheduledTasksInterface
{
    /**
     * @var integer
     */
    private $idTask;

    /**
     * @var integer
     */
    private $nextTime;

    /**
     * @var integer
     */
    private $timeOffset;

    /**
     * @var integer
     */
    private $timeRegularity;

    /**
     * @var string
     */
    private $timeUnit;

    /**
     * @var boolean
     */
    private $disabled;

    /**
     * @var string
     */
    private $task;


    /**
     * Get idTask
     *
     * @return integer 
     */
    public function getIdTask()
    {
        return $this->idTask;
    }

    /**
     * Set nextTime
     *
     * @param integer $nextTime
     * @return SmfScheduledTasks
     */
    public function setNextTime($nextTime)
    {
        $this->nextTime = $nextTime;

        return $this;
    }

    /**
     * Get nextTime
     *
     * @return integer 
     */
    public function getNextTime()
    {
        return $this->nextTime;
    }

    /**
     * Set timeOffset
     *
     * @param integer $timeOffset
     * @return SmfScheduledTasks
     */
    public function setTimeOffset($timeOffset)
    {
        $this->timeOffset = $timeOffset;

        return $this;
    }

    /**
     * Get timeOffset
     *
     * @return integer 
     */
    public function getTimeOffset()
    {
        return $this->timeOffset;
    }

    /**
     * Set timeRegularity
     *
     * @param integer $timeRegularity
     * @return SmfScheduledTasks
     */
    public function setTimeRegularity($timeRegularity)
    {
        $this->timeRegularity = $timeRegularity;

        return $this;
    }

    /**
     * Get timeRegularity
     *
     * @return integer 
     */
    public function getTimeRegularity()
    {
        return $this->timeRegularity;
    }

    /**
     * Set timeUnit
     *
     * @param string $timeUnit
     * @return SmfScheduledTasks
     */
    public function setTimeUnit($timeUnit)
    {
        $this->timeUnit = $timeUnit;

        return $this;
    }

    /**
     * Get timeUnit
     *
     * @return string 
     */
    public function getTimeUnit()
    {
        return $this->timeUnit;
    }

    /**
     * Set disabled
     *
     * @param boolean $disabled
     * @return SmfScheduledTasks
     */
    public function setDisabled($disabled)
    {
        $this->disabled = $disabled;

        return $this;
    }

    /**
     * Get disabled
     *
     * @return boolean 
     */
    public function getDisabled()
    {
        return $this->disabled;
    }

    /**
     * Set task
     *
     * @param string $task
     * @return SmfScheduledTasks
     */
    public function setTask($task)
    {
        $this->task = $task;

        return $this;
    }

    /**
     * Get task
     *
     * @return string 
     */
    public function getTask()
    {
        return $this->task;
    }
}
