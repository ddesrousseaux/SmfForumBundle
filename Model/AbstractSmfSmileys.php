<?php

namespace Sima\SmfForumBundle\Model;



/**
 * SmfSmileys
 */
abstract class AbstractSmfSmileys
{
    /**
     * @var integer
     */
    protected $idSmiley;

    /**
     * @var string
     */
    protected $code;

    /**
     * @var string
     */
    protected $filename;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var boolean
     */
    protected $smileyRow;

    /**
     * @var integer
     */
    protected $smileyOrder;

    /**
     * @var boolean
     */
    protected $hidden;


    /**
     * Get idSmiley
     *
     * @return integer 
     */
    public function getIdSmiley()
    {
        return $this->idSmiley;
    }

    /**
     * Set code
     *
     * @param string $code
     * @return SmfSmileys
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string 
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set filename
     *
     * @param string $filename
     * @return SmfSmileys
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
     * Set description
     *
     * @param string $description
     * @return SmfSmileys
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set smileyRow
     *
     * @param boolean $smileyRow
     * @return SmfSmileys
     */
    public function setSmileyRow($smileyRow)
    {
        $this->smileyRow = $smileyRow;

        return $this;
    }

    /**
     * Get smileyRow
     *
     * @return boolean 
     */
    public function getSmileyRow()
    {
        return $this->smileyRow;
    }

    /**
     * Set smileyOrder
     *
     * @param integer $smileyOrder
     * @return SmfSmileys
     */
    public function setSmileyOrder($smileyOrder)
    {
        $this->smileyOrder = $smileyOrder;

        return $this;
    }

    /**
     * Get smileyOrder
     *
     * @return integer 
     */
    public function getSmileyOrder()
    {
        return $this->smileyOrder;
    }

    /**
     * Set hidden
     *
     * @param boolean $hidden
     * @return SmfSmileys
     */
    public function setHidden($hidden)
    {
        $this->hidden = $hidden;

        return $this;
    }

    /**
     * Get hidden
     *
     * @return boolean 
     */
    public function getHidden()
    {
        return $this->hidden;
    }
}
