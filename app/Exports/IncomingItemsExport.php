<?php

namespace App\Exports;

use App\Models\IncomingItem;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class IncomingItemsExport implements FromCollection, WithHeadings, WithMapping
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return IncomingItem::with('product.category')->get();
    }

    public function headings(): array
    {
        return [
            'Product Name',
            'Category Name',
            'Incoming Date',
            'Quantity',
            'Price',
            'Total',
            'Condition',
        ];
    }

    public function map($item): array
    {
        return [
            $item->product->name ?? 'N/A',
            $item->product->category->name ?? 'N/A',
            $item->incoming_date,
            $item->quantity,
            'Rp ' . number_format($item->price, 2, ',', '.'),
            'Rp ' . number_format($item->total, 2, ',', '.'),
            $item->condition,
        ];
    }
}
