<?php

declare(strict_types=1);

namespace Worker\Action;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class UndefinedAction
 */
class UndefinedAction extends AbstractAction
{
    /**
     * {@inheritDoc}
     */
    public function act(): Response
    {
        return new JsonResponse(['message' => 'Not Found'], 404);
    }
}
