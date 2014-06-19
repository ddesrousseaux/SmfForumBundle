<?php

namespace Sima\SmfForumBundle\Model;



/**
 * SmfPmRecipients
 */
abstract class AbstractSmfPmRecipients
{
    /**
     * @var integer
     */
    protected $idPm;

    /**
     * @var integer
     */
    protected $idMember;

    /**
     * @var boolean
     */
    protected $bcc;

    /**
     * @var boolean
     */
    protected $isRead;

    /**
     * @var boolean
     */
    protected $deleted;

    /**
     * @var string
     */
    protected $labels;

    /**
     * @var boolean
     */
    protected $isNew;


    /**
     * Set idPm
     *
     * @param integer $idPm
     * @return SmfPmRecipients
     */
    public function setIdPm($idPm)
    {
        $this->idPm = $idPm;

        return $this;
    }

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
     * Set idMember
     *
     * @param integer $idMember
     * @return SmfPmRecipients
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
     * Set bcc
     *
     * @param boolean $bcc
     * @return SmfPmRecipients
     */
    public function setBcc($bcc)
    {
        $this->bcc = $bcc;

        return $this;
    }

    /**
     * Get bcc
     *
     * @return boolean 
     */
    public function getBcc()
    {
        return $this->bcc;
    }

    /**
     * Set isRead
     *
     * @param boolean $isRead
     * @return SmfPmRecipients
     */
    public function setIsRead($isRead)
    {
        $this->isRead = $isRead;

        return $this;
    }

    /**
     * Get isRead
     *
     * @return boolean 
     */
    public function getIsRead()
    {
        return $this->isRead;
    }

    /**
     * Set deleted
     *
     * @param boolean $deleted
     * @return SmfPmRecipients
     */
    public function setDeleted($deleted)
    {
        $this->deleted = $deleted;

        return $this;
    }

    /**
     * Get deleted
     *
     * @return boolean 
     */
    public function getDeleted()
    {
        return $this->deleted;
    }

    /**
     * Set labels
     *
     * @param string $labels
     * @return SmfPmRecipients
     */
    public function setLabels($labels)
    {
        $this->labels = $labels;

        return $this;
    }

    /**
     * Get labels
     *
     * @return string 
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Set isNew
     *
     * @param boolean $isNew
     * @return SmfPmRecipients
     */
    public function setIsNew($isNew)
    {
        $this->isNew = $isNew;

        return $this;
    }

    /**
     * Get isNew
     *
     * @return boolean 
     */
    public function getIsNew()
    {
        return $this->isNew;
    }
}
