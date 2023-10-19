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

        $company2->business_name ="dr ernesto torres";
        $company2->post ="enfermera/o";
        $company2->email ="ernesto@gmail.com";
        $company2->save();

        $company3 = new Company();

        $company3->business_name ="collahuasi";
        $company3->post ="operador cargador frontal";
        $company3->email ="collahuasi@gmail.com";
        $company3->save();

        $company4 = new Company();

        $company4->business_name ="telco";
        $company4->post ="especialista en sistemas de control";
        $company4->email ="telco@gmail.com";
        $company4->save();

        $company5 = new Company();

        $company5->business_name ="zofri";
        $company5->post ="operador orquilla";
        $company5->email ="zof@gmail.com";
        $company5->save();
        


    }
}
