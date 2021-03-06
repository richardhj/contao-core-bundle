<?php

declare(strict_types=1);

/*
 * This file is part of Contao.
 *
 * Copyright (c) 2005-2018 Leo Feyer
 *
 * @license LGPL-3.0+
 */

namespace Contao\CoreBundle\Routing;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestMatcherInterface;
use Symfony\Component\HttpKernel\Event\KernelEvent;

class ScopeMatcher
{
    /**
     * @var RequestMatcherInterface
     */
    private $backendMatcher;

    /**
     * @var RequestMatcherInterface
     */
    private $frontendMatcher;

    /**
     * @param RequestMatcherInterface $backendMatcher
     * @param RequestMatcherInterface $frontendMatcher
     */
    public function __construct(RequestMatcherInterface $backendMatcher, RequestMatcherInterface $frontendMatcher)
    {
        $this->backendMatcher = $backendMatcher;
        $this->frontendMatcher = $frontendMatcher;
    }

    /**
     * Checks whether the request is a Contao master request.
     *
     * @param KernelEvent $event
     *
     * @return bool
     */
    public function isContaoMasterRequest(KernelEvent $event): bool
    {
        return $event->isMasterRequest() && $this->isContaoRequest($event->getRequest());
    }

    /**
     * Checks whether the request is a Contao back end master request.
     *
     * @param KernelEvent $event
     *
     * @return bool
     */
    public function isBackendMasterRequest(KernelEvent $event): bool
    {
        return $event->isMasterRequest() && $this->isBackendRequest($event->getRequest());
    }

    /**
     * Checks whether the request is a Contao front end master request.
     *
     * @param KernelEvent $event
     *
     * @return bool
     */
    public function isFrontendMasterRequest(KernelEvent $event): bool
    {
        return $event->isMasterRequest() && $this->isFrontendRequest($event->getRequest());
    }

    /**
     * Checks whether the request is a Contao request.
     *
     * @param Request $request
     *
     * @return bool
     */
    public function isContaoRequest(Request $request): bool
    {
        return $this->isBackendRequest($request) || $this->isFrontendRequest($request);
    }

    /**
     * Checks whether the request is a Contao back end request.
     *
     * @param Request $request
     *
     * @return bool
     */
    public function isBackendRequest(Request $request): bool
    {
        return $this->backendMatcher->matches($request);
    }

    /**
     * Checks whether the request is a Contao front end request.
     *
     * @param Request $request
     *
     * @return bool
     */
    public function isFrontendRequest(Request $request): bool
    {
        return $this->frontendMatcher->matches($request);
    }
}
