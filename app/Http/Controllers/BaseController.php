<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function sendResponse($result,$message,$status=200){
        $response = [
            'success' => true,
            'data'    => $result,
            'message' => $message
        ];
        return response()->json($response,$status);
    }

    public function sendError($message,$status){
        $response  = [
            'success' => false,
            'message' => $message
        ];
        return response()->json($response,$status);
    }
}
