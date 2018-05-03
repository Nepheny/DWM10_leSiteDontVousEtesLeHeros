#!/bin/bash

sudo rm -r /var/www/html
sudo ln -s /vagrant/web/ /var/www/html
sudo cp /vagrant/apache2/php.ini /etc/php/7.2/apache2/php.ini
sudo service apache2 restart