<?php

namespace Sima\SmfForumBundle\Model;



/**
 * SmfCategories
 */
interface SmfCategoriesInterface
{
    /**
     * @var boolean
     */
    private $idCat;

    /**
     * @var boolean
     */
    private $catOrder;

    /**
     * @var string
     */
    private $name;

    /**
     * @var boolean
     */
    private $canCollapse;


    /**
     * Get idCat
     *
     * @return boolean 
     */
    public function getIdCat()
    {
        return $this->idCat;
    }

    /**
     * Set catOrder
     *
     * @param boolean $catOrder
     * @return SmfCategories
     */
    public function setCatOrder($catOrder)
    {
        $this->catOrder = $catOrder;

        return $this;
    }

    /**
     * Get catOrder
     *
     * @return boolean 
     */
    public function getCatOrder()
    {
        return $this->catOrder;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return SmfCategories
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set canCollapse
     *
     * @param boolean $canCollapse
     * @return SmfCategories
     */
    public function setCanCollapse($canCollapse)
    {
        $this->canCollapse = $canCollapse;

        return $this;
    }

    /**
     * Get canCollapse
     *
     * @return boolean 
     */
    public function getCanCollapse()
    {
        return $this->canCollapse;
    }
}
