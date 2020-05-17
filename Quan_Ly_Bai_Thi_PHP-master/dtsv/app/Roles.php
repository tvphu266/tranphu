<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Roles extends Model
{
   // protected $primaryKey = 'id_role';

    protected $fillable = ['name', 'slug', 'permissions'];
    
    public function users()
    {
        return $this->belongsToMany(User::class, 'role_users') ;
    }

    public function hasAccess(array $permissions)
    {
        foreach ($permissions as $permission) {
            
            if($this->hasPermission($permission)){
                return true;
            }
            return false;
        }
    }

    protected function hasPermission(string $permission)
    {
    	$permissions = json_decode($this->permissions, true);
    	return $permissions[$permission]??false;
    }
}
