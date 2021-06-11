<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExpenseCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'branch_id',
        'name'
    ];

    public function expenses(){
        return $this->hasMany(Expense::class, 'category_id', 'id');
    }
}
