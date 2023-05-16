<?php

namespace App\Services;

use App\Models\Patient;
use App\Repositories\DepartmentRepositoryInterface;

class DepartmentService
{
    private $repository;
    
    public function __construct(DepartmentRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function getInfoDepartmentProfessionalPatient($patient_id)
    {
        $user = auth()->user();
        $departmentProfessional = $this->repository->getDepartmentProfessional($user->id);
        $patient = Patient::find($patient_id);       
        $data_info = [
            "department" =>  $departmentProfessional->description,
            "professional" => $user->name,
            "professional_expertise" => $departmentProfessional->professionals[0]->expertise,
            "patient" => $patient->name
        ];
        
        return $data_info;
    }
}