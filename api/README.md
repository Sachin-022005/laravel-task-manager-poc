# Task Manager API

## Live API Base URL

https://laravel-task-manager-poc-production-dqji0b.laravel.cloud

## Endpoints

### 1. Get All Tasks

GET /api/tasks

Full URL:

https://laravel-task-manager-poc-production-dqji0b.laravel.cloud/api/tasks


### 2. Create Task

POST /api/tasks

Request Body:

{
  "title": "Test Task",
  "description": "Testing API",
  "completed": false
}


### 3. Get Single Task

GET /api/tasks/{task}

Example:

GET /api/tasks/13


### 4. Update Task

PUT /api/tasks/{task}

PATCH /api/tasks/{task}

Request Body:

{
  "title": "Updated Task",
  "description": "Updated description",
  "completed": true
}


### 5. Delete Task

DELETE /api/tasks/{task}


## API Response Example

{
  "success": true,
  "data": [
    {
      "id": 13,
      "title": "hi",
      "description": "hello",
      "completed": false
    }
  ]
}

## Laravel Source Files

API routes:

routes/api.php

API controller:

app/Http/Controllers/Api/TaskController.php

Model:

app/Models/Task.php
