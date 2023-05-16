<?php

namespace App\Http\Controllers;

use App\Services\DepartmentService;
use Exception;

class DepartmentController extends Controller
{
    private $service;

    public function __construct(DepartmentService $service)
    {
        $this->service = $service;
    }

    public function getInfoDepartmentProfessionalPatient($patient_id)
    {
        try{
            $data = $this->service->getInfoDepartmentProfessionalPatient($patient_id);
            return response()->json(['data' => $data]);
        }catch(Exception $e){
            return response(['error' => $e->getMessage(),400]);
        }
        
    }
}
