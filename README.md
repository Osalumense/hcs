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
![HCS User Chat](https://github-production-user-asset-6210df.s3.amazonaws.com/43953425/289694818-b9c1cac0-6c2a-4bad-bcc7-c9c3c311f326.png?X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Credential=AKIAIWNJYAX4CSVEH53A%2F20231211%2Fus-east-1%2Fs3%2Faws4_request&X-Amz-Date=20231211T225755Z&X-Amz-Expires=300&X-Amz-Signature=f1201cdb0f7d752cf559f4f8d71a86933d3f3735b7d527b1ccbd61fa92cd327f&X-Amz-SignedHeaders=host&actor_id=43953425&key_id=0&repo_id=454053524)



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

