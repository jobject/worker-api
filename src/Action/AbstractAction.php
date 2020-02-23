<?php

declare(strict_types=1);

namespace Worker\Action;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class AbstractAction
 */
abstract class AbstractAction
{
    /**
     * @var Request
     */
    private Request $request;

    /**
     * AbstractAction constructor.
     *
     * @param Request $request
     */
    final public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * @return Response
     */
    abstract public function act(): Response;
}