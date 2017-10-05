<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Traits\FileUploadTrait;
use App\Http\Requests\UpdateProfileRequest;
use App\Models\Profile;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ProfileController extends AppBaseController
{
    use FileUploadTrait;
    public function __construct()
    {
    }

    /**
     * Display a listing of the Profile.
     *
     * @param Request $request
     * @return Response
     */
    public function index()
    {
        $user = Auth::user();
        return view('profiles.show',compact('user'));
    }

    /**
     * Display the specified Profile.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show()
    {
        $user = Auth::user();
        return view('profiles.show',compact('user'));
    }

    /**
     * Show the form for editing the specified Profile.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit()
    {
        $user = Auth::user();
        return view('profiles.edit',compact('user'));
    }

    /**
     * Update the specified Profile in storage.
     *
     * @param  int              $id
     * @param UpdateProfileRequest $request
     *
     * @return Response
     */
    public function update(UpdateProfileRequest $request)
    {
        $user = Auth::user();
        $request = $this->saveAvatar($request, $user->avatar);
        $user->update($request->all());
        return redirect()->route('profile')
            ->with('success','Profile updated successfully');
    }
}
