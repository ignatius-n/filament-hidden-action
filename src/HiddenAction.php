<?php

namespace JeffersonGoncalves\Filament\HiddenAction;

use Filament\Actions\Action;

class HiddenAction extends Action
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->defaultView('filament-hidden-action::components.hidden');
    }

    public function getExtraViewData(): array
    {
        return [
            'name' => md5($this->getName()),
        ];
    }
}
