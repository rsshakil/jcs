<?php

use Illuminate\Database\Seeder;

class cmn_companies_userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory(App\cmn_companies_user::class, 3)->create();
        $companies_user = array(
            [
                'cmn_company_id'=>1,
                'adm_user_id'=>4,
            ],
            [
                'cmn_company_id'=>2,
                'adm_user_id'=>5,
            ],
            [
                'cmn_company_id'=>3,
                'adm_user_id'=>6,
            ],
            [
                'cmn_company_id'=>4,
                'adm_user_id'=>7,
            ],
            [
                'cmn_company_id'=>5,
                'adm_user_id'=>8,
            ]
        );
        App\Models\CMN\cmn_companies_user::insert($companies_user);
    }
}
