# to execute
- composer install
- php artisan key:generate (se precisar)
- php artisan jwt:secret (se precisar)
- copy .env.example
- php artisan migrate
- php artisan db:seed
- php artisan serve


# Login

- POST http://127.0.0.1:8000/api/login
- email: test@example.com
- password: 123456

# get-info-department-professional-patient

- GET http://127.0.0.1:8000/api/departments/get-info-department-professional-patient/{patient_id}