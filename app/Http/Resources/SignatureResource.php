<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class SignatureResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'avatar' => $this->getAvatarAttribute(),
            'body' => $this->body,
            'date' => $this->created_at->diffForHumans()
        ];
    }

    /**
     * Get the user Gravatar by their email address.
     *
     * @return string
     */
    public function getAvatarAttribute()
    {
        return sprintf('https://www.gravatar.com/avatar/%s?s=100', md5($this->email));
    }
}