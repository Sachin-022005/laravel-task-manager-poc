# Laravel Task Manager POC

A simple Task Manager application built with Laravel to demonstrate how Laravel works from development to deployment.

## Project Objective

This Proof of Concept demonstrates the core Laravel application flow:

Browser → Route → Controller → Model → Database → Blade View

The application allows users to:

- Create tasks
- View tasks
- Edit tasks
- Mark tasks as completed
- Delete tasks

The project is also maintained in GitHub and prepared for deployment on Laravel Cloud.

---

## Technology Stack

| Technology | Purpose |
|---|---|
| Laravel 13 | PHP web framework |
| PHP 8.3+ | Application runtime |
| Blade | Frontend templating |
| Eloquent ORM | Database interaction |
| SQLite | Development database |
| Vite | Frontend asset building |
| Node.js / npm | Frontend dependencies |
| Git | Version control |
| GitHub | Source code repository |
| Laravel Cloud | Cloud deployment |

---

## Laravel Architecture

The application follows Laravel's MVC architecture.

```text
User / Browser
      |
      v
    Route
      |
      v
  Controller
      |
      v
    Model
      |
      v
   Database
      |
      v
    Blade
      |
      v
    Browser