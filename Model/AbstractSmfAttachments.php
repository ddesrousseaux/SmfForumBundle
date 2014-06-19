<?php

namespace Sima\SmfForumBundle\Model;



/**
 * SmfAttachments
 */
abstract class AbstractSmfAttachments
{
    /**
     * @var integer
     */
    protected $idAttach;

    /**
     * @var integer
     */
    protected $idThumb;

    /**
     * @var integer
     */
    protected $idMsg;

    /**
     * @var integer
     */
    protected $idMember;

    /**
     * @var string
     */
    protected $filename;

    /**
     * @var integer
     */
    protected $size;

    /**
     * @var integer
     */
    protected $downloads;

    /**
     * @var boolean
     */
    protected $attachmentType;

    /**
     * @var integer
     */
    protected $width;

    /**
     * @var integer
     */
    protected $height;

    /**
     * @var string
     */
    protected $fileHash;

    /**
     * @var string
     */
    protected $fileext;

    /**
     * @var string
     */
    protected $mimeType;

    /**
     * @var boolean
     */
    protected $idFolder;

    /**
     * @var boolean
     */
    protected $approved;


    /**
     * Get idAttach
     *
     * @return integer 
     */
    public function getIdAttach()
    {
        return $this->idAttach;
    }

    /**
     * Set idThumb
     *
     * @param integer $idThumb
     * @return SmfAttachments
     */
    public function setIdThumb($idThumb)
    {
        $this->idThumb = $idThumb;

        return $this;
    }

    /**
     * Get idThumb
     *
     * @return integer 
     */
    public function getIdThumb()
    {
        return $this->idThumb;
    }

    /**
     * Set idMsg
     *
     * @param integer $idMsg
     * @return SmfAttachments
     */
    public function setIdMsg($idMsg)
    {
        $this->idMsg = $idMsg;

        return $this;
    }

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
     * Set idMember
     *
     * @param integer $idMember
     * @return SmfAttachments
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
     * Set filename
     *
     * @param string $filename
     * @return SmfAttachments
     */
    public function setFilename($filename)
    {
        $this->filename = $filename;

        return $this;
    }

    /**
     * Get filename
     *
     * @return string 
     */
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     * Set size
     *
     * @param integer $size
     * @return SmfAttachments
     */
    public function setSize($size)
    {
        $this->size = $size;

        return $this;
    }

    /**
     * Get size
     *
     * @return integer 
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Set downloads
     *
     * @param integer $downloads
     * @return SmfAttachments
     */
    public function setDownloads($downloads)
    {
        $this->downloads = $downloads;

        return $this;
    }

    /**
     * Get downloads
     *
     * @return integer 
     */
    public function getDownloads()
    {
        return $this->downloads;
    }

    /**
     * Set attachmentType
     *
     * @param boolean $attachmentType
     * @return SmfAttachments
     */
    public function setAttachmentType($attachmentType)
    {
        $this->attachmentType = $attachmentType;

        return $this;
    }

    /**
     * Get attachmentType
     *
     * @return boolean 
     */
    public function getAttachmentType()
    {
        return $this->attachmentType;
    }

    /**
     * Set width
     *
     * @param integer $width
     * @return SmfAttachments
     */
    public function setWidth($width)
    {
        $this->width = $width;

        return $this;
    }

    /**
     * Get width
     *
     * @return integer 
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Set height
     *
     * @param integer $height
     * @return SmfAttachments
     */
    public function setHeight($height)
    {
        $this->height = $height;

        return $this;
    }

    /**
     * Get height
     *
     * @return integer 
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Set fileHash
     *
     * @param string $fileHash
     * @return SmfAttachments
     */
    public function setFileHash($fileHash)
    {
        $this->fileHash = $fileHash;

        return $this;
    }

    /**
     * Get fileHash
     *
     * @return string 
     */
    public function getFileHash()
    {
        return $this->fileHash;
    }

    /**
     * Set fileext
     *
     * @param string $fileext
     * @return SmfAttachments
     */
    public function setFileext($fileext)
    {
        $this->fileext = $fileext;

        return $this;
    }

    /**
     * Get fileext
     *
     * @return string 
     */
    public function getFileext()
    {
        return $this->fileext;
    }

    /**
     * Set mimeType
     *
     * @param string $mimeType
     * @return SmfAttachments
     */
    public function setMimeType($mimeType)
    {
        $this->mimeType = $mimeType;

        return $this;
    }

    /**
     * Get mimeType
     *
     * @return string 
     */
    public function getMimeType()
    {
        return $this->mimeType;
    }

    /**
     * Set idFolder
     *
     * @param boolean $idFolder
     * @return SmfAttachments
     */
    public function setIdFolder($idFolder)
    {
        $this->idFolder = $idFolder;

        return $this;
    }

    /**
     * Get idFolder
     *
     * @return boolean 
     */
    public function getIdFolder()
    {
        return $this->idFolder;
    }

    /**
     * Set approved
     *
     * @param boolean $approved
     * @return SmfAttachments
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
