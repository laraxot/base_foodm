# base_foodm

git clone https://github.com/laraxot/base_foodm.git foodm --recurse-submodules --depth 1

cd foodm

composer update

cp .env.latest .env

update your .env

create 2 Databases : 
- geek_lu (for users)
- geek_food (for data)

php artisan migrate

thats all ! 
