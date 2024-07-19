<?php

namespace App\Filament\Resources\UserResource\RelationManagers;

use App\Filament\Resources\OrderResource;
use App\Models\Order;
use Filament\Forms;

use Filament\Forms\Components\Actions\Action;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;

use Filament\Tables;
use Filament\Tables\Actions\Action as ActionsAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class OrdersRelationManager extends RelationManager
{
    protected static string $relationship = 'orders';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                // Forms\Components\TextInput::make('id')
                //     ->required()
                //     ->maxLength(255),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('id')
            ->columns([
               Tables\Columns\TextColumn::make('id')
               ->label('Order ID')
               ->searchable(),

               Tables\Columns\TextColumn::make('grand_totale')
               ->money('MAD'),




               Tables\Columns\TextColumn::make('status')
               ->badge()
               ->color(fn(string $state):string=>match($state){
                'new'=>'info',
                'processing'=>'warning',
                'shipped'=>'success',
                'delivred'=>'success',
                'cancelled'=>'danger',



               })
               ->icon(fn(string $state):string=>match($state){
                'new'=>'heroicon-m-sparkles',
                'processing'=>'heroicon-m-arrow-path',
                'shipped'=>'heroicon-m-truck',
                'delivred'=>'heroicon-m-check-badge',
                'cancelled'=>'heroicon-m-x-circle',
               })
               ->sortable(),

               TextColumn::make('payement_method')
               ->sortable()
               ->searchable(),


               TextColumn::make('payement_status')
               ->sortable()
               ->badge()
               ->searchable(),

               TextColumn::make('created_at')
               ->label('Order Date')
               ->dateTime()

            ])
            ->filters([
                //
            ])
            ->headerActions([
                // Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                ActionsAction::make('View Order')
                ->url(fn(Order $record):string=>OrderResource::getUrl('view',['record'=>$record]))
                ->color('info')
                ->icon('heroicon-o-eye'),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}
