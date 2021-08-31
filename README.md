Step 1<br>
.env<br>
BROADCAST_DRIVER=redis      
QUEUE_CONNECTION=redis
MIX_APP_URL="${APP_URL}"

Step 2 <br>
php artisan make:event ...

Step 3<br>
composer require predis/predis
npm install --save socket.io-client laravel-echo
npm install
database.php redis->options->prefix --->> comment line

Step 4<br>
npm install -g laravel-echo-server
laravel-echo-server init
