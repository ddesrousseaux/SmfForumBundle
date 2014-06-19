<?php

namespace Sima\SmfForumBundle\Model;



/**
 * SmfSpiders
 */
abstract class AbstractSmfSpiders
{
    /**
     * @var integer
     */
    protected $idSpider;

    /**
     * @var string
     */
    protected $spiderName;

    /**
     * @var string
     */
    protected $userAgent;

    /**
     * @var string
     */
    protected $ipInfo;


    /**
     * Get idSpider
     *
     * @return integer 
     */
    public function getIdSpider()
    {
        return $this->idSpider;
    }

    /**
     * Set spiderName
     *
     * @param string $spiderName
     * @return SmfSpiders
     */
    public function setSpiderName($spiderName)
    {
        $this->spiderName = $spiderName;

        return $this;
    }

    /**
     * Get spiderName
     *
     * @return string 
     */
    public function getSpiderName()
    {
        return $this->spiderName;
    }

    /**
     * Set userAgent
     *
     * @param string $userAgent
     * @return SmfSpiders
     */
    public function setUserAgent($userAgent)
    {
        $this->userAgent = $userAgent;

        return $this;
    }

    /**
     * Get userAgent
     *
     * @return string 
     */
    public function getUserAgent()
    {
        return $this->userAgent;
    }

    /**
     * Set ipInfo
     *
     * @param string $ipInfo
     * @return SmfSpiders
     */
    public function setIpInfo($ipInfo)
    {
        $this->ipInfo = $ipInfo;

        return $this;
    }

    /**
     * Get ipInfo
     *
     * @return string 
     */
    public function getIpInfo()
    {
        return $this->ipInfo;
    }
}
