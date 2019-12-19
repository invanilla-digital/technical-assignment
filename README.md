## Assignment Instructions

1. Configure Your .ENV file and run 
`php artisan db:seed` to get started

2. Create a new controller responsible for showing the first order and its items.
    1. Format it like Product title | Quantity | Price per piece | Total price
    
3. Below the table, display total price for all order items
4. Below the table, display total price for all order items + 21% VAT
5. Below the table, display VAT amount

6. You need to implement functionality, to take in account discounts that are attached to entities.
7. When displaying the table with results, add visual indicators, that particular order item or whole order has been
 discounted, and with what amount and percentage it is discounted.

There are two types of discount - one is applied on order item, another one gives a discount for the whole order.

These discounts can work at the same time and are not conflicting.

**Example without discounts:**

| Product title | Quantity | Price per piece | Total price |
|:-------------:|:--------:|:---------------:|-------------|
| Pencil        | 2        | 0.69            | 1.38        |
| Book          | 1        | 1.00            | 1.00        |
|           |         | Total:            | 2.38        |
|           |         | Total with VAT (21%):            | 2.88        |


**Now lets add 10% discount for books**

| Product title | Quantity | Price per piece | Total price |
|:-------------:|:--------:|:---------------:|-------------|
| Pencil        | 2        | 0.69            | 1.38        |
| Book          | 1        | 1.00            | 0.90        |
|           |         | Total:            | 2.28        |
|           |         | Total with VAT (21%):            | 2.76        |

**Now lets add 50% discount for whole order**

| Product title | Quantity | Price per piece | Total price |
|:-------------:|:--------:|:---------------:|-------------|
| Pencil        | 2        | 0.69            | 1.38        |
| Book          | 1        | 1.00            | 0.90        |
|           |         | Total:            | 1.14        |
|           |         | Total with VAT (21%):            | 1.38        |
