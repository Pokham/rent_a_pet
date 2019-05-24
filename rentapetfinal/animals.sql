--Show all data for Animals
SELECT * FROM Animals;

--Aggregate:
--Get the number of animals in the Animals table
SELECT COUNT(animal_type) FROM Animals
WHERE animal_type = 'cat';


--INSERT new row in Animals table
INSERT INTO Animals(animalID,animal_type,animal_name, branch_ID)
VALUES(150016, 'rabbit', 'Hairy E Bottom', NULL);

--DELETE each row in the Animals table
--that has an animalID = '150016'.
DELETE FROM Animals WHERE animalID = '150016';

--UPDATE animal_name to 'Hairy E Bottom' from 'Flopsy'
UPDATE Animals SET animal_name = 'Hairy E Bottom'
WHERE animal_name = 'Flopsy';

