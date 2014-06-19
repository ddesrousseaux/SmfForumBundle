<?php

namespace Sima\SmfForumBundle\Model;



/**
 * SmfCollapsedCategories
 */
abstract class AbstractSmfCollapsedCategories
{
    /**
     * @var boolean
     */
    protected $idCat;

    /**
     * @var integer
     */
    protected $idMember;


    /**
     * Set idCat
     *
     * @param boolean $idCat
     * @return SmfCollapsedCategories
     */
    public function setIdCat($idCat)
    {
        $this->idCat = $idCat;

        return $this;
    }

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
     * Set idMember
     *
     * @param integer $idMember
     * @return SmfCollapsedCategories
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
}
