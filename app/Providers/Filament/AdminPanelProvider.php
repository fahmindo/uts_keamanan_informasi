<?php

namespace App\Providers\Filament;

use App\Filament\Admin\Resources\PostResource;
use Filament\Panel;
use Filament\PanelProvider;

class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->id('admin')
            ->path('admin')
            ->resources([
                PostResource::class,
            ]);
    }
}
