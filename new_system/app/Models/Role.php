<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Role;
use App\Models\Permission;
use App\Models\User;
class Role extends Model
{
    use HasFactory;
    protected $guarded = [];
    

    public function permissions(){
        return $this->belongsToMany(Permission::class);
    }
    public function users(){
        return $this->belongsToMany(User::class);
    }
}
