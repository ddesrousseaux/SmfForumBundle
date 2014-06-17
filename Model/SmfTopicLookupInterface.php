<?php

namespace Sima\SmfForumBundle\Model;



/**
 * SmfTopicLookup
 */
interface SmfTopicLookupInterface
{
    /**
     * @var integer
     */
    private $idTopic;

    /**
     * @var integer
     */
    private $idBoard;

    /**
     * @var string
     */
    private $topicText;


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
