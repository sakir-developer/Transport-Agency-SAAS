<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    use HasFactory;

    public function managers(){
        return $this->hasMany(User::class, 'branch_id', 'id')->where('type', 'Manager');
    }

    public function branchCustomers(){
        return $this->hasMany(CustomerAndBranch::class, 'branch_id', 'id');
    }

    public function invoices(){
        return $this->hasMany(Invoice::class, 'branch_id', 'id');
    }

    public function company(){
        return $this->belongsTo(Company::class, 'company_id', 'id');
    }

    // this is a recommended way to declare event handlers
    public static function boot() {
        parent::boot();
        static::deleting(function($company) { // before delete() method call this
            $company->managers()->delete();
            $company->branchCustomers()->delete();
            $company->invoices()->delete();
            // do the rest of the cleanup...
        });
    }
}