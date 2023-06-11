<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Support\Str;

class CourseControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function testStore(): void
    {
        $request = [
            'course_title' => 'Test3',
            'course_description' => 'CoursDescription Test3',
            'category_id' => 1,
            'cover_picture' => 'cover_pic/test3',
            'tags' => [1,5],
            'preview_video' => 'preview_video' 
        ];

        $response = $this->post(route('admin.course-store', $request));

        $response->assertStatus(200);
    }
}
