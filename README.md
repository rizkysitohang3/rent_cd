# Simple API for RentCD 

Simple API on Rent CD case created with lumen and Test Drive Development Approach

#### App Spesification

the `product` word on the app define the CD

Function and URL Spesification :
> assume the user can show all product or specified product, then app function for borrow takes the product id

> assume the user can show all transaction, then app function for return a rent transaction by rent transaction id

> assume the user can only rent one item per time

> assume there is no authentication on the application

- show all product  `GET /products`
- show product with specified id  `GET /products/{id}`
- update product stock  `PUT /products/{id}`
- rent a product  `POST /products/{id}/rent`
- show all rent transaction `GET /transactions`
- return a product  `GET /transactions/{id}/return`

#### Database Design

> `return_date` and `price` on `rent_transactions` table will be null at first, the value will assigned when the product returned

> `returned` on `rent_transactions` define the rent status, 0 as false, 1 as true. it helps to determine which transaction is returnable

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
  
  
### App Demo 

Run the Following instruction to create Table :
- Make sure the `.env` file set correctly
- Run all command below

> composer install

![pic](https://github.com/rizkysitohang3/rent_cd/blob/master/assets/composer-install-pic.png)

>php artisan migrate:install

> php artisan migrate

> php artisan db:seed 

![pic](https://github.com/rizkysitohang3/rent_cd/blob/master/assets/creating%20database.png)

#### The database structure should be : 

![pic](https://github.com/rizkysitohang3/rent_cd/blob/master/assets/all%20tables.png)
![pic](https://github.com/rizkysitohang3/rent_cd/blob/master/assets/products%20and%20users%20table.png)
![pic](https://github.com/rizkysitohang3/rent_cd/blob/master/assets/rent%20transactions%20table.png)


#### The database seed data should be : 

![pic](https://github.com/rizkysitohang3/rent_cd/blob/master/assets/table%20data.png)

#### Testing

![pic](https://github.com/rizkysitohang3/rent_cd/blob/master/assets/all%20test%20passed.png)

### API Usage

#### Show All Product

> GET /products
  
![pic](https://github.com/rizkysitohang3/rent_cd/blob/master/assets/get-products.png)

#### Show Product by specified id

> GET /products/{id}

![pic](https://github.com/rizkysitohang3/rent_cd/blob/master/assets/get-product-by-id.png)

#### Update Product stock

> PUT /products/{id}?quantity=

Parameter : 
  - `quantity` = input new quantity of product 
  
![pic](https://github.com/rizkysitohang3/rent_cd/blob/master/assets/product-stock-update.png)
 
#### Rent a Product

> GET /products/{id}/rent?user_id=

Constraint : the product can only rented if the quantity(stock) is at least 1 or more
Parameter : 
  - `user_id` : given user id which rent the product

![pic](https://github.com/rizkysitohang3/rent_cd/blob/master/assets/rent-out-of-stock-product.png)
![pic](https://github.com/rizkysitohang3/rent_cd/blob/master/assets/rent-out-of-stock-product.png)

#### Show All Rent Transactions

> GET /transactions

![pic](https://github.com/rizkysitohang3/rent_cd/blob/master/assets/get-transactions.png)

#### Return a Rent Transaction

> GET /transactions/{id}/return

![pic](https://github.com/rizkysitohang3/rent_cd/blob/master/assets/return-success.png)
![pic](https://github.com/rizkysitohang3/rent_cd/blob/master/assets/return-transaction-failed.png)



### Docker

Requirements : 
- Docker version 19.03.5
- Docker-compose version 1.24.1

#### Guide

- Set permission to entrypoint

  `chmod +x ./entrypoint.sh`
- Run docker-compose

  `docker-compose up -d --build`
- Check your docker services

  `docker ps`




