<?php

declare(strict_types=1);

namespace Fastest\Core\Modules;

final class rekursiveModule extends \Fastest\Core\Modules\Module
{
    public function router()
    {
        return $this->listMethod();
    }

    public function listMethod()
    {
        return [
            'template'          =>  'list'
        ];
    }
}