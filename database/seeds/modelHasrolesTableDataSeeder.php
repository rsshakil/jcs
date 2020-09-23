<?php
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\Models\ADM\User;
class modelHasrolesTableDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $user_super = User::findOrFail($this->user_search('Jacos Super Admin'));
        $user_super->assignRole('Super Admin','Admin','User');

        $user_admin = User::findOrFail($this->user_search('Jacos Admin'));
        $user_admin->assignRole('Admin','User');

        $user_user = User::findOrFail($this->user_search('Jacos User'));
        $user_user->assignRole('User');

        $user_user = User::findOrFail($this->user_search('Byr1 User'));
        $user_user->assignRole('Byr');

        $user_user = User::findOrFail($this->user_search('Slr1 User'));
        $user_user->assignRole('Slr');

        $user_user = User::findOrFail($this->user_search('Slr2 User'));
        $user_user->assignRole('Slr');

        $user_user = User::findOrFail($this->user_search('Slr3 User'));
        $user_user->assignRole('Slr');

        $user_user = User::findOrFail($this->user_search('Slr4 User'));
        $user_user->assignRole('Slr');



        // $user_user = User::findOrFail($this->user_search('Chairman'));
        // $user_user->assignRole('Admin');
        
    }
    private function user_search($user_name){
        $user_info=User::where('name',$user_name)->first();
        return $user_id=$user_info['id'];
    }
}