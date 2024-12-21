<?php

namespace App\Exports;

use App\Models\OutgoingItem;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class OutgoingItemsExport implements FromCollection, WithHeadings, WithMapping
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return OutgoingItem::with('product.category')->get();
    }

    public function headings(): array
    {
        return [
            'Product Name',
            'Category Name',
            'Outgoing Date',
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
            $item->outgoing_date,
            $item->quantity,
            'Rp ' . number_format($item->price, 2, ',', '.'),
            'Rp ' . number_format($item->total, 2, ',', '.'),
            $item->condition,
        ];
    }
}
