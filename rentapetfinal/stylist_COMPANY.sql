--Show all data for stylist_COMPANY
SELECT * FROM stylist_COMPANY;

--Get the number of compay's names 
SELECT COUNT(company_name) FROM stylist_COMPANY;

--INSERT
INSERT INTO stylist_COMPANY(company_ID, company_name)
VALUES(7, 'Purrtastic');

--DELETE each row in the stylist_COMPANY table
--that has an company id '7'.
DELETE FROM stylist_COMPANY WHERE company_ID = '7';

--UPDATE doc_name to 'Hairy Cutter' from 'Private'
UPDATE stylist_COMPANY SET company_ID = 7
WHERE company_ID = 6;