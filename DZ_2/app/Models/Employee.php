<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'Employee';

    protected $primaryKey = 'EmployeeID';
    public $timestamps = false;

    protected $fillable = [
        'NationalIDNumber', 'ContactID', 'LoginID', 'ManagerID',
        'Title', 'BirthDate', 'MaritalStatus', 'Gender', 'HireDate',
        'SalariedFlag', 'VacationHours', 'SickLeaveHours', 'CurrentFlag',
        'rowguid', 'ModifiedDate'
    ];
}
