<?php

namespace App\Action;

use App\Responder\Responder;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

abstract class Action
{
    private $responder;

    public $template = 'home/home.twig';

    public function __construct(Responder $responder)
    {
        $this->responder = $responder;
    }

    abstract protected function action();

    public function __invoke(
        ServerRequestInterface $request,
        ResponseInterface $response
    ): ResponseInterface {
        $this->data = (array)$request->getParsedBody();
        return $this->responder->withTemplate($response, $this->template, $this->action());
    }
}
