<?php
use App\Fumetti;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class FumettiSeader extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0; $i<10; $i++){
            $data = [
                'titolo' => $faker -> name,
                'autore' => $faker -> name,
                'anno' => $faker -> year,
                'recensione' => $faker -> text,
                'voto' => $faker -> numberBetween($min = 0, $max = 10)
            ];

            $fumetto = new Fumetti;
            $fumetto -> fill($data);
            $fumetto -> save();
        }
    }
}
