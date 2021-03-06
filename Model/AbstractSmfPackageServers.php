<?php

namespace Sima\SmfForumBundle\Model;



/**
 * SmfPackageServers
 */
abstract class AbstractSmfPackageServers
{
    /**
     * @var integer
     */
    protected $idServer;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $url;


    /**
     * Get idServer
     *
     * @return integer 
     */
    public function getIdServer()
    {
        return $this->idServer;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return SmfPackageServers
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set url
     *
     * @param string $url
     * @return SmfPackageServers
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }
}
