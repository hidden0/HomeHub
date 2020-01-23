#!/bin/bash
# Setup webserver if it isn't already done
sudo apt install apache2 -y
# Setup pi user permissions for /var/www/html
sudo usermod -a -G www-data pi
sudo chown -R pi:www-data /var/www
# Setup the autostart
echo "@lxpanel --profile LXDE-pi" > /home/pi/.config/lxsession/LXDE-pi/autostart
echo "@pcmanfm --desktop --profile LXDE-pi" >> /home/pi/.config/lxsession/LXDE-pi/autostart
echo "@xset s off" >> /home/pi/.config/lxsession/LXDE-pi/autostart
echo "@xset -dpms" >> /home/pi/.config/lxsession/LXDE-pi/autostart
echo "@xset s noblank" >> /home/pi/.config/lxsession/LXDE-pi/autostart
echo "@chromium-browser --noerrdialogs --kiosk http://localhost/" >> /home/pi/.config/lxsession/LXDE-pi/autostart
