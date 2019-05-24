--Show all data for Veterinarian
SELECT * FROM Veterinarian;

--Get the number of doctors 
SELECT COUNT(doc_name) FROM Veterinarian;

--INSERT values for medicalID, doc_name, and doc_email
--in Vterinarian table.
INSERT INTO Veterinarian(medicalID, doc_name, doc_email)
VALUES(4009, 'Odin', 'americanGod@gmail.com');

--DELETE each row in the stylist_COMPANY table
--that has an company id '7'.
DELETE FROM Veterinarian WHERE medicalID = '4009';

--UPDATE doc_name to Carol Burnett from Carol Danvers
UPDATE Veterinarian SET doc_name = 'Carol Burnett'
WHERE doc_name = 'Carol Danvers';