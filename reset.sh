docker compose down; 
docker system prune -a;
docker volume prune; 
#rm -rf phpBB3;
#unzip phpBB-3.2.9.zip;
docker-compose up -d; 
docker-compose exec apache chown -Rv www-data:www-data /var/www/html/;
