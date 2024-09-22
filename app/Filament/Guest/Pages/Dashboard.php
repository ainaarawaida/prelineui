<?php

namespace App\Filament\Guest\Pages;

use Filament\Pages\Page;

class Dashboard extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    protected static ?string $slug = '/';
    protected static string $view = 'filament.guest.pages.dashboard';
    // protected static string $layout = 'components.layouts.app';
    protected static ?string $title = 'Home';
}
