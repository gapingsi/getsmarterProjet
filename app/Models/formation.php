<?php

namespace App\Models;

use App\Models\Student;
use App\Models\Installment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class formation extends Model
{
    use HasFactory;

    public function students(){
        return $this->hasMany(Student::class);
    }


    public function installments(){
        return $this->hasMany(Installment::class);
    }
}
