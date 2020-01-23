#!/bin/bash
# Setup webserver if it isn't already done
sudo apt install apache2 -y
# Setup pi user permissions for /var/www/html
sudo usermod -a -G www-data pi
sudo chown -R -f www-data:www-data /var/www/html
# Index.html should be default page
echo "<h1>Success!</h1>" >> /var/www/html/index.html
