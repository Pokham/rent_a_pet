--Show all data for Organization
SELECT * FROM Organization;

--Get the number of organization in Organization table
SELECT COUNT(org_name) FROM Organization;


--INSERT new row in Organization table
INSERT INTO Organization(orgID, org_name, org_TELE)
VALUES(1007, 'SL Animal Services', 7132225555);

--DELETE each row in the Organization table
--that has an orgID '1007'.
DELETE FROM Organization WHERE orgID = '1007';

--UPDATE org_name to 'BARC' from 'Bark-Out-Loud'
UPDATE Organization SET org_name = 'BARC'
WHERE org_name = 'Bark-Out-Loud';



