<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TransactionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'type' => 'transaction',
            'attributes' => [
                'code' => $this->code,
                'amount' => (int) $this->amount,
                'user_id' => (int) $this->user_id,
                'created_at' => $this->created_at
            ],
            'id' => $this->id
        ];
    }
}
