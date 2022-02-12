<?php

namespace App\Http\Controllers;

use App\Exceptions\FieldValidationException;
use App\Exceptions\JSONRequestException;
use App\Models\Category;
use App\Services\CategoryService;
use App\Services\WebserviceLogService;
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
     * @throws JSONRequestException|FieldValidationException
     */
    public function create(Request $req): JsonResponse
    {
        if ($req->header('content-type') != config('constants.CONTENT_TYPE')) {
            Log::error("Throwing Json exception");
            throw new JSONRequestException(config('constants.INVALID_CONTENT_TYPE'), 422);
        }
        if ($req->get('category_name') == "" or !$req->get('category_name')){
            Log::error("Throwing Field Validation exception");
            throw new FieldValidationException('category_name is not present', 400);
        }
        $req_data = $req->getContent();
        $wbService = new WebserviceLogService();
        $wbService->save_request($req_data, $_SERVER['REQUEST_URI'], $_SERVER['REMOTE_ADDR']);
        $categoryService = new CategoryService();
        $categoryService->create_category($req_data);
        return response()->json("", 200);
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
