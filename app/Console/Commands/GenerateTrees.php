<?php

namespace App\Console\Commands;

use App\Models\Ability;
use App\Models\Event;
use App\Models\Family;
use App\Models\Journal;
use App\Models\Location;
use App\Models\Organisation;
use App\Models\Quest;
use App\Models\Race;
use App\Models\Tag;
use App\Models\Timeline;
use Illuminate\Console\Command;

class GenerateTrees extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'trees';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create the trees';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        /*Location::fixTree();
        $this->info("Fixed locations.");*/

        /*Race::fixTree();
        $this->info("Fixed races.");
        Location::fixTree();
        $this->info("Fixed locations.");
        Organisation::fixTree();
        $this->info("Fixed organisations.");
        Family::fixTree();
        $this->info("Fixed families.");
        Tag::fixTree();
        $this->info("Fixed tags.");
        Ability::fixTree();
        $this->info("Fixed abilities.");
        Journal::fixTree();
        $this->info("Fixed journals.");*/
        //$this->info("Fixed quests.");

        Timeline::fixTree();
        $this->info("Fixed Timelines.");
        Event::fixTree();
        $this->info("Fixed Events.");
    }
}
