<?php

namespace Sima\SmfForumBundle\Model;



/**
 * SmfGroupModerators
 */
abstract class AbstractSmfGroupModerators
{
    /**
     * @var integer
     */
    protected $idGroup;

    /**
     * @var integer
     */
    protected $idMember;


    /**
     * Set idGroup
     *
     * @param integer $idGroup
     * @return SmfGroupModerators
     */
    public function setIdGroup($idGroup)
    {
        $this->idGroup = $idGroup;

        return $this;
    }

    /**
     * Get idGroup
     *
     * @return integer 
     */
    public function getIdGroup()
    {
        return $this->idGroup;
    }

    /**
     * Set idMember
     *
     * @param integer $idMember
     * @return SmfGroupModerators
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
