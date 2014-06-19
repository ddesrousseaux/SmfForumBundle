<?php

namespace Sima\SmfForumBundle\Model;



/**
 * SmfPrettyTopicUrls
 */
abstract class AbstractSmfPrettyTopicUrls
{
    /**
     * @var integer
     */
    protected $idTopic;

    /**
     * @var string
     */
    protected $prettyUrl;


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
     * Set prettyUrl
     *
     * @param string $prettyUrl
     * @return SmfPrettyTopicUrls
     */
    public function setPrettyUrl($prettyUrl)
    {
        $this->prettyUrl = $prettyUrl;

        return $this;
    }

    /**
     * Get prettyUrl
     *
     * @return string 
     */
    public function getPrettyUrl()
    {
        return $this->prettyUrl;
    }
}
