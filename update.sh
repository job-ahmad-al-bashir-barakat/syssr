#!/bin/bash
date
git pull
pushd .
cd cms
/opt/cpanel/ea-php73/root/usr/bin/php artisan migrate
/opt/cpanel/ea-php73/root/usr/bin/php artisan module:seed
/opt/cpanel/ea-php73/root/usr/bin/php -d allow_url_fopen=on /opt/cpanel/composer/bin/composer update
/opt/cpanel/ea-php73/root/usr/bin/php -d allow_url_fopen=on /opt/cpanel/composer/bin/composer dump-autoload
popd
printf '#%.0s' {1..80}
printf '\n'