<?php

namespace Sima\SmfForumBundle\Model;



/**
 * SmfSessions
 */
interface SmfSessionsInterface
{
    /**
     * @var string
     */
    private $sessionId;

    /**
     * @var integer
     */
    private $lastUpdate;

    /**
     * @var string
     */
    private $data;


    /**
     * Get sessionId
     *
     * @return string 
     */
    public function getSessionId()
    {
        return $this->sessionId;
    }

    /**
     * Set lastUpdate
     *
     * @param integer $lastUpdate
     * @return SmfSessions
     */
    public function setLastUpdate($lastUpdate)
    {
        $this->lastUpdate = $lastUpdate;

        return $this;
    }

    /**
     * Get lastUpdate
     *
     * @return integer 
     */
    public function getLastUpdate()
    {
        return $this->lastUpdate;
    }

    /**
     * Set data
     *
     * @param string $data
     * @return SmfSessions
     */
    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * Get data
     *
     * @return string 
     */
    public function getData()
    {
        return $this->data;
    }
}
