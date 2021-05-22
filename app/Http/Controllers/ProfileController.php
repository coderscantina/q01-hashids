<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProfileListResource;
use App\Http\Resources\ProfileResource;
use App\Models\User;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class ProfileController extends Controller
{
    public function index(): AnonymousResourceCollection
    {
        $users = User::query()->cursorPaginate(10);

        return ProfileListResource::collection($users);
    }

    public function show(User $user): ProfileResource
    {
        return new ProfileResource($user);
    }
}
