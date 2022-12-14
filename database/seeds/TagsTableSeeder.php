<?php

use App\Models\Admin\Tag;
use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = [
            "Italy",
            "pizza",
            "pasta",
            "blogger",
            "Microsoft",
            "party",
            "wedding",
            "pool",
            "summer",
            "spring",
            "fall",
            "winter",
        ];

        foreach($tags as $tag) {
            $newTag = new Tag();
            $newTag->name = $tag;
            $newTag->save();
        }
    }
}
