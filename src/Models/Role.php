<?php 
namespace Danielnegoita\SparkRoles\Models;

use Illuminate\Database\Eloquent\Model;
use Danielnegoita\SparkRoles\Models\User;
use Danielnegoita\SparkRoles\Models\Permission;

class Role extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'roles';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'slug', 'description', 'special'];
    
    /**
     * The users that belong to the role.
     */
    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    /**
     * The users that belong to the role.
     */
    public function permissions()
    {
        return $this->belongsToMany(Permission::class);
    }
    
}
