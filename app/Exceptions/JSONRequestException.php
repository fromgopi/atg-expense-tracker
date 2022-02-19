<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Support\Facades\Log;


class JSONRequestException extends Exception
{
    protected $message = "";
    protected $status_code;

    public function __construct($message = "", $code = 0)
    {
        $this->message = $message;
        $this->status_code = $code;
        parent::__construct($message, $code);
    }

    /**
    * Report the exception.
    *
    * @return bool|null
    */
    public function report()
    {
        //
        Log::error($this->getLine());
    }

    /**
     * Render the exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function render($request)
    {
        return response()->json(["error" => true, "message" => $this->getMessage(), "code" => $this->code], $this->status_code);
    }
}
