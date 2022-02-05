<?php

namespace App\Http\Controllers;

use App\Exceptions\JSONRequestException;
use App\Models\Category;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;
use mysql_xdevapi\Exception;
use Symfony\Component\HttpFoundation\Exception\JsonException;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index()
    {
        //
        $categories = Category::all();
        Log::info("Welcome to the category controller", ['12']);
        Log::debug("This is debug log for from category controller");
        return response()->json($categories, 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return JsonResponse
     * @throws JSONRequestException
     */
    public function create(Request $req): JsonResponse
    {
        Log::debug($req->header('content-type'));
        if ($req->header('content-type') != "application/json"){
            Log::error("Throwing Json exception");
            throw new JSONRequestException('Please check your header content type', 400);
        }

        return response()->json("acbbbc", 200);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
