# HCS

## Description
A mental health counselling application developed in the Laravel framework, the appplication enables users to enjoy counselling sessions from the comfort of their homes either through chat and video calls.
It is still a work in progress...

## Screenshot
#### Homepage
![hcs home](https://user-images.githubusercontent.com/43953425/151820511-40400477-d480-42f0-9364-f274bd43db8a.PNG) 

#### Login page
![HCS login](https://user-images.githubusercontent.com/43953425/151820612-0ee91bec-5d00-408e-984a-940e617898fd.PNG)

#### Chat with Counsellor
![HCS User Chat](https://user-images.githubusercontent.com/43953425/151820612-0ee91bec-5d00-408e-984a-940e617898fd.PNG)



## Steps to run in local machine
- Clone the repository
- cd into project directory
- Copy .env.example to .env
- Run ```composer install``` to install composer dependencies
- Run ```npm install``` to install npm dependencies
- Run ```php artisan key:generate``` to generate application key
- Run ```php artisan migrate``` to create all tables
- Run ```php artisan db:seed --class=CreateAdminSeeder``` to seed the database with the default login details for admin, counsellor and user
- Run ```php artisan serve``` to serve up the application
- The application can then be viewed on your local machine.

