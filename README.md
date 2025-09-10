<p align="center">
  <a href="https://laravel.com" target="_blank">
    <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
  </a>
</p>

# 📝 Universidad X  
**Materia:** Taller de Programación  
**Estudiante:** Tu Nombre Completo  
**Proyecto:** Laboratorio 5 – Operaciones CRUD con JSON y APIs  

---

## 📋 Descripción  
Proyecto Laravel que implementa un CRUD de tareas con JSON y APIs REST.  
Cada tarea contiene `id`, `title` y `completed`. Persistencia en archivo JSON.

---

## 🚀 Tecnologías  
- PHP 8+  
- Laravel 10+  
- Composer  
- Visual Studio Code  
- Git / GitHub  

---

## ⚙️ Instalación  
```bash
git clone https://github.com/tuusuario/lab-laravel-crud.git
cd lab-laravel-crud
composer install
cp .env.example .env
php artisan key:generate
php artisan install:api
php artisan serve
