# Laravel Horizon + Nexmo Demo

## Configuration

- Configure your Nexmo credentials and phone number in `config/services.php`.
- Configure your personal phone number in the `AppServiceProvider`.

## Running The Application

Start Horizon using the `horizon` Artisan command:

`php artisan horizon`

Dispatch 10 slow jobs onto the queue by accessing the `/queue` route in your browser:

`http://localhost/queue/10`

Instruct Horizon to take a snapshot of the current metrics:

`php artisan snapshot`

Dispatch 500 slow jobs onto the queue to trigger the notification based on queue wait time:

`http://localhost/queue/500`
