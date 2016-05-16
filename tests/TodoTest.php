<?php

use App\User;
use App\Todo;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class TodoTest extends TestCase
{
    //use DatabaseMigrations;

    public function setUp()
    {
        parent::setUp();

        $user = factory(User::class)->create();
        $this->actingAs($user);
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testSeeTodoList()
    {
        $this->visit('/todo')
            ->see('Todo List');
    }

    public function testSeeAddTodoFrom()
    {
        $this->visit('/todo')
            ->click('Add New Todo')
            ->seePageIs('/todo/create')
            ->see('Create New Todo');
    }

    public function testAddTodo()
    {
        $this->visit('/todo/create')
            ->type('A New Todo', 'name')
            ->press('Create Button')
            ->seePageIs('/todo')
            ->see('New todo created successfully')
            ->seeInDatabase('todos', ['name' => 'A New Todo']);
    }

}
