<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class VideoGameResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->getId(),
            'title' => $this->getTitle(),
            'developer' => $this->getDeveloper(),
            'category' => $this->getCategory(),
            'price' => $this->getPrice(),
            'saleStock' => $this->getSaleStock(),
            'rentStock' => $this->getRentStock(),
            'keywords' => $this->getKeyWords(),
        ];
    }
}
