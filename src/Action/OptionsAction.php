<?php

declare(strict_types=1);

namespace Worker\Action;

use Symfony\Component\HttpFoundation\Response;

/**
 * Class OptionsAction
 */
class OptionsAction extends AbstractAction
{
    /**
     * {@inheritDoc}
     */
    public function act(): Response
    {
        return new Response();
    }
}
