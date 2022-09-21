<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    public function expenses ()
    {
        return $this->belongsTo(ExpenseReport::class);
    }
}
