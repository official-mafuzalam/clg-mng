<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Deposits;

class DepositController extends Controller
{

    public function deposit_user_id($user_id)
    {

        $deposit = Deposits::where('user_id', $user_id)->orderByDesc('created_at')->get();

        if ($deposit->isEmpty()) {

            $response = [
                'message' => 'Deposit not found',
                'status' => 0
            ];

        } else {

            $response = [
                'message' => count($deposit) . ' Deposits found',
                'status' => 1,
                'num_of_data' => count($deposit),
                'data' => $deposit
            ];

        }
        ;

        return response()->json($response, 200);
    }






























    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
