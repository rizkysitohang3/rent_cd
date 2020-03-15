# Rent CD API

Simple API on Rent CD case created with lumen

#### App Spesification

the product on the app will define the CD

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









