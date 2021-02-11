<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class linkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
          [
              'name' => 'Nemzeti Adó- és Vámhivatal',
              'url' => 'https://nav.gov.hu/'
          ],[
              'name' => 'Online Számla',
              'url' => 'https://onlineszamla.nav.gov.hu/home'
          ],[
              'name' => 'E-önkormányzat portál',
              'url' => 'https://ohp-20.asp.lgov.hu/nyitolap'
          ],[
              'name' => 'Magyarország.hu',
              'url' => 'https://magyarorszag.hu/szuf_fooldal#fooldal'
          ],[
              'name' => 'Központi Statisztikai Hivatal',
              'url' => 'https://elektra.ksh.hu/'
          ],[
              'name' => 'Cégközlöny',
              'url' => 'http://www.cegkozlony.hu/'
          ],[
              'name' => 'Magyarország Bíróságai',
              'url' => 'https://birosag.hu/orszagos-birosagi-hivatal-0'
          ],[
              'name' => 'Személyi Jövedelemadó',
              'url' => 'https://eszja.nav.gov.hu/app/login/#login'
          ],[
              'name' => 'Egyéni vállalkozás',
              'url' => 'https://www.nyilvantarto.hu/ugyseged/EgyeniVallalkozasKerelemInditasa.xhtml'
          ],[
              'name' => 'Nemzeti Agrárgazdasági Kamara portál',
              'url' => 'http://www.nak.hu/'
          ],[
              'name' => 'E-Papír',
              'url' => 'https://epapir.gov.hu/'
          ],[
              'name' => 'Kecskeméti városrendészet',
              'url' => 'http://www.kozteruletkecskemet.hu/parkolas/e-berlet'
          ],[
              'name' => 'Magyar Államkincstár Nyugdíjbiztosítás',
              'url' => 'https://nyugdijbiztositas.tcs.allamkincstar.gov.hu/hu/'
          ],[
              'name' => 'Nemzeti Egészségbiztosítás',
              'url' => 'http://www.oep.hu/'
          ],[
              'name' => 'Hivatalos MNB devizaárfolyamok',
              'url' => 'https://arfolyam.iridium.hu/'
          ],[
              'name' => 'Jegybanki alapkamat',
              'url' => 'https://www.mnb.hu/Jegybanki_alapkamat_alakulasa'
          ],
        ];

        DB::table('links')->insert($data);
    }
}
