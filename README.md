# Biosafety-FYP-2017
Final Year Project

This version contain
1. admin can add add, remove users from the admin panal
2. seed database for user table and admin table
3. instructions for seeding database

on teh terminal
input the following commands

  php artisan migrate:refresh --seed (to start a fresh database seed)
  
  php artisan php artisan db:seed --class=UserTableSeeder (to seed the user table)
  
  php artisan php artisan db:seed --class=AdminsTableSeeder (to seed the admin table)
