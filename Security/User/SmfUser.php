<?php
namespace Sima\SmfForumBundle\Security\User;

use Symfony\Component\Security\Core\User\UserInterface;
use Sima\SmfForumBundle\Model\AbstractSmfMembers;

class SmfUser extends AbstractSmfMembers implements UserInterface
{
    public function getRoles()
    {
        // return $this->roles;
    }

    public function getPassword()
    {
        return $this->passwd;
    }

    public function getSalt()
    {
        return $this->passwordSalt;
    }

    public function getUsername()
    {
        return $this->memberName;
    }

    public function eraseCredentials()
    {
    }

    public function equals(UserInterface $user)
    {
        if (!$user instanceof SmfUser) {
            return false;
        }

        if ($this->passwd !== $user->getPassword()) {
            return false;
        }

        if ($this->getSalt() !== $user->getSalt()) {
            return false;
        }

        if ($this->memberName !== $user->getUsername()) {
            return false;
        }

        return true;
    }

    public function import($object)
    {   
        foreach (get_object_vars($object) as $key => $value) {
            $key = preg_replace('/_(.?)/e',"strtoupper('$1')", $key); //camelCase the properties
            $this->$key = $value;
        }
    }
}