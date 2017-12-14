<?php
namespace Danielnegoita\SparkRoles\Seeds;

use DB;
use Illuminate\Database\Seeder;

class SparkRolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // roles
        $roles = [
            [ 
                'name'          => 'Administrator',
                'slug'          => 'admin',
                'description'   => 'Access to all application',
                'special'       => 'all-access',
            ],
            [
                'name'          => 'Moderator',
                'slug'          => 'moderator',
                'description'   => 'Some admin area access',
                'special'       => null,
            ],
        ];
        
        // insert roles
        DB::table('roles')->insert($roles);

        // is there a user
        $any = DB::table('users')->get();
        if ( empty($any) ) {
            DB::table('users')
                ->insert( [ 
                    'name' => 'Admin',
                    'email' => 'admin@change.me',
                    'password' => bcrypt('password')
                ]
            );
        }

        //associate first user with admin role
        DB::table('role_user')->insert( ['role_id' => 1, 'user_id'=> 1] );

         // permissions
        $permissions = [
            [ 
                'name'          => 'Show Spark Roles Dashboard',
                'slug'          => 'spark-roles.index',
                'description'   => 'View spark roles dashboard'
            ],
        ];
        
        //insert permissions    
        DB::table('permissions')->insert($permissions);
    }
}
