<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Artikal;
use App\Models\Prodavnica;

class ArtikalSeeder extends Seeder
{
    public function run(): void
    {
        $prodavnice = Prodavnica::all();

        if ($prodavnice->isEmpty()) {
            $this->command->warn("Nema prodavnica! Seedaj prvo prodavnice.");
            return;
        }

        foreach ($prodavnice as $prodavnica) {
            Artikal::create([
                'naziv' => 'Čokolada',
                'cijena' => 1.99,
                'x' => 100,
                'y' => 150,
                'prodavnica_id' => $prodavnica->id,
            ]);

            Artikal::create([
                'naziv' => 'Sok od naranče',
                'cijena' => 2.49,
                'x' => 200,
                'y' => 300,
                'prodavnica_id' => $prodavnica->id,
            ]);

            Artikal::create([
                'naziv' => 'Kruh',
                'cijena' => 0.99,
                'x' => 350,
                'y' => 100,
                'prodavnica_id' => $prodavnica->id,
            ]);
        }

        $this->command->info('Seedano nekoliko artikala za svaku prodavnicu!');
    }
}
