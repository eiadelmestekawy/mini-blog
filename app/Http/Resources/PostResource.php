<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\UserResource;
// use App\Models\User;                                                           //when makecollection of users    [line(27)]
class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'user_id' => $this->user_id,
            'title' => $this->title,
            'description' => $this->description,
            'user_info' => new UserResource($this->user),

            // 'user_info' => UserResource::collection(user::all()),              //when makecollection of users

            // 'user_info' => [
            //     'id' => $this->user ? $this->user->id : 'not excit',
            //     'name' => $this->user ? $this->user->name : 'not excit',
            //     'email' => $this->user ? $this->user->email : 'not excit',
            // ]
        ];
    }
}