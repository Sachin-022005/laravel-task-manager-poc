# Laravel Task Manager API Documentation

## Base URL

https://laravel-task-manager-poc-production-dqji0b.laravel.cloud

## API Base Path

/api

---

## 1. Get All Tasks

### Request

GET `/api/tasks`

### Full URL

https://laravel-task-manager-poc-production-dqji0b.laravel.cloud/api/tasks

### Response

```json
{
  "success": true,
  "data": [
    {
      "id": 3,
      "title": "API Test Task",
      "description": "Created using Laravel REST API",
      "completed": false,
      "created_at": "2026-08-18T10:38:40.000000Z",
      "updated_at": "2026-08-18T10:38:40.000000Z"
    }
  ]
}
