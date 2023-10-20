<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Company;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $company = new Company();

        $company->business_name ="banco santander";
        $company->post ="ejecutivo de atencion al cliente";
        $company->email ="san@gmail.com";
        $company->save();

        $company2 = new Company();

        $company2->business_name ="Lider";
        $company2->post ="Ingeniero desarrollo de software";
        $company2->email ="lider@gmail.com";
        $company2->save();


    }
}
