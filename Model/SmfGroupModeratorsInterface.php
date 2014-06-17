<?php

namespace Sima\SmfForumBundle\Model;



/**
 * SmfGroupModerators
 */
interface SmfGroupModeratorsInterface
{
    /**
     * @var integer
     */
    private $idGroup;

    /**
     * @var integer
     */
    private $idMember;


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
