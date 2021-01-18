<?php

namespace App\Action\Home;

use App\Action\Action;

/**
 * Action.
 */
final class HomeAction extends Action
{
    protected function action()
    {
        return ['now' => date('d.m.Y H:i:s')];
    }
}
