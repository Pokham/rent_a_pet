


--Calculate the average donation in the Charity table
SELECT AVG(charity_donation) FROM Charity;

--To calculate the sum of donation in the Charity table
SELECT charityId, SUM(charity_donation) FROM Charity;

--Customer
SELECT COUNT(*) -ctl cliFROM Branch GROUP BY branch_city = 'Houston';

--The pending order is the order whose animat type is NULL 
--from Groomer table
SELECT COUNT(*) 'Pending orders'
FROM Groomer WHERE groomer_animaltype IS NULL;

--Get the number of the insurance number with '654321'
--in the Medical table
SELECT COUNT(insuranceNO) FROM Medical WHERE insuranceNO = 654321;


--To get the minimum salary in Staff table
SELECT MIN(staff_salary) FROM Staff;

--To get the maximum salary amount Staff table
SELECT MAX(staff_salary) FROM Staff;

--To exclude duplicates in Supplies table
SELECT COUNT(DISTINCT supply_name) FROM Supplies;
