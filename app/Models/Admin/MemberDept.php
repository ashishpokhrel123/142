<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MemberDept extends Model
{

    protected $table = 'member_dept';

    protected $guarded = [];

    use HasFactory;

    public function member()
    {
         return $this->hasMany(Member::class);
    }
}
