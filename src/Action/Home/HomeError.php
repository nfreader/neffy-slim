<?php

namespace App\Action\Home;

use App\Action\Action;

/**
 * Action.
 */
final class HomeError extends Action
{
    protected function action()
    {
        $this->template = 'base/error.tpl';
        return ['now' => date('d.m.Y H:i:s')];
    }
}
