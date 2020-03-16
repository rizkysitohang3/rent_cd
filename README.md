# Rent CD API

Simple API on Rent CD case created with lumen

#### App Spesification

the `product` word on the app define the CD

Function and URL Spesification :
> assume the user can show all product or specified product, then app function for borrow takes the product id
> assume the user can show all transaction, then app function for return takes the transaction id instead of product and user id
> there is no authentication on the application

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
  - test for rent a product
- `TransactionTest` :
  - test for return a transaction
  - test for show all transaction
  







