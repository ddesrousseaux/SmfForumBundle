<?php

namespace Sima\SmfForumBundle\Model;



/**
 * SmfPersonalMessages
 */
abstract class AbstractSmfPersonalMessages
{
    /**
     * @var integer
     */
    protected $idPm;

    /**
     * @var integer
     */
    protected $idPmHead;

    /**
     * @var integer
     */
    protected $idMemberFrom;

    /**
     * @var boolean
     */
    protected $deletedBySender;

    /**
     * @var string
     */
    protected $fromName;

    /**
     * @var integer
     */
    protected $msgtime;

    /**
     * @var string
     */
    protected $subject;

    /**
     * @var string
     */
    protected $body;


    /**
     * Get idPm
     *
     * @return integer 
     */
    public function getIdPm()
    {
        return $this->idPm;
    }

    /**
     * Set idPmHead
     *
     * @param integer $idPmHead
     * @return SmfPersonalMessages
     */
    public function setIdPmHead($idPmHead)
    {
        $this->idPmHead = $idPmHead;

        return $this;
    }

    /**
     * Get idPmHead
     *
     * @return integer 
     */
    public function getIdPmHead()
    {
        return $this->idPmHead;
    }

    /**
     * Set idMemberFrom
     *
     * @param integer $idMemberFrom
     * @return SmfPersonalMessages
     */
    public function setIdMemberFrom($idMemberFrom)
    {
        $this->idMemberFrom = $idMemberFrom;

        return $this;
    }

    /**
     * Get idMemberFrom
     *
     * @return integer 
     */
    public function getIdMemberFrom()
    {
        return $this->idMemberFrom;
    }

    /**
     * Set deletedBySender
     *
     * @param boolean $deletedBySender
     * @return SmfPersonalMessages
     */
    public function setDeletedBySender($deletedBySender)
    {
        $this->deletedBySender = $deletedBySender;

        return $this;
    }

    /**
     * Get deletedBySender
     *
     * @return boolean 
     */
    public function getDeletedBySender()
    {
        return $this->deletedBySender;
    }

    /**
     * Set fromName
     *
     * @param string $fromName
     * @return SmfPersonalMessages
     */
    public function setFromName($fromName)
    {
        $this->fromName = $fromName;

        return $this;
    }

    /**
     * Get fromName
     *
     * @return string 
     */
    public function getFromName()
    {
        return $this->fromName;
    }

    /**
     * Set msgtime
     *
     * @param integer $msgtime
     * @return SmfPersonalMessages
     */
    public function setMsgtime($msgtime)
    {
        $this->msgtime = $msgtime;

        return $this;
    }

    /**
     * Get msgtime
     *
     * @return integer 
     */
    public function getMsgtime()
    {
        return $this->msgtime;
    }

    /**
     * Set subject
     *
     * @param string $subject
     * @return SmfPersonalMessages
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
     * Set body
     *
     * @param string $body
     * @return SmfPersonalMessages
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
}
