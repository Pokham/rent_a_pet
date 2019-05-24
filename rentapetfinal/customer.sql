--Show all data for Customer
SELECT * FROM Customer;

--Get the number of the phone numbers
SELECT COUNT(*) FROM Customer WHERE customer_telephone;

--INSERT new row in Customer table
INSERT INTO Customer(customerID,customer_name,customer_address,customer_telephone,customer_email)
VALUES(11023, 'Wonda Girl', '10025 Fly High Street', 7133336666,'redheels@hotmail.com');

--DELETE each row in the Customer table
--that has an customerID = '11023'.
DELETE FROM Customer WHERE customerID = '11023';

--UPDATE customer_telephone to '2816661111' from '8326597088'
UPDATE Customer SET customer_telephone = 2816661111
WHERE customer_telephone = 8326597088;