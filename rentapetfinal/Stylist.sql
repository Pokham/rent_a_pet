--Show all data for Stylist
SELECT * FROM Stylist;

--Get the number of ID for Stylist
SELECT COUNT(company_ID) FROM Stylist WHERE company_ID = 1;

--The relationship between the two tables is the "branchID" column
SELECT Stylist.firstName, stylist_COMPANY.company_name 
FROM Position
JOIN stylist_COMPANY ON Stylist.position_ID = stylist_COMPANY.position_ID;

--INSERT new row in Stylist table
INSERT INTO Stylist(groomerID, firstName, lastName, groomer_telephone, company_ID)
VALUES(907, 'Dare', 'Devil', 1112224444, 7);

--DELETE each row in the Stylist table
--that has an groomerID '3278'.
DELETE FROM Stylist WHERE groomerID = '907';

--UPDATE lastName to 'Halla' from 'Guerrera'
UPDATE Stylist SET lastName = 'Halla'
WHERE lastName = 'Guerrera';