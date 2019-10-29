git clone https://github.com/laraxot/base_foodm.git foodm --recurse-submodule --depth 1

 cd foodm
 
 cp .env.latest .env
 
-- update your .env

composer install

php artisan migrate

cd resources/views/themes/gbfood

npm i npm@latest -g

npm install

npm run prod

