<?php

namespace Tests\Feature;

use Tests\TestCase;
use Livewire\Livewire;
use App\Models\Task;
use Database\Factories\TaskFactory;

class TasksTest extends TestCase
{
    /** @test */
    public function it_can_create_a_task()
    {
        Livewire::test('tasks')
            ->set('title', 'New Task')
            ->set('description', 'Task Description')
            ->call('store');

        $this->assertTrue(Task::where('title', 'New Task')->exists());
    }

    /** @test */
    public function it_can_update_a_task()
    {
        $task = Task::factory()->create();

        Livewire::test('tasks')
            ->call('edit', $task->id)
            ->set('title', 'Updated Task')
            ->set('description', 'Updated Task Description')
            ->call('update');

        $task = $task->fresh();

        $this->assertEquals('Updated Task', $task->title);
        $this->assertEquals('Updated Task Description', $task->description);
    }

    /** @test */
    public function it_can_delete_a_task()
    {
        $task = Task::factory()->create();

        Livewire::test('tasks')
            ->call('delete', $task->id);

        $this->assertFalse(Task::where('id', $task->id)->exists());
    }
}
