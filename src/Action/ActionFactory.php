<?php

declare(strict_types=1);

namespace Worker\Action;

use Symfony\Component\HttpFoundation\Request;

/**
 * Class ActionFactory
 */
class ActionFactory
{
    /**
     * @var Request
     */
    private Request $request;

    /**
     * ActionFactory constructor.
     *
     * @param Request $request
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * @return AbstractAction
     */
    public function build(): AbstractAction
    {
        $method = $this->request->getMethod();
        if ($method === Request::METHOD_OPTIONS) {
            return new OptionsAction($this->request);
        }

        $uri = $this->request->getPathInfo();
        if ($method === Request::METHOD_GET && $uri === '/test') {
            return new TestAction($this->request);
        }

        return new UndefinedAction($this->request);
    }
}