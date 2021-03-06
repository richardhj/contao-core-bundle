<?php

declare(strict_types=1);

/*
 * This file is part of Contao.
 *
 * Copyright (c) 2005-2018 Leo Feyer
 *
 * @license LGPL-3.0+
 */

namespace Contao\CoreBundle\Framework;

interface FrameworkAwareInterface
{
    /**
     * Sets the framework service.
     *
     * @param ContaoFrameworkInterface|null $framework
     */
    public function setFramework(ContaoFrameworkInterface $framework = null);
}
