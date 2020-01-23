#!/bin/bash
# Setup webserver if it isn't already done
sudo apt install apache2 -y
# Setup pi user permissions for /var/www/html
sudo usermod -a -G www-data pi
sudo chown -R pi:www-data /var/www
