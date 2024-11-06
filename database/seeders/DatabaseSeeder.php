<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $username = env('DB_USERNAME');
        $password = env('DB_PASSWORD');
        $database = env('DB_DATABASE');
        $host = env('DB_HOST');
        $file = database_path('hima_database.sql'); // sesuaikan path file .sql

        $command = "mysql -u{$username} -p{$password} -h{$host} {$database} < {$file}";

        exec($command);

        $this->command->info("Data dari file .sql berhasil diimport!");

    }
}
