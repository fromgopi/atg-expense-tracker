<?php

namespace App\Services;

use App\Models\WebServiceLog;

/**
 * This a core service php class which will do all the core php stuff.
 * It will interact only with DB and Log.
 */
class WebserviceLogService
{
    protected $application_name;
    protected $brand = "";
    protected $webServiceLogModel;
    public function __construct()
    {
        $this->webServiceLogModel = new WebServiceLog();
        $this->application_name = "ATG-ET-API";
    }

    public function save_request($payload, $resource_name, $ip_address)
    {
        $this->webServiceLogModel->application = $this->application_name;
        $this->webServiceLogModel->webservice_name = $resource_name;
        $this->webServiceLogModel->input = $payload;
        $this->webServiceLogModel->ip_address = $ip_address;
        $this->webServiceLogModel->save();
    }
}
