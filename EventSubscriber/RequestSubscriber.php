<?php 

namespace Mouncef\UserLog\EventSubscriber;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\RequestEvent;
use Symfony\Component\HttpKernel\Event\ResponseEvent;
use Symfony\Component\HttpKernel\Event\ExceptionEvent;

class RequestSubscriber implements EventSubscriberInterface
{
    public static function getSubscribedEvents(): array
    {
        return [
            RequestEvent::class => 'onKernelRequest',
            ResponseEvent::class => 'onKernelResponse',
            ExceptionEvent::class => 'onKernelException',
        ];
    }

    public function onKernelRequest(RequestEvent $event)
    {
        var_dump($event);
		die;
    }
	
	public function onKernelResponse(FilterResponseEvent $event)
	{
		die;
	}
	
	public function onKernelException(ExceptionEvent $event)
	{
	
		// you can alternatively set a new Exception
		// $exception = new \Exception('Some special exception');
		// $event->setThrowable($exception);
		die;
	}
}