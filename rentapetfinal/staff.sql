--Show all data for Staff
SELECT * FROM Staff;

--Get the number of position description for Position
SELECT COUNT(position_ID) FROM Staff WHERE position_ID = 1;

--The relationship between the two tables is the "branchID" column
SELECT Position.position_ID, Staff.staff_name
FROM Position
JOIN Staff ON Position.position_ID = Staff.position_ID;

--INSERT new row in Staff table
INSERT INTO Staff(staffID, staff_name, branchNo, position_ID)
VALUES(3278, 'Sade', 49213, 3);

--DELETE each row in the Staff table
--that has an staffID '3278'.
DELETE FROM Staff WHERE staffID = '3278';

--UPDATE branchNO to 60000 from '54220'
UPDATE Staff SET branchNO = 60000
WHERE branchNO = 54220;