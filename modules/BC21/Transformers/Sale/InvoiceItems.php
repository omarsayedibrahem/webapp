<?php

namespace App\Transformers\Sale;

use App\Models\Document\DocumentItem as Model;
use League\Fractal\TransformerAbstract;

class InvoiceItems extends TransformerAbstract
{
    /**
     * @param Model $model
     * @return array
     */
    public function transform(Model $model)
    {
        return [
            'id' => $model->id,
            'company_id' => $model->company_id,
            'invoice_id' => $model->invoice_id,
            'item_id' => $model->item_id,
            'name' => $model->name,
            'price' => $model->price,
            'total' => $model->total,
            'tax' => $model->tax,
            'tax_id' => $model->tax_id,
            'created_at' => $model->created_at ? $model->created_at->toIso8601String() : '',
            'updated_at' => $model->updated_at ? $model->updated_at->toIso8601String() : '',
        ];
    }
}
