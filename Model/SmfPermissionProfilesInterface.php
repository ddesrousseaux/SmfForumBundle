<?php

namespace Sima\SmfForumBundle\Model;



/**
 * SmfPermissionProfiles
 */
interface SmfPermissionProfilesInterface
{
    /**
     * @var integer
     */
    private $idProfile;

    /**
     * @var string
     */
    private $profileName;


    /**
     * Get idProfile
     *
     * @return integer 
     */
    public function getIdProfile()
    {
        return $this->idProfile;
    }

    /**
     * Set profileName
     *
     * @param string $profileName
     * @return SmfPermissionProfiles
     */
    public function setProfileName($profileName)
    {
        $this->profileName = $profileName;

        return $this;
    }

    /**
     * Get profileName
     *
     * @return string 
     */
    public function getProfileName()
    {
        return $this->profileName;
    }
}
