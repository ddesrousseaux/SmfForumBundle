<?php

namespace Sima\SmfForumBundle\Model;



/**
 * SmfMailQueue
 */
abstract class AbstractSmfMailQueue
{
    /**
     * @var integer
     */
    protected $idMail;

    /**
     * @var integer
     */
    protected $timeSent;

    /**
     * @var string
     */
    protected $recipient;

    /**
     * @var string
     */
    protected $body;

    /**
     * @var string
     */
    protected $subject;

    /**
     * @var string
     */
    protected $headers;

    /**
     * @var boolean
     */
    protected $sendHtml;

    /**
     * @var boolean
     */
    protected $priority;

    /**
     * @var boolean
     */
    protected $protected;


    /**
     * Get idMail
     *
     * @return integer 
     */
    public function getIdMail()
    {
        return $this->idMail;
    }

    /**
     * Set timeSent
     *
     * @param integer $timeSent
     * @return SmfMailQueue
     */
    public function setTimeSent($timeSent)
    {
        $this->timeSent = $timeSent;

        return $this;
    }

    /**
     * Get timeSent
     *
     * @return integer 
     */
    public function getTimeSent()
    {
        return $this->timeSent;
    }

    /**
     * Set recipient
     *
     * @param string $recipient
     * @return SmfMailQueue
     */
    public function setRecipient($recipient)
    {
        $this->recipient = $recipient;

        return $this;
    }

    /**
     * Get recipient
     *
     * @return string 
     */
    public function getRecipient()
    {
        return $this->recipient;
    }

    /**
     * Set body
     *
     * @param string $body
     * @return SmfMailQueue
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
     * Set subject
     *
     * @param string $subject
     * @return SmfMailQueue
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
     * Set headers
     *
     * @param string $headers
     * @return SmfMailQueue
     */
    public function setHeaders($headers)
    {
        $this->headers = $headers;

        return $this;
    }

    /**
     * Get headers
     *
     * @return string 
     */
    public function getHeaders()
    {
        return $this->headers;
    }

    /**
     * Set sendHtml
     *
     * @param boolean $sendHtml
     * @return SmfMailQueue
     */
    public function setSendHtml($sendHtml)
    {
        $this->sendHtml = $sendHtml;

        return $this;
    }

    /**
     * Get sendHtml
     *
     * @return boolean 
     */
    public function getSendHtml()
    {
        return $this->sendHtml;
    }

    /**
     * Set priority
     *
     * @param boolean $priority
     * @return SmfMailQueue
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;

        return $this;
    }

    /**
     * Get priority
     *
     * @return boolean 
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * Set protected
     *
     * @param boolean $protected
     * @return SmfMailQueue
     */
    public function setprotected($protected)
    {
        $this->protected = $protected;

        return $this;
    }

    /**
     * Get protected
     *
     * @return boolean 
     */
    public function getprotected()
    {
        return $this->protected;
    }
}
