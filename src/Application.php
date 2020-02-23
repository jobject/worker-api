<?php

declare(strict_types=1);

namespace Worker;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

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
     * @var Response
     */
    private Response $response;

    /**
     * Application constructor.
     */
    public function __construct()
    {
        $this->request = Request::createFromGlobals();
        $this->response = new JsonResponse(['message' => 'Not Found'], 404);
    }

    public function run(): void
    {
        $this->response->send();
    }
}
