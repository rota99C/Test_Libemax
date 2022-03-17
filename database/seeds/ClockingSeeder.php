<?php

use Illuminate\Database\Seeder;
use App\Models\Clocking;

class ClockingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $clockings = config('clockings.data');
        foreach ($clockings as $clocking) {
            $_clocking = new Clocking();
            $_clocking->direction = $clocking['direction'];
            $_clocking->save();
        }
    }
}
