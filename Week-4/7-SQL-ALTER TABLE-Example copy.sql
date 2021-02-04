--Add column to table
ALTER TABLE Customers
ADD Email VARCHAR(255);
--Drop column from table
ALTER TABLE Customers DROP COLUMN Email;