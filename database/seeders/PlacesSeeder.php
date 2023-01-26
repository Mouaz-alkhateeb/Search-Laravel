<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Country;
use App\Models\District;
use Illuminate\Database\Seeder;

class PlacesSeeder extends Seeder
{
    public function run()
    {
        /////county Syria
        /////city1
        $country1 = Country::create(['name' => 'Syria']);
        $city1 = City::create(['name' => 'Damascus', 'country_id' => $country1->id]);
        $district1 = District::create(['name' => 'Al Malki', 'country_id' => $country1->id, 'city_id' => $city1->id]);
        $district2 = District::create(['name' => 'Al Hamra', 'country_id' => $country1->id, 'city_id' => $city1->id]);
        $district3 = District::create(['name' => 'Al shalaan', 'country_id' => $country1->id, 'city_id' => $city1->id]);
        //////city2
        $city2 = City::create(['name' => 'Homs', 'country_id' => $country1->id]);
        $district4 = District::create(['name' => 'Al shobra', 'country_id' => $country1->id, 'city_id' => $city2->id]);
        $district5 = District::create(['name' => 'Al basit', 'country_id' => $country1->id, 'city_id' => $city2->id]);
        $district6 = District::create(['name' => 'Al tadmori', 'country_id' => $country1->id, 'city_id' => $city2->id]);
        ///////city3
        $city3 = City::create(['name' => 'Aleppo', 'country_id' => $country1->id]);
        $district7 = District::create(['name' => 'Al morgan', 'country_id' => $country1->id, 'city_id' => $city3->id]);
        $district8 = District::create(['name' => 'Al hamidia', 'country_id' => $country1->id, 'city_id' => $city3->id]);
        $district9 = District::create(['name' => 'Al shaar', 'country_id' => $country1->id, 'city_id' => $city3->id]);

        /////county egypt
        /////city1
        $country2 = Country::create(['name' => 'Egypt']);
        $city11 = City::create(['name' => 'Al kahera', 'country_id' => $country2->id]);
        $district10 = District::create(['name' => 'Al tembor', 'country_id' => $country2->id, 'city_id' => $city11->id]);
        $district11 = District::create(['name' => 'Al nasrani', 'country_id' => $country2->id, 'city_id' => $city11->id]);
        $district12 = District::create(['name' => 'Al shalaanto', 'country_id' => $country2->id, 'city_id' => $city11->id]);
        //////city2
        $city22 = City::create(['name' => 'al eskandarieh', 'country_id' => $country2->id]);
        $district13 = District::create(['name' => 'Al shobraef', 'country_id' => $country2->id, 'city_id' => $city22->id]);
        $district14 = District::create(['name' => 'Al mnhyt', 'country_id' => $country2->id, 'city_id' => $city22->id]);
        $district15 = District::create(['name' => 'Al trest', 'country_id' => $country2->id, 'city_id' => $city22->id]);
        ///////city3
        $city33 = City::create(['name' => 'Nasr', 'country_id' => $country2->id]);
        $district16 = District::create(['name' => 'Al morganeh', 'country_id' => $country2->id, 'city_id' => $city33->id]);
        $district17 = District::create(['name' => 'Al hamidiads', 'country_id' => $country2->id, 'city_id' => $city33->id]);
        $district18 = District::create(['name' => 'Al shaarww', 'country_id' => $country2->id, 'city_id' => $city33->id]);

        /////county palestine
        /////city1
        $country3 = Country::create(['name' => 'Palestine']);
        $city111 = City::create(['name' => 'Al kodos', 'country_id' => $country3->id]);
        $district19 = District::create(['name' => 'Al Malki', 'country_id' => $country3->id, 'city_id' => $city111->id]);
        $district20 = District::create(['name' => 'Al Hamrs', 'country_id' => $country3->id, 'city_id' => $city111->id]);
        $district20 = District::create(['name' => 'Al shalaan', 'country_id' => $country3->id, 'city_id' => $city111->id]);
        //////city2
        $city222 = City::create(['name' => 'Nasrah', 'country_id' => $country3->id]);
        $district21 = District::create(['name' => 'Al shobraeww', 'country_id' => $country3->id, 'city_id' => $city222->id]);
        $district22 = District::create(['name' => 'Al basitfd', 'country_id' => $country3->id, 'city_id' => $city222->id]);
        $district23 = District::create(['name' => 'Al tadmorisdfv', 'country_id' => $country3->id, 'city_id' => $city222->id]);
        ///////city3
        $city333 = City::create(['name' => 'Gaza', 'country_id' => $country3->id]);
        $district24 = District::create(['name' => 'Al morgansdvsdv', 'country_id' => $country3->id, 'city_id' => $city333->id]);
        $district25 = District::create(['name' => 'Al hamidiafsgb', 'country_id' => $country3->id, 'city_id' => $city333->id]);
        $district26 = District::create(['name' => 'Al shaarfdgbfd', 'country_id' => $country3->id, 'city_id' => $city333->id]);
    }
}