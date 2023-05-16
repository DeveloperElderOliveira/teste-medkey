<?php

namespace App\Repositories;
use Illuminate\Database\Eloquent\Model;

class DepartmentRepositoryEloquent implements DepartmentRepositoryInterface
{

    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function getAll(){}
    public function get($id){}
    public function getDepartmentProfessional($user_id)
    {
        $departmentProfessional = $this->model->with(['professionals' => function($query) use ($user_id){
            $query->where('user_id',$user_id);
        }])->first();
        return $departmentProfessional;
        
    }

}