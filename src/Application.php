<?php

declare(strict_types=1);

namespace Worker;

use Symfony\Component\HttpFoundation\Request;
use Worker\Action\ActionFactory;

/**
 * Class Application
 */
class Application
{
    /**
     * @var Request
     */
    private Request $request;

    /**
     * Application constructor.
     */
    public function __construct()
    {
        $this->request = Request::createFromGlobals();
    }

    public function run(): void
    {
        $response = (new ActionFactory($this->request))
            ->build()
            ->act();

        $response->headers->add(
            [
                'Access-Control-Allow-Origin' => '*',
                'Access-Control-Allow-Methods' => '*',
                'Access-Control-Allow-Headers' => '*',
            ]
        );

        $response->send();
    }
}
