--The relationship between the two tables is the "branchID" column
SELECT Charity.charity_name, Branch.branch_telephone, Charity.charity_donation
FROM Branch INNER JOIN Charity ON Branch.branchID = Charity.branchID;

--The relationship between the two tables is the "branchID" column
SELECT Branch.branchID, Branch.branch_address, Supplies.supply_inv_no
FROM Supplies INNER JOIN Branch ON Branch.branchID = Supplies.branchID;

--The relationship between the two tables is the "branchID" column (empty set)
SELECT Groomer.companyName, Groomer.firstName, Groomer.lastName, Branch.branchID
FROM Groomer
INNER JOIN Branch ON Branch.branchID = Groomer.branchID;

--The relationship between the two tables is the "branchID" column
SELECT Organization.org_name, Branch.branchID, Branch.branch_address
FROM Organization
INNER JOIN Branch ON Branch.branchID = Organization.branchID;

--The relationship between the two tables is the "branchID" column
SELECT Position.position_ID, Staff.customer_address, Branch.branchID, Branch.branch_address
FROM Customer
INNER JOIN Branch ON Branch.branchID = Customer.branchID;

--
SELECT Medical.doc_name, Branch.branch_address, Branch.branchID
FROM Medical
INNER JOIN Branch ON Branch.branchID = Medical.branchID;

--
SELECT Staff.staffID, Staff.staff_name, Branch.branchID, Branch.branch_address
FROM Staff
INNER JOIN Branch ON Branch.branchID = Staff.branchID;

--


--
SELECT Branch.branchID, Branch.branch_address, Supplies.supply_er, Supplies.supply_item_no
FROM Branch 
INNER JOIN Supplies ON Branch.branchID = Supplies.branchID;




