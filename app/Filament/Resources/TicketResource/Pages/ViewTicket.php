<?php

namespace App\Filament\Resources\TicketResource\Pages;

use App\Filament\Resources\TicketResource;
use Carbon\Carbon;
use Filament\Forms\Form;
use Filament\Forms;
use Filament\Resources\Pages\ViewRecord;

class ViewTicket extends ViewRecord
{

    protected static string $resource = TicketResource::class;

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->disabled(),
                Forms\Components\TextInput::make('email')
                    ->disabled(),
                Forms\Components\Textarea::make('message')
                    ->disabled()
                    ->columnSpanFull()
                    ->rows(10),
                Forms\Components\TextInput::make('created_at')
                    ->label('Created At')
                    ->disabled()
                    ->formatStateUsing(fn($state) => Carbon::parse($state)->format('d M Y, H:i')),
            ]);
    }
}
