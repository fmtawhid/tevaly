<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class RootSeeder extends Seeder
{
    /**
     * Seed the root admin user and 50 members in binary tree.
     */
    public function run(): void
    {
        // Create root admin
        $admin = User::firstOrCreate(
            ['id' => 1],
            [
                'name' => 'Admin',
                'email' => 'admin@tevaly.com',
                'phone' => '1000000000',
                'password' => Hash::make('12345678'),
                'referral_code' => 'TEVALY100',
                'role' => 'admin',
            ]
        );

        // Create 50 users in binary tree
        $queue = [['parent_id' => $admin->id, 'sponsor_id' => $admin->id]];
        $count = 0;

        while (!empty($queue) && $count < 50) {
            $current = array_shift($queue);

            // Add left child
            if ($count < 50) {
                $user = User::create([
                    'name' => fake()->name(),
                    'phone' => fake()->unique()->phoneNumber(),
                    'email' => fake()->unique()->safeEmail(),
                    'password' => Hash::make('12345678'),
                    'referral_code' => 'TVL' . Str::upper(Str::random(8)),
                    'sponsor_id' => $current['sponsor_id'],
                    'parent_id' => $current['parent_id'],
                    'position' => 'left',
                    'role' => 'user',
                ]);
                $queue[] = ['parent_id' => $user->id, 'sponsor_id' => $current['sponsor_id']];
                $count++;
            }

            // Add right child
            if ($count < 50) {
                $user = User::create([
                    'name' => fake()->name(),
                    'phone' => fake()->unique()->phoneNumber(),
                    'email' => fake()->unique()->safeEmail(),
                    'password' => Hash::make('12345678'),
                    'referral_code' => 'TVL' . Str::upper(Str::random(8)),
                    'sponsor_id' => $current['sponsor_id'],
                    'parent_id' => $current['parent_id'],
                    'position' => 'right',
                    'role' => 'user',
                ]);
                $queue[] = ['parent_id' => $user->id, 'sponsor_id' => $current['sponsor_id']];
                $count++;
            }
        }
    }
}
