<?php
namespace Sima\SmfForumBundle\Security\Authentication;

use Symfony\Component\Security\Core\Authentication\Token\AbstractToken;

class SmfUserToken extends AbstractToken
{
    public $created;
    public $digest;
    public $nonce;

    public function __construct(array $roles = array())
    {
        parent::__construct($roles);

        // Si l'utilisateur a des rôles, on le considère comme authentifié
        $this->setAuthenticated(count($roles) > 0);
    }

    public function getCredentials()
    {
        return '';
    }
}