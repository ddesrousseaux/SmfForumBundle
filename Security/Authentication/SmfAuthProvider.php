<?php
namespace Sima\SmfForumBundle\Security\Authentication;

use Symfony\Component\Security\Core\Authentication\Provider\AuthenticationProviderInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Core\Exception\NonceExpiredException;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Sima\SmfForumBundle\Security\Authentication\SmfUserToken;


class SmfAuthProvider implements AuthenticationProviderInterface
{
    private $userProvider;
    private $cacheDir;

    public function __construct(UserProviderInterface $userProvider, $cacheDir)
    {
        $this->userProvider = $userProvider;
        $this->cacheDir     = $cacheDir;
    }

    public function authenticate(TokenInterface $token)
    {
        $user = $this->userProvider->loadUserByUsername($token->getUsername());

        if ($user && $this->validateDigest($user, $token->digest)) {
            $authenticatedToken = new SmfUserToken($user->getRoles());
            $authenticatedToken->setUser($user);

            return $authenticatedToken;
        }

        throw new AuthenticationException('The SMF authentication failed.');
    }

    protected function validateDigest($user, $secret)
    {
        // $auth = $this->smf_api->authenticate_user($username = '', $password = '');

        // Validate the password using smf encryption
        $expected = $user->getPassword();
        $digest =  sha1(strtolower($user->getUsername()) . $secret);

        return $digest === $expected;
    }

    public function supports(TokenInterface $token)
    {
        return $token instanceof SmfUserToken;
    }
}