# Test Bookstore App

This is an app you can use to practice you automation testing skills (for example with Selenium). It's build on Wordpress so you're going to need both Wordpress files and mysql database (populated with data).

You can deploy it locally using Docker. Just use docker-compose.yml and run docker-compose command to have your test web app set up in seconds.

## Useful info
### Admin panel
If you want to login to Wordpress admin panel (localhost:8080/wp-admin), use admin/admin.
### phpMyAdmin
To login to phpMyAdmin (localhost:8000), use wordpress/wordpress.
### Testing Cards
Payments are in test mode and set up with Stripe. You can use Stripe test cards to perform payment. You'll find them [here](https://stripe.com/docs/testing#cards).