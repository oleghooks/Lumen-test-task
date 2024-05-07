<?php

namespace App\Http\Controllers;

use App\Models\Loan;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class LoansController extends Controller
{
    public function list():JsonResponse
    {
        $loans = Loan::orderByDesc('created_at')->orderByDesc('total')->get();
        return response()->json([
            "status_code" => "200",
            "response" => $loans
        ]);
    }

    public function info($id):JsonResponse
    {
        $loan = Loan::find($id);
        if($loan)
            return response()->json([
                'status_code' => '200',
                "response" => $loan
            ]);
        else
            return response()->json([
                'status_code' => '404',
                'message' => 'Loan not found.'
            ], 404);
    }

    public function create(Request $request):JsonResponse
    {

        try {
            $loan = Loan::create([
                'person' => $request->input('person'),
                'total' => $request->input('total')
            ]);
        }
        catch (Exception){

            return response()->json([
                'status_code' => '500',
                'message' => 'Error'
            ], 500);
        }
        return response()->json([
            'status_code' => '200',
            'response' => $loan
        ], 201);
    }
    public function edit($id, Request $request):JsonResponse
    {
        /*$request->validate([
            'id' => 'required|numeric',
            'person' => 'required',
            'total' => 'required'
        ]);*/

        try{
            $loan = Loan::find($id);
            $loan->total = $request->input('total');
            $loan->person = $request->input('person');
            $loan->save();
        }
        catch (Exception){
            return response()->json([
                'status_code' => '500',
                'message' => 'Error'
            ], 500);
        }
        return response()->json([
            'status_code' => '200',
            "response" => $loan
        ]);
    }
    public function delete($id):JsonResponse
    {
        try{
            $loan = Loan::find($id);
            $loan->delete();
        }
        catch (Exception){
            return response()->json([
                'status_code' => '500',
                'message' => 'Error'
            ], 500);
        }
        return response()->json([
            'status_code' => '200'
        ]);
    }
}
