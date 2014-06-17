<?php

namespace Sima\SmfForumBundle\Model;



/**
 * SmfMessages
 */
interface SmfMessagesInterface
{
    /**
     * @var integer
     */
    private $idMsg;

    /**
     * @var integer
     */
    private $idTopic;

    /**
     * @var integer
     */
    private $idBoard;

    /**
     * @var integer
     */
    private $posterTime;

    /**
     * @var integer
     */
    private $idMember;

    /**
     * @var integer
     */
    private $idMsgModified;

    /**
     * @var string
     */
    private $subject;

    /**
     * @var string
     */
    private $posterName;

    /**
     * @var string
     */
    private $posterEmail;

    /**
     * @var string
     */
    private $posterIp;

    /**
     * @var boolean
     */
    private $smileysEnabled;

    /**
     * @var integer
     */
    private $modifiedTime;

    /**
     * @var string
     */
    private $modifiedName;

    /**
     * @var string
     */
    private $body;

    /**
     * @var string
     */
    private $icon;

    /**
     * @var boolean
     */
    private $approved;


    /**
     * Get idMsg
     *
     * @return integer 
     */
    public function getIdMsg()
    {
        return $this->idMsg;
    }

    /**
     * Set idTopic
     *
     * @param integer $idTopic
     * @return SmfMessages
     */
    public function setIdTopic($idTopic)
    {
        $this->idTopic = $idTopic;

        return $this;
    }

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
     * @return SmfMessages
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
     * Set posterTime
     *
     * @param integer $posterTime
     * @return SmfMessages
     */
    public function setPosterTime($posterTime)
    {
        $this->posterTime = $posterTime;

        return $this;
    }

    /**
     * Get posterTime
     *
     * @return integer 
     */
    public function getPosterTime()
    {
        return $this->posterTime;
    }

    /**
     * Set idMember
     *
     * @param integer $idMember
     * @return SmfMessages
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
     * Set idMsgModified
     *
     * @param integer $idMsgModified
     * @return SmfMessages
     */
    public function setIdMsgModified($idMsgModified)
    {
        $this->idMsgModified = $idMsgModified;

        return $this;
    }

    /**
     * Get idMsgModified
     *
     * @return integer 
     */
    public function getIdMsgModified()
    {
        return $this->idMsgModified;
    }

    /**
     * Set subject
     *
     * @param string $subject
     * @return SmfMessages
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;

        return $this;
    }

    /**
     * Get subject
     *
     * @return string 
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Set posterName
     *
     * @param string $posterName
     * @return SmfMessages
     */
    public function setPosterName($posterName)
    {
        $this->posterName = $posterName;

        return $this;
    }

    /**
     * Get posterName
     *
     * @return string 
     */
    public function getPosterName()
    {
        return $this->posterName;
    }

    /**
     * Set posterEmail
     *
     * @param string $posterEmail
     * @return SmfMessages
     */
    public function setPosterEmail($posterEmail)
    {
        $this->posterEmail = $posterEmail;

        return $this;
    }

    /**
     * Get posterEmail
     *
     * @return string 
     */
    public function getPosterEmail()
    {
        return $this->posterEmail;
    }

    /**
     * Set posterIp
     *
     * @param string $posterIp
     * @return SmfMessages
     */
    public function setPosterIp($posterIp)
    {
        $this->posterIp = $posterIp;

        return $this;
    }

    /**
     * Get posterIp
     *
     * @return string 
     */
    public function getPosterIp()
    {
        return $this->posterIp;
    }

    /**
     * Set smileysEnabled
     *
     * @param boolean $smileysEnabled
     * @return SmfMessages
     */
    public function setSmileysEnabled($smileysEnabled)
    {
        $this->smileysEnabled = $smileysEnabled;

        return $this;
    }

    /**
     * Get smileysEnabled
     *
     * @return boolean 
     */
    public function getSmileysEnabled()
    {
        return $this->smileysEnabled;
    }

    /**
     * Set modifiedTime
     *
     * @param integer $modifiedTime
     * @return SmfMessages
     */
    public function setModifiedTime($modifiedTime)
    {
        $this->modifiedTime = $modifiedTime;

        return $this;
    }

    /**
     * Get modifiedTime
     *
     * @return integer 
     */
    public function getModifiedTime()
    {
        return $this->modifiedTime;
    }

    /**
     * Set modifiedName
     *
     * @param string $modifiedName
     * @return SmfMessages
     */
    public function setModifiedName($modifiedName)
    {
        $this->modifiedName = $modifiedName;

        return $this;
    }

    /**
     * Get modifiedName
     *
     * @return string 
     */
    public function getModifiedName()
    {
        return $this->modifiedName;
    }

    /**
     * Set body
     *
     * @param string $body
     * @return SmfMessages
     */
    public function setBody($body)
    {
        $this->body = $body;

        return $this;
    }

    /**
     * Get body
     *
     * @return string 
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Set icon
     *
     * @param string $icon
     * @return SmfMessages
     */
    public function setIcon($icon)
    {
        $this->icon = $icon;

        return $this;
    }

    /**
     * Get icon
     *
     * @return string 
     */
    public function getIcon()
    {
        return $this->icon;
    }

    /**
     * Set approved
     *
     * @param boolean $approved
     * @return SmfMessages
     */
    public function setApproved($approved)
    {
        $this->approved = $approved;

        return $this;
    }

    /**
     * Get approved
     *
     * @return boolean 
     */
    public function getApproved()
    {
        return $this->approved;
    }
}
