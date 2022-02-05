<?php

namespace App\Exceptions;

use Exception;


class JSONRequestException extends Exception
{
    protected $message = "";
    protected $status_code;

    public function __construct($message = "", $code = 0, Throwable $previous = null)
    {
        $this->message = $message;
        $this->status_code = $code;
        parent::__construct($message, $code, $previous);
    }

    /**
    * Report the exception.
    *
    * @return bool|null
    */
    public function report()
    {
        //
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
