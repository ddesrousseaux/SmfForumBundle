<?php

namespace Sima\SmfForumBundle\Model;



/**
 * SmfOpenidAssoc
 */
abstract class AbstractSmfOpenidAssoc
{
    /**
     * @var string
     */
    protected $serverUrl;

    /**
     * @var string
     */
    protected $handle;

    /**
     * @var string
     */
    protected $secret;

    /**
     * @var integer
     */
    protected $issued;

    /**
     * @var integer
     */
    protected $expires;

    /**
     * @var string
     */
    protected $assocType;


    /**
     * Set serverUrl
     *
     * @param string $serverUrl
     * @return SmfOpenidAssoc
     */
    public function setServerUrl($serverUrl)
    {
        $this->serverUrl = $serverUrl;

        return $this;
    }

    /**
     * Get serverUrl
     *
     * @return string 
     */
    public function getServerUrl()
    {
        return $this->serverUrl;
    }

    /**
     * Set handle
     *
     * @param string $handle
     * @return SmfOpenidAssoc
     */
    public function setHandle($handle)
    {
        $this->handle = $handle;

        return $this;
    }

    /**
     * Get handle
     *
     * @return string 
     */
    public function getHandle()
    {
        return $this->handle;
    }

    /**
     * Set secret
     *
     * @param string $secret
     * @return SmfOpenidAssoc
     */
    public function setSecret($secret)
    {
        $this->secret = $secret;

        return $this;
    }

    /**
     * Get secret
     *
     * @return string 
     */
    public function getSecret()
    {
        return $this->secret;
    }

    /**
     * Set issued
     *
     * @param integer $issued
     * @return SmfOpenidAssoc
     */
    public function setIssued($issued)
    {
        $this->issued = $issued;

        return $this;
    }

    /**
     * Get issued
     *
     * @return integer 
     */
    public function getIssued()
    {
        return $this->issued;
    }

    /**
     * Set expires
     *
     * @param integer $expires
     * @return SmfOpenidAssoc
     */
    public function setExpires($expires)
    {
        $this->expires = $expires;

        return $this;
    }

    /**
     * Get expires
     *
     * @return integer 
     */
    public function getExpires()
    {
        return $this->expires;
    }

    /**
     * Set assocType
     *
     * @param string $assocType
     * @return SmfOpenidAssoc
     */
    public function setAssocType($assocType)
    {
        $this->assocType = $assocType;

        return $this;
    }

    /**
     * Get assocType
     *
     * @return string 
     */
    public function getAssocType()
    {
        return $this->assocType;
    }
}
