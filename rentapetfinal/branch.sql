--Show all data for Branch
SELECT * FROM Branch;

--Get the number of city with name 'Houston'
SELECT COUNT(*) FROM Branch GROUP BY branch_city = 'Houston';


--INSERT new row in Branch table
INSERT INTO Branch(branchID,branch_address,branch_city, branch_zip,branch_telephone)
VALUES(54225, '6666 Money Tree', 'Sugar Land', 77079, 2816669999);

--DELETE each row in the Branch table
--that has an branchID = '54225'.
DELETE FROM Branch WHERE branchID = '54225';

--UPDATE branch_city to 'Sugar Land' from 'Houston'
UPDATE Branch SET branch_city = 'Sugar Land'
WHERE branch_city = 'Houston';
