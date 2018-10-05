<?php


use Phinx\Seed\AbstractSeed;

class FillPostTable extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     */
    public function run()
    {


        $fake = \Faker\Factory::create();
        $categories = [];

        for ($i=0; $i < 10 ; $i++) { 
            
            $categories[] = [

                'name'  => $fake->sentence(4),
                'slug'  => $fake->slug
            ];
        }


        $posts = [];

        for ($i=0; $i < 100 ; $i++) { 
            
            $timestamp = $fake->unixTime('now');
            $posts[] = [

                'name'  => $fake->sentence(6),
                'slug'  => $fake->slug,
                'content' => $fake->text(300),
                'created_at' => $fake->date('Y-m-d H:i:s', $timestamp),
                'updated_at' => $fake->date('Y-m-d H:i:s', $timestamp),
                'category_id' => rand(1, 10), 
            ];
        }

        $this->insert('categories', $categories);
        $this->insert('posts', $posts);


    }
}
