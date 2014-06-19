<?php

namespace Sima\SmfForumBundle\Model;



/**
 * SmfPrettyUrlsCache
 */
abstract class AbstractSmfPrettyUrlsCache
{
    /**
     * @var string
     */
    protected $urlId;

    /**
     * @var string
     */
    protected $replacement;


    /**
     * Get urlId
     *
     * @return string 
     */
    public function getUrlId()
    {
        return $this->urlId;
    }

    /**
     * Set replacement
     *
     * @param string $replacement
     * @return SmfPrettyUrlsCache
     */
    public function setReplacement($replacement)
    {
        $this->replacement = $replacement;

        return $this;
    }

    /**
     * Get replacement
     *
     * @return string 
     */
    public function getReplacement()
    {
        return $this->replacement;
    }
}
