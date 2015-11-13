<?php 
namespace App\Repositories;

use App\User;
use App\Task;

class TaskRepository {

	/*we want to define a TaskRepository that holds all of our data access logic for the Task model. 
	This will be especially useful if the application grows and you need to share some Eloquent queries across the application.*/

	public function forUser(User $user)
    {
        return Task::where('user_id', $user->id)
                    ->orderBy('created_at', 'asc')
                    ->get();
    }
}