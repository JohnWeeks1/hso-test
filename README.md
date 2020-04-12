# hso-test

# Setup

1. Open the terminal and cd in to your local sites folder.

2. git clone git@github.com:JohnWeeks1/hso-test.git

3. In the terminal put in cd hso-test

4. Go to the .env file and put the correct info for your DB_CONNECTION, and create a database with the same name.

5. Run the following commands

composer install
php artisan migrate
php artisan db:seed

If you look in your database you will now have 5 tables:
- accounts
- orders
- products
- stages
- order_product <- pivot table

This is all the requests/responces available.

![Screenshot 2020-04-12 at 19 13 01](https://user-images.githubusercontent.com/17055567/79076401-bee71800-7cf1-11ea-9f1a-dc8166ca13b3.png)

