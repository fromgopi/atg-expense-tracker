<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Log;

class FieldValidationException extends Exception
{
    //
    protected $message;
    protected $status_code;

    public function __construct($message = "", $code = 0)
    {
        $this->message = $message;
        $this->status_code = $code;
        parent::__construct($message, $code);
    }

    public function report(){
        Log::error($this->getMessage().''.$this->getCode()  );
    }

    /**
     * @return JsonResponse
     */
    public function render(){
        return response()->json(["error" => true, "message" => $this->getMessage(), "code" => $this->code], $this->status_code);
    }
}
