<?php

namespace Rox\Framework;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Form\FormFactory;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpKernel\Event\FilterControllerEvent;
use Symfony\Component\HttpKernel\Event\GetResponseForControllerResultEvent;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Router;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Security\Http\Event\InteractiveLoginEvent;
use Symfony\Component\Security\Http\SecurityEvents;

class InteractiveLoginListener implements EventSubscriberInterface
{
    public function onInteractiveLogin(InteractiveLoginEvent $event)
    {
        $token = $event->getAuthenticationToken();
        $user = $token->getUser();
        $credentials = $token->getCredentials();
        $session = $event->getRequest()->getSession();
        $session->set('username', $user->getUsername());
        $session->set('id', $user->id);
        $cryptKey = crypt($credentials['password'], 'rt');
        $session->set('cryptkey', $cryptKey);
        $session->set('logcheck', Crc32($cryptKey . $user->id));
        $session->set('status', $user->Status);
    }

    public static function getSubscribedEvents()
    {
        return array(SecurityEvents::INTERACTIVE_LOGIN => 'onInteractiveLogin');
    }
}