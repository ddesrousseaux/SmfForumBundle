<?php

namespace Sima\SmfForumBundle\Model;



/**
 * SmfBanItems
 */
abstract class AbstractSmfBanItems
{
    /**
     * @var integer
     */
    protected $idBan;

    /**
     * @var integer
     */
    protected $idBanGroup;

    /**
     * @var boolean
     */
    protected $ipLow1;

    /**
     * @var boolean
     */
    protected $ipHigh1;

    /**
     * @var boolean
     */
    protected $ipLow2;

    /**
     * @var boolean
     */
    protected $ipHigh2;

    /**
     * @var boolean
     */
    protected $ipLow3;

    /**
     * @var boolean
     */
    protected $ipHigh3;

    /**
     * @var boolean
     */
    protected $ipLow4;

    /**
     * @var boolean
     */
    protected $ipHigh4;

    /**
     * @var string
     */
    protected $hostname;

    /**
     * @var string
     */
    protected $emailAddress;

    /**
     * @var integer
     */
    protected $idMember;

    /**
     * @var integer
     */
    protected $hits;


    /**
     * Get idBan
     *
     * @return integer 
     */
    public function getIdBan()
    {
        return $this->idBan;
    }

    /**
     * Set idBanGroup
     *
     * @param integer $idBanGroup
     * @return SmfBanItems
     */
    public function setIdBanGroup($idBanGroup)
    {
        $this->idBanGroup = $idBanGroup;

        return $this;
    }

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
     * Set ipLow1
     *
     * @param boolean $ipLow1
     * @return SmfBanItems
     */
    public function setIpLow1($ipLow1)
    {
        $this->ipLow1 = $ipLow1;

        return $this;
    }

    /**
     * Get ipLow1
     *
     * @return boolean 
     */
    public function getIpLow1()
    {
        return $this->ipLow1;
    }

    /**
     * Set ipHigh1
     *
     * @param boolean $ipHigh1
     * @return SmfBanItems
     */
    public function setIpHigh1($ipHigh1)
    {
        $this->ipHigh1 = $ipHigh1;

        return $this;
    }

    /**
     * Get ipHigh1
     *
     * @return boolean 
     */
    public function getIpHigh1()
    {
        return $this->ipHigh1;
    }

    /**
     * Set ipLow2
     *
     * @param boolean $ipLow2
     * @return SmfBanItems
     */
    public function setIpLow2($ipLow2)
    {
        $this->ipLow2 = $ipLow2;

        return $this;
    }

    /**
     * Get ipLow2
     *
     * @return boolean 
     */
    public function getIpLow2()
    {
        return $this->ipLow2;
    }

    /**
     * Set ipHigh2
     *
     * @param boolean $ipHigh2
     * @return SmfBanItems
     */
    public function setIpHigh2($ipHigh2)
    {
        $this->ipHigh2 = $ipHigh2;

        return $this;
    }

    /**
     * Get ipHigh2
     *
     * @return boolean 
     */
    public function getIpHigh2()
    {
        return $this->ipHigh2;
    }

    /**
     * Set ipLow3
     *
     * @param boolean $ipLow3
     * @return SmfBanItems
     */
    public function setIpLow3($ipLow3)
    {
        $this->ipLow3 = $ipLow3;

        return $this;
    }

    /**
     * Get ipLow3
     *
     * @return boolean 
     */
    public function getIpLow3()
    {
        return $this->ipLow3;
    }

    /**
     * Set ipHigh3
     *
     * @param boolean $ipHigh3
     * @return SmfBanItems
     */
    public function setIpHigh3($ipHigh3)
    {
        $this->ipHigh3 = $ipHigh3;

        return $this;
    }

    /**
     * Get ipHigh3
     *
     * @return boolean 
     */
    public function getIpHigh3()
    {
        return $this->ipHigh3;
    }

    /**
     * Set ipLow4
     *
     * @param boolean $ipLow4
     * @return SmfBanItems
     */
    public function setIpLow4($ipLow4)
    {
        $this->ipLow4 = $ipLow4;

        return $this;
    }

    /**
     * Get ipLow4
     *
     * @return boolean 
     */
    public function getIpLow4()
    {
        return $this->ipLow4;
    }

    /**
     * Set ipHigh4
     *
     * @param boolean $ipHigh4
     * @return SmfBanItems
     */
    public function setIpHigh4($ipHigh4)
    {
        $this->ipHigh4 = $ipHigh4;

        return $this;
    }

    /**
     * Get ipHigh4
     *
     * @return boolean 
     */
    public function getIpHigh4()
    {
        return $this->ipHigh4;
    }

    /**
     * Set hostname
     *
     * @param string $hostname
     * @return SmfBanItems
     */
    public function setHostname($hostname)
    {
        $this->hostname = $hostname;

        return $this;
    }

    /**
     * Get hostname
     *
     * @return string 
     */
    public function getHostname()
    {
        return $this->hostname;
    }

    /**
     * Set emailAddress
     *
     * @param string $emailAddress
     * @return SmfBanItems
     */
    public function setEmailAddress($emailAddress)
    {
        $this->emailAddress = $emailAddress;

        return $this;
    }

    /**
     * Get emailAddress
     *
     * @return string 
     */
    public function getEmailAddress()
    {
        return $this->emailAddress;
    }

    /**
     * Set idMember
     *
     * @param integer $idMember
     * @return SmfBanItems
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
     * Set hits
     *
     * @param integer $hits
     * @return SmfBanItems
     */
    public function setHits($hits)
    {
        $this->hits = $hits;

        return $this;
    }

    /**
     * Get hits
     *
     * @return integer 
     */
    public function getHits()
    {
        return $this->hits;
    }
}
