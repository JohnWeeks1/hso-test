# hso-test

# Setup

1. Open the terminal and cd in to your local sites folder.

2. git clone git@github.com:JohnWeeks1/hso-test.git

3. In the terminal put in cd hso-test

4. Go to the .env file and put the correct info for your DB_CONNECTION, and create a database with the same name.

5. Run the following commands

- composer install
- php artisan migrate
- php artisan db:seed

If you look in your database you will now have 5 tables:
- accounts
- orders
- products
- stages
- order_product <- pivot table

This is all the api calls available.

![Screenshot 2020-04-12 at 19 13 01](https://user-images.githubusercontent.com/17055567/79076401-bee71800-7cf1-11ea-9f1a-dc8166ca13b3.png)

6. Here are examples of the api usage.

AccountCollection.

![Screenshot 2020-04-12 at 20 25 33](https://user-images.githubusercontent.com/17055567/79077866-43d72f00-7cfc-11ea-9dda-13f253945749.png)

OrderCollection.

![Screenshot 2020-04-12 at 20 25 58](https://user-images.githubusercontent.com/17055567/79077910-9a446d80-7cfc-11ea-95e9-c03b2c89c7ed.png)

ProductCollection.

![Screenshot 2020-04-12 at 20 26 15](https://user-images.githubusercontent.com/17055567/79077926-ba742c80-7cfc-11ea-83c1-c191464e0fed.png)

StageCollection.

![Screenshot 2020-04-12 at 20 26 28](https://user-images.githubusercontent.com/17055567/79077939-cd86fc80-7cfc-11ea-8de9-956f0e9ed0e3.png)

AccountShow.

![Screenshot 2020-04-12 at 20 26 38](https://user-images.githubusercontent.com/17055567/79077948-ded00900-7cfc-11ea-8fd9-0d27ee59a173.png)

StageShow.

![Screenshot 2020-04-12 at 20 26 52](https://user-images.githubusercontent.com/17055567/79077958-ea233480-7cfc-11ea-929e-ec9f977104ac.png)

OrderShow.

![Screenshot 2020-04-12 at 20 27 11](https://user-images.githubusercontent.com/17055567/79077977-08893000-7cfd-11ea-9333-91abfee80acf.png)

ProductShow.

![Screenshot 2020-04-12 at 20 27 20](https://user-images.githubusercontent.com/17055567/79077985-19d23c80-7cfd-11ea-840c-77534a2a5956.png)

OrderStore.

![Screenshot 2020-04-12 at 20 27 38](https://user-images.githubusercontent.com/17055567/79078001-39696500-7cfd-11ea-8f0a-1e0da569913d.png)

OrderUpdate.

![Screenshot 2020-04-12 at 20 27 54](https://user-images.githubusercontent.com/17055567/79078016-4be39e80-7cfd-11ea-9fa0-c7eb6399bc8b.png)

OrderDestroy.
![Screenshot 2020-04-12 at 20 28 25](https://user-images.githubusercontent.com/17055567/79078025-5736ca00-7cfd-11ea-912e-29efbce4b4c1.png)

If you have any questions just give me a call.

Enjoy!


