<?php

namespace App\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Produk;

class TableProduk extends DataTableComponent
{
    protected $model = Produk::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make("Nama Produk", "nama")
                ->sortable()
                ->searchable(),
            Column::make("Kode Produk", "kode")
                ->sortable(),
            Column::make("Harga Produk", "harga")
                ->sortable()
                ->searchable(),
        ];
    }
}
