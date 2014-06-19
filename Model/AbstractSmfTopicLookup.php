<?php

namespace Sima\SmfForumBundle\Model;



/**
 * SmfTopicLookup
 */
abstract class AbstractSmfTopicLookup
{
    /**
     * @var integer
     */
    protected $idTopic;

    /**
     * @var integer
     */
    protected $idBoard;

    /**
     * @var string
     */
    protected $topicText;


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
     * Set idBoard
     *
     * @param integer $idBoard
     * @return SmfTopicLookup
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
     * Set topicText
     *
     * @param string $topicText
     * @return SmfTopicLookup
     */
    public function setTopicText($topicText)
    {
        $this->topicText = $topicText;

        return $this;
    }

    /**
     * Get topicText
     *
     * @return string 
     */
    public function getTopicText()
    {
        return $this->topicText;
    }
}
