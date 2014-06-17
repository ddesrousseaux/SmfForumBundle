<?php

namespace Sima\SmfForumBundle\Model;



/**
 * SmfPermissions
 */
interface SmfPermissionsInterface
{
    /**
     * @var integer
     */
    private $idGroup;

    /**
     * @var string
     */
    private $permission;

    /**
     * @var boolean
     */
    private $addDeny;


    /**
     * Set idGroup
     *
     * @param integer $idGroup
     * @return SmfPermissions
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
     * Set permission
     *
     * @param string $permission
     * @return SmfPermissions
     */
    public function setPermission($permission)
    {
        $this->permission = $permission;

        return $this;
    }

    /**
     * Get permission
     *
     * @return string 
     */
    public function getPermission()
    {
        return $this->permission;
    }

    /**
     * Set addDeny
     *
     * @param boolean $addDeny
     * @return SmfPermissions
     */
    public function setAddDeny($addDeny)
    {
        $this->addDeny = $addDeny;

        return $this;
    }

    /**
     * Get addDeny
     *
     * @return boolean 
     */
    public function getAddDeny()
    {
        return $this->addDeny;
    }
}
