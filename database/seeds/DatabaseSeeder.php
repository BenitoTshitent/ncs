<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        \App\Acceuil::create([
            'primeTextAcc'=>'Nous sommes votre solution numerique',
            'logo'=>'logo',
            'secTextAcc'=>'avec nous tous vos projects sont realises avec nous tous vos projects sont realises',
            'ImageAccUrl'=>' image fond acceuil',
            'imagefdAppUrl'=>'image de fond apropos',
            'enteteTextApp'=>'texte dentete apropos',
            'descTextApp'=>'description apropos description apropos description apropos description apropos description apropos',
            'emailTextContact'=>'contact@numeric243.com',
            'num1TextContact'=>'+243 972 563 985',
            'num2TextContact'=>'+243 812 284 335',
            'numAvenenue'=>'152 Av Maniema',
            'villeCommune'=>'Lubumbashi centre ville ',
            'paysProv'=>'RDC / Haut katanga',
            'facebook'=>'https://colorlib.com/',
            'twitter'=>'https://colorlib.com/',
            'instagram'=>'https://colorlib.com/',
        ]);
    }
}
