# Test Bookstore App

This is an app you can use to practice you automation testing skills (for example with Selenium). It's build on Wordpress so you're going to need both Wordpress files and mysql database (populated with data).

You can deploy it locally using Docker. Just use docker-compose.yml and run docker-compose command to have your test web app set up in seconds.

## Useful info
### Admin panel
If you want to login to Wordpress admin panel (localhost:8080/wp-admin), use admin/admin.
### phpMyAdmin
To login to phpMyAdmin (localhost:8000), use wordpress/wordpress.
### Testing Cards
Payments are in test mode and set up with Stripe. You can use Stripe test cards to perform a payment. You'll find them [here](https://stripe.com/docs/testing#cards).
### REST API
REST API keys for API testing (read/write):
Consumer key: ck_a13ac568ad5104c9c8906e20447f3f0672656d60
Consumer secret: cs_d2e37250406cf283259737c247095bdd867549bc
[REST API documentation for Woocommerce](https://woocommerce.github.io/woocommerce-rest-api-docs/)
### Mobile
If you want to access the app from your mobile device in the same network, you need to change URL settings of the app to the internal IP and port 8080. First, check what is the internal IP of the host. Then go to [http://localhost:8080/wp-admin/options-general.php](http://localhost:8080/wp-admin/options-general.php) (admin/admin) and change WordPress Address (URL) and Site Address (URL) to http://your_internal_ip:80808. 

Keep in mind that your internal IP might change later. In that case you won't be able to reach the app anymore. To fix it open phpMyAdmin (http://localhost:8000). login with wordpress/wordpress and click on "wordpress" database on the left. Next choose wp_options table and change "siteurl" and "home" back to http://localhost:8080 or to your new internal ip and a port number. Then go back to [http://localhost:8080/wp-admin/options-general.php](http://localhost:8080/wp-admin/options-general.php) and click "Save" button to make sure all the URL in the app were updated.
