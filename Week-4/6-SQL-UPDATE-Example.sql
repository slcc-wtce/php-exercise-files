--Update with WHERE clause
UPDATE Customers
SET CustomerName = 'Jane Doe'
WHERE CustomerID = 2;
--Update without WHERE clause
UPDATE Customers
SET CustomerName = 'Jane Doe';