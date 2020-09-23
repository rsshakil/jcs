<?php

use Illuminate\Database\Seeder;

class cmn_companySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cmn_company_array=array(
            [
                'company_name' => "株式会社スーパーバリュー",
                'company_name_kana' => "ｶﾌﾞｼｷｶﾞｲｼｬ ｽｰﾊﾟｰﾊﾞﾘｭｰ",
                'jcode' => 1000010,
                'phone' => "03-1234-5678",
                'fax' => "03-1234-5678",
                'postal_code' => "362-0034",
                'address' => "埼玉県上尾市愛宕3-1-40",
            ],
            [
                'company_name' => "ミタニコーポレーション㈱",
                'company_name_kana' => "",
                'jcode' => 16240,
                'phone' => "03-1234-5678",
                'fax' => "03-1234-5678",
                'postal_code' => "362-0034",
                'address' => "埼玉県上尾市愛宕3-1-40",
            ],
            [
                'company_name' => "株式会社サノテック",
                'company_name_kana' => "ｻﾉﾃｯｸ",
                'jcode' => 16373,
                'phone' => "",
                'fax' => "",
                'postal_code' => "",
                'address' => "",
            ],
            [
                'company_name' => "伊藤正株式会社",
                'company_name_kana' => "ｲﾄｳｼｮｳ",
                'jcode' => 21980,
                'phone' => "",
                'fax' => "",
                'postal_code' => "",
                'address' => "",
            ],
            [
                'company_name' => "株式会社カンパーニュ",
                'company_name_kana' => "ｶﾝﾊﾟｰﾆｭ",
                'jcode' => 24802,
                'phone' => "",
                'fax' => "",
                'postal_code' => "",
                'address' => "",
            ]
        );
        App\Models\CMN\cmn_company::insert($cmn_company_array);
    }
}
