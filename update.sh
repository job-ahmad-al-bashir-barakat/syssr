#!/bin/bash
date
git_pull_result=$(git pull)
if [ "$git_pull_result" == "Already up to date." ]; then echo "Nothing to do .. quitting!"; exit; fi
pushd .
cd cms
/opt/cpanel/ea-php73/root/usr/bin/php artisan migrate
/opt/cpanel/ea-php73/root/usr/bin/php artisan module:seed
/opt/cpanel/ea-php73/root/usr/bin/php artisan cache:clear
/opt/cpanel/ea-php73/root/usr/bin/php artisan route:clear
/opt/cpanel/ea-php73/root/usr/bin/php artisan config:clear
/opt/cpanel/ea-php73/root/usr/bin/php artisan view:clear
/opt/cpanel/ea-php73/root/usr/bin/php -d allow_url_fopen=on /opt/cpanel/composer/bin/composer update
/opt/cpanel/ea-php73/root/usr/bin/php -d allow_url_fopen=on /opt/cpanel/composer/bin/composer dump-autoload
cd ..
cd website
/opt/cpanel/ea-php73/root/usr/bin/php artisan cache:clear
/opt/cpanel/ea-php73/root/usr/bin/php artisan route:clear
/opt/cpanel/ea-php73/root/usr/bin/php artisan config:clear
/opt/cpanel/ea-php73/root/usr/bin/php artisan view:clear
popd
printf '#%.0s' {1..80}
printf '\n'