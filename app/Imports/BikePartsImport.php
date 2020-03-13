<?php

namespace App\Imports;

use App\Models\Part;
use App\Models\BOMItem;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithStartRow;

class BikePartsImport implements ToCollection, WithHeadingRow, WithStartRow
{
    /**
    * @param Collection $collection
    */
    protected $product_id;

    public function __construct($product_id)
    {
        $this->product_id = $product_id;
    }


    public function collection(Collection $collection)
    {
        foreach($collection as $row)
        {

            $ref        = $row['reference'];
            $des        = trim($row['designation']);
            $qty        = intval($row['quantite']);
            $nfo        = trim($row['info']);
            $idx        = trim($row['index']);
            if($idx == '') $idx = "-";

            $part = Part::updateOrCreate([
                'mmitno'    => $ref,
                'mmitds'    => $des,
            ]);

            $bomitem = BOMItem::updateOrCreate([
                'product_id' => $this->product_id,
                'part_id' => $part->id,
            ], [
                'quantity' => $qty,
                'info' => $nfo,
                'index' => $idx
            ]);

        }

    }

    public function startRow(): int
    {
        return 2;
    }

}
