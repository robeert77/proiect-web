<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SuccessStory;
use App\Models\Member;

class SuccessStorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $members = Member::all();

        foreach ($members as $member) {
            SuccessStory::factory()->count(rand(1, 5))->create([
                'member_id' => $member->id, 
            ]);
        }
    }
}
