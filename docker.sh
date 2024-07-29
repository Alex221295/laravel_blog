docker-compose build
docker-compose up -d
sudo docker-compose run --rm composer create-project laravel/laravel:^10.0 .
sudo chmod -R 777 src/
sudo docker-compose run --rm artisan ui bootstrap
sudo apt install npm
npm install
npm run dev