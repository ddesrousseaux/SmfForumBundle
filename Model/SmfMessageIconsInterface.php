<?php

namespace Sima\SmfForumBundle\Model;



/**
 * SmfMessageIcons
 */
interface SmfMessageIconsInterface
{
    /**
     * @var integer
     */
    private $idIcon;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $filename;

    /**
     * @var integer
     */
    private $idBoard;

    /**
     * @var integer
     */
    private $iconOrder;


    /**
     * Get idIcon
     *
     * @return integer 
     */
    public function getIdIcon()
    {
        return $this->idIcon;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return SmfMessageIcons
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set filename
     *
     * @param string $filename
     * @return SmfMessageIcons
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
     * Set idBoard
     *
     * @param integer $idBoard
     * @return SmfMessageIcons
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
     * Set iconOrder
     *
     * @param integer $iconOrder
     * @return SmfMessageIcons
     */
    public function setIconOrder($iconOrder)
    {
        $this->iconOrder = $iconOrder;

        return $this;
    }

    /**
     * Get iconOrder
     *
     * @return integer 
     */
    public function getIconOrder()
    {
        return $this->iconOrder;
    }
}
