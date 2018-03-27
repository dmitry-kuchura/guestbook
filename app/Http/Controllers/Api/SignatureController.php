<?php

namespace App\Http\Controllers\Api;

use App\Signature;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSignature;
use App\Http\Resources\SignatureResource;

class SignatureController extends Controller
{
    /**
     * Return a paginated list of signatures.
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        $signatures = Signature::latest()
            ->ignoreFlagged()
            ->paginate(20);

        return SignatureResource::collection($signatures);
    }

    /**
     * Fetch and return the signature.
     *
     * @param Signature $signature
     * @return SignatureResource
     */
    public function show(Signature $signature)
    {
        return new SignatureResource($signature);
    }

    /**
     * Validate and save a new signature to the database.
     *
     * @param StoreSignature $request
     * @return SignatureResource
     */
    public function store(StoreSignature $request)
    {
        $signature = Signature::create($request->validated());

        return new SignatureResource($signature);
    }
}