<?php

use Illuminate\Database\Seeder;
use App\Models\Body;
use App\Models\Build;
use App\Models\Installation;
use App\Models\Resource;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(BodySeeder::class);
        // $this->call(UserSeeder::class);

        $galaxy = Body::create([
            'name' => 'Milky Way'
        ]);

        $sol = Body::create([
            'name' => 'The Sun'
        ]);
        $sol->appendToNode($galaxy)->save();

        $mercury = Body::create([
            'name' => 'Mercury'
        ]);
        $mercury->appendToNode($sol)->save();

        $venus = Body::create([
            'name' => 'Venus'
        ]);
        $venus->appendToNode($sol)->save();

        $earth = Body::create([
            'name' => 'Earth'
        ]);
        $earth->appendToNode($sol)->save();

        $moon = Body::create([
            'name' => 'The Moon'
        ]);
        $moon->appendToNode($earth)->save();

        $user = User::create([
            'username' => 'me',
            'password' => \Hash::make('password'),
            'email' => 'support@fig.limited'
        ]);

        $installation = Installation::create([
            'body_id' => $earth->id,
            'user_id' => $user->id
        ]);
        $surface = $installation->surface()->create([
            'is_orbital' => false
        ]);

        $iron = Resource::create([
            'name' => 'Iron'
        ]);
        $titanium = Resource::create([
            'name' => 'Titanium'
        ]);
        $carbon = Resource::create([
            'name' => 'Carbon'
        ]);
        $earth->resources()->attach([$iron->id, $titanium->id, $carbon->id]);

        $derrick = Resource::create([
            'name' => 'Derrick'
        ]);

        $buildADerrick = Build::create([
            'name' => 'Build a Derrick',
            'cycles' => 6
        ]);

        $buildADerrick->parts()->create([
            'build_id' => $buildADerrick->id,
            'resource_id' => $derrick->id,
            'quantity' => 1
        ]);
        $buildADerrick->parts()->create([
            'build_id' => $buildADerrick->id,
            'resource_id' => $iron->id,
            'quantity' => -3
        ]);
        $buildADerrick->parts()->create([
            'build_id' => $buildADerrick->id,
            'resource_id' => $titanium->id,
            'quantity' => -4
        ]);
        $buildADerrick->parts()->create([
            'build_id' => $buildADerrick->id,
            'resource_id' => $carbon->id,
            'quantity' => -1
        ]);

        //  add Derrick to Earth surface station
        $surface->resources()->attach($derrick->id);
    }
}
