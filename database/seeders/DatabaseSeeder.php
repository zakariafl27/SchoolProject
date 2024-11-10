<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   */
  public function run(): void
  {
    // Creating 10 random users
    User::factory(10)->create();

    // Creating a specific user with a hashed password
    User::factory()->create([
      'firstname' => 'Flafi',
      'lastname' => 'Zakaria',
      'email' => 'zakaria@gmail.com',
      'password' => Hash::make('123456789'),
    ]);

    // Creating a specific admin
    Admin::factory()->create([
      'firstname' => 'Admin',
      'lastname' => 'Admin',
      'date_of_birth' => fake()->date(),
      'address' => fake()->address(),
      'phone' => substr(fake()->phoneNumber(), 10),
      'email' => 'admin@admin.admin',
      'password' => '$2y$10$ssjzkveLo5cC10ktCfJgvOtQcKsE0DuRmjijCBciikjPApZRyJHie',
    ]);

    // Creating a specific teacher
    Teacher::factory()->create([
      'firstname' => 'Teacher',
      'lastname' => 'Teacher',
      'date_of_birth' => fake()->date(),
      'address' => fake()->address(),
      'phone' => substr(fake()->phoneNumber(), 10),
      'email' => 'teacher@teacher.teacher',
      'password' => '$2y$10$ssjzkveLo5cC10ktCfJgvOtQcKsE0DuRmjijCBciikjPApZRyJHie',
    ]);
  }
}
