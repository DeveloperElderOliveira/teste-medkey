<?php
namespace App\Repositories;
use Illuminate\Database\Eloquent\Model;

interface DepartmentRepositoryInterface
{
    public function __construct(Model $model);
    public function getAll();
    public function get($id);
    public function getDepartmentProfessional($user_id);
}