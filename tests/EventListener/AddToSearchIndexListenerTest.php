<?php

declare(strict_types=1);

/*
 * This file is part of Contao.
 *
 * Copyright (c) 2005-2018 Leo Feyer
 *
 * @license LGPL-3.0+
 */

namespace Contao\CoreBundle\Tests\EventListener;

use Contao\CoreBundle\EventListener\AddToSearchIndexListener;
use Contao\CoreBundle\Framework\ContaoFrameworkInterface;
use Contao\CoreBundle\Routing\ScopeMatcher;
use Contao\CoreBundle\Tests\TestCase;
use Contao\Frontend;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Event\PostResponseEvent;
use Symfony\Component\HttpKernel\KernelInterface;

class AddToSearchIndexListenerTest extends TestCase
{
    /**
     * @var ContaoFrameworkInterface|\PHPUnit_Framework_MockObject_MockObject
     */
    private $framework;

    /**
     * @var ScopeMatcher|\PHPUnit_Framework_MockObject_MockObject
     */
    private $scopeMatcher;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        parent::setUp();

        $adapter = $this->mockAdapter(['indexPageIfApplicable']);

        $this->framework = $this->mockContaoFramework([Frontend::class => $adapter]);
        $this->scopeMatcher = $this->createMock(ScopeMatcher::class);
    }

    public function testCanBeInstantiated(): void
    {
        $listener = new AddToSearchIndexListener($this->framework, $this->scopeMatcher);

        $this->assertInstanceOf('Contao\CoreBundle\EventListener\AddToSearchIndexListener', $listener);
    }

    /**
     * @runInSeparateProcess
     * @preserveGlobalState disabled
     */
    public function testIndexesTheResponse(): void
    {
        $this->scopeMatcher
            ->method('isFrontendMasterRequest')
            ->willReturn(true)
        ;

        $event = $this->mockPostResponseEvent();

        $event
            ->expects($this->once())
            ->method('getResponse')
            ->willReturn(new Response())
        ;

        $listener = new AddToSearchIndexListener($this->framework, $this->scopeMatcher);
        $listener->onKernelTerminate($event);
    }

    public function testDoesNotIndexTheResponseIfTheContaoFrameworkIsNotInitialized(): void
    {
        $framework = $this->createMock(ContaoFrameworkInterface::class);

        $framework
            ->method('isInitialized')
            ->willReturn(false)
        ;

        $this->scopeMatcher
            ->expects($this->never())
            ->method('isFrontendMasterRequest')
        ;

        $event = $this->mockPostResponseEvent();

        $event
            ->expects($this->never())
            ->method('getResponse')
        ;

        $listener = new AddToSearchIndexListener($framework, $this->scopeMatcher);
        $listener->onKernelTerminate($event);
    }

    public function testDoesNotIndexTheResponseIfNotAContaoFrontendMasterRequest(): void
    {
        $this->scopeMatcher
            ->method('isFrontendMasterRequest')
            ->willReturn(false)
        ;

        $event = $this->mockPostResponseEvent();

        $event
            ->expects($this->never())
            ->method('getResponse')
        ;

        $listener = new AddToSearchIndexListener($this->framework, $this->scopeMatcher);
        $listener->onKernelTerminate($event);
    }

    public function testDoesNotIndexTheResponseIfTheRequestMethodIsNotGet(): void
    {
        $this->scopeMatcher
            ->method('isFrontendMasterRequest')
            ->willReturn(true)
        ;

        $event = $this->mockPostResponseEvent(null, Request::METHOD_POST);

        $event
            ->expects($this->never())
            ->method('getResponse')
        ;

        $listener = new AddToSearchIndexListener($this->framework, $this->scopeMatcher);
        $listener->onKernelTerminate($event);
    }

    public function testDoesNotIndexTheResponseUponFragmentRequests(): void
    {
        $this->scopeMatcher
            ->method('isFrontendMasterRequest')
            ->willReturn(true)
        ;

        $event = $this->mockPostResponseEvent('_fragment/foo/bar');

        $event
            ->expects($this->never())
            ->method('getResponse')
        ;

        $listener = new AddToSearchIndexListener($this->framework, $this->scopeMatcher);
        $listener->onKernelTerminate($event);
    }

    /**
     * Mocks a post response event.
     *
     * @param string|null $requestUri
     * @param string      $requestMethod
     *
     * @return PostResponseEvent|\PHPUnit_Framework_MockObject_MockObject
     */
    private function mockPostResponseEvent($requestUri = null, $requestMethod = Request::METHOD_GET): PostResponseEvent
    {
        $request = new Request();
        $request->setMethod($requestMethod);
        $request->server->set('REQUEST_URI', $requestUri);

        $event = $this
            ->getMockBuilder(PostResponseEvent::class)
            ->setConstructorArgs([$this->createMock(KernelInterface::class), $request, new Response()])
            ->setMethods(['getResponse'])
            ->getMock()
        ;

        return $event;
    }
}
