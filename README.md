# Rent CD API

Simple API on Rent CD case created with lumen and Test Drive Development Approach

#### App Spesification

the `product` word on the app define the CD

Function and URL Spesification :
> assume the user can show all product or specified product, then app function for borrow takes the product id

> assume the user can show all transaction, then app function for return takes the transaction id instead of product and user id

>assume the user can only rent one item

>assume there is no authentication on the application

- show all product  `GET /products`
- show product with specified id  `GET /products/{id}`
- update product stock  `PUT /products/{id}`
- rent a product  `POST /products/{id}/rent`
- show all rent transaction `GET /transactions`
- return a product  `GET /transactions/{id}/return`

#### Database Design

> `return_date` and `price` on `rent_transactions` table will be null at first, the value will assigned when the product returned, `return_status` on `rent_transactions` define the rent status, 0 as false, 1 as true.

![database design](https://github.com/rizkysitohang3/rent_cd/raw/master/db.PNG)

#### Testing

There will be only 2 test class : 

- `ProductTest` :
  - test for showing all products 
  - test for showing specific product by id 
  - test for update a product quantity by id 
  - test for rent a product which is has stock
  - test for rent a product which is out of stock
- `TransactionTest` :
  - test for return a transaction
  - test for show all transaction
  
  
### App Testing Demo 

Run the Following instruction to create Table :
- Make sure the `.env` file set correctly
- Run all command below

> composer install

![pic](https://github.com/rizkysitohang3/rent_cd/blob/master/composer-install-pic.png)

>php artisan migrate:install

> php artisan migrate

> php artisan db:seed 

![pic](https://github.com/rizkysitohang3/rent_cd/blob/master/creating%20database.png)

#### The database structure should be : 

![pic](https://github.com/rizkysitohang3/rent_cd/blob/master/all%20tables.png)
![pic](https://github.com/rizkysitohang3/rent_cd/blob/master/products%20and%20users%20table.png)
![pic](https://github.com/rizkysitohang3/rent_cd/blob/master/rent%20transactions%20table.png)


#### The database seed data should be : 

![pic](https://github.com/rizkysitohang3/rent_cd/blob/master/table%20data.png)

#### Test

![pic](https://github.com/rizkysitohang3/rent_cd/blob/master/all%20test%20passed.png)








