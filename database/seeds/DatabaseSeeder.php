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

        \App\Produits::create([
            'imageUrl'=>'imageiamge',
            'titre'=>'UZA BINTU',
            'description'=>'Uza bintu est une plateforme de vente et achat oriente dans le blaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
            'lien'=>'www.uzbintu.com'
            ]);
        \App\Produits::create(
            [
            'imageUrl'=>'imageiamge',
            'titre'=>'SOS 243',
            'description'=>'SOS 243 est une plateforme de vente et achat oriente dans le blaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
            'lien'=>'www.sos243.com'
        ]);

        \App\services::create([
            'iconUrl'=>'icon icon',
            'titre'=>'Herbergement',
            'description'=>'faites heberger vos applications web sur nos serveurs tres peformants'
        ]); \App\services::create([
            'iconUrl'=>'icon icon',
            'titre'=>'Mail professionnel',
            'description'=>'Nous gerons votre service de messagerie dentreprise '
        ]);
        \App\services::create([
            'iconUrl'=>'icon icon',
            'titre'=>'Installation camera',
            'description'=>'blabl avla blab lavlablablavl ablabl   avlabla blavlablab lavlablablavlab lablavlablablavlablablavla '
        ]);
    }
}
