--Show all data for Charity
SELECT * FROM Charity;

--INSERT new row in Charity table
INSERT INTO Charity(charityID, charity_name)
VALUES(666666, 'Wonda Girl');

--DELETE each row in the Customer table
--that has an customerID = '11023'.
DELETE FROM Charity WHERE charityID = '666666';

--UPDATE charity_name to 'Save-All-Pets' from 'Save-A-Pet'
UPDATE Charity SET charity_name = 'Save-All-Pets'
WHERE charity_name = 'Save-A-Pet';

