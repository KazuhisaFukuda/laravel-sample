<?php

namespace App\Http\Controllers\User\Profiles;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Http\Requests\User\Profiles\UpdateRequest;

class ProfilesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:user');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit()
    {
        $user = User::find(auth('user')->id());

        return view('user.profiles.edit')->with(compact('user'));
    }

    /**
     * @param \App\Http\Requests\User\Profiles\UpdateRequest $request
     * @param \App\Models\User $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdateRequest $request, User $user)
    {
        $user->update(array_merge(
            $request->validated(),
            ['password' => bcrypt($request->get('password'))]
        ));

        return redirect()->route('user.profiles.edit', [$user]);
    }
}
