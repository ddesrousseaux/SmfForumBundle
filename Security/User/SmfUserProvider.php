<?php
namespace Sima\SmfForumBundle\Security\User;

use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use Sima\SmfForumBundle\Util\SmfRestClient;

class SmfUserProvider implements UserProviderInterface
{
    /**
     * @var SmfRestClient
     */
    protected $smf_api;

    /**
     * Constructor.
     *
     * @param SmfRestClient $kernel The Smf Forum rest client
     */
    public function __construct(SmfRestClient $smf_api)
    {
        $this->smf_api = $smf_api;
    }

    public function loadUserByUsername($username)
    {
        // effectuez un appel à votre service web ici
        $userData = $this->smf_api->get_user($username);

        if (isset($userData->data)) {
            $smfUser = new SmfUser();
            $smfUser->import($userData->data);

            return $smfUser;
        }

        throw new UsernameNotFoundException(sprintf('Username "%s" does not exist.', $username));
    }

    public function refreshUser(UserInterface $user)
    {
        if (!$user instanceof SmfUser) {
            throw new UnsupportedUserException(sprintf('Instances of "%s" are not supported.', get_class($user)));
        }

        return $this->loadUserByUsername($user->getUsername());
    }

    public function supportsClass($class)
    {
        return $class === 'Sima\SmfForumBundle\Security\User\SmfUser';
    }
}