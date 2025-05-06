<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\File;
use Illuminate\Database\Seeder;
use App\Models\CheckIn;
use Illuminate\Support\Facades\Storage;

class CheckInSeeder extends Seeder
{
    public function run(): void
    {
        // Example image placeholder
        $sourceImage = public_path('images/sample.jpg'); // use local image
        $imagePath = 'checkin_images/sample.jpg';

        Storage::disk('public')->put($imagePath, File::get($sourceImage));

        $sampleData = [
            [
                'user_id' => 'EMP001',
                'name' => 'John Doe',
                'department' => 'HR',
                'image' => $imagePath,
                'time_in' => '08:05:00',
                'date' => '2025-04-30',
                'status' => 'On Time',
            ],
            [
                'user_id' => 'EMP002',
                'name' => 'Jane Smith',
                'department' => 'IT',
                'image' => $imagePath,
                'time_in' => '08:25:00',
                'date' => '2025-04-30',
                'status' => 'Late',
            ],
            [
                'user_id' => 'EMP003',
                'name' => 'Alex Johnson',
                'department' => 'Finance',
                'image' => $imagePath,
                'time_in' => '08:00:00',
                'date' => '2025-04-30',
                'status' => 'On Time',
            ],
        ];

        foreach ($sampleData as $data) {
            CheckIn::create($data);
        }
    }
}

