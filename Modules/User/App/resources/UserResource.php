<?php

namespace Modules\User\App\resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource {

    public function toArray($request): array {

        return [
            'account_id' => $this -> account_id,
        ];
    }
}
