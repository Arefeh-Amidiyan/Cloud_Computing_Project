<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
  <img src="https://img.shields.io/badge/Laravel-11.37.0-red" alt="Laravel Version">
  <img src="https://img.shields.io/badge/PHP-8.3.6-blue" alt="PHP Version">
  <img src="https://img.shields.io/badge/MySQL-8.0.40-orange" alt="MySQL Version">
  <img src="https://img.shields.io/docker/pulls/_/laravel" alt="Dockerized">
</p>

# Daily Planner REST API

## About the Project
This project is a **Daily Planner** application built using **Laravel** and a RESTful API architecture. The application allows users to manage their daily tasks efficiently, offering CRUD operations for creating, reading, updating, and deleting tasks. The project is fully containerized using **Docker** for easier deployment and scalability. This is my ***Cloud Computing project*** in the university.

---

## Features
- **Task Management:** Create, view, update, and delete tasks with ease.
- **RESTful API:** Fully functional API for seamless integration with front-end applications.
- **Database:** Powered by **MySQL** to store and manage tasks efficiently.
- **Dockerized Environment:** Simplifies the setup process with separate containers for the application and the database.
- **Scalable and Maintainable:** Designed for extensibility and ease of maintenance.

---

## Getting Started

### Prerequisites
- **Docker** and **Docker Compose** installed on your machine.

### Installation
1. Clone the repository:
   ```bash
   git clone https://github.com/Arefeh-Amidiyan/Daily-Planner-REST-API.git
   cd Daily-Planner-REST-API
   ```
2. Build and start the containers:
   ```bash
   docker-compose up -d
   ```
3. Build and start the database containers:
   ```bash
   docker-compose -f database/docker-compose.yml up -d
   ```
4. Run migrations to set up the database:
   ```bash
   docker exec -it app-container-name php artisan migrate
   ```

---

## API Endpoints

### Task Endpoints
| Method | Endpoint           | Description           |
|--------|--------------------|-----------------------|
| GET    | `/api/tasks`       | Retrieve all tasks    |
| GET    | `/api/tasks/{id}`  | Retrieve a task by ID |
| POST   | `/api/tasks`       | Create a new task     |
| PUT    | `/api/tasks/{id}`  | Update a task         |
| DELETE | `/api/tasks/{id}`  | Delete a task         |

For detailed documentation, refer to the **Postman collection** included in the repository.

---

## Technology Stack
- **Laravel 11.37.0** - Backend Framework
- **PHP 8.3.6** - Server-side Programming Language
- **MySQL 8.0.40** - Relational Database Management System
- **Docker** - Containerization Platform
- **Postman** - API Testing Tool

---

## License
This project is licensed under the [MIT License](https://opensource.org/licenses/MIT).

---

## Screenshots
<p align="center">
  <img src="img/Picture1.png" alt="Task List Front Screenshot">
</p>
<p align="center">
  <img src="img/Picture2.png" alt="Task List Get API Screenshot">
</p>
<p align="center">
  <img src="img/Picture3.png" alt="Task List Post API Screenshot">
</p>
<p align="center">
  <img src="img/Picture4.png" alt="Task List API Screenshot">
</p>
<p align="center">
  <img src="img/Picture5.png" alt="Task List Put API Screenshot">
</p>
<p align="center">
  <img src="img/Picture6.png" alt="Task List Delete API Screenshot">
</p>
<p align="center">
  <img src="img/Picture7.png" alt="Task List Get Specific Deleted ID API Screenshot">
</p>
---

## Contact
For any inquiries or feedback, please contact:
- **Email:** trinityamid@gmail.com
- **GitHub:** [Arefeh-Amidiyan](https://github.com/Arefeh-Amidiyan)
