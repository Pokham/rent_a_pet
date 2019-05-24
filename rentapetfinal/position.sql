--Show all data for Position
SELECT * FROM Position;

--Get the number of position description for Position
SELECT COUNT(position_desc) FROM Position;

--The relationship between the two tables is the "branchID" column
SELECT Position.position_ID, Staff.staff_name 
FROM Position
JOIN Staff ON Position.position_ID = Staff.position_ID;

--INSERT new row in Position table
INSERT INTO Position(position_ID, position_desc)
VALUES(3, 'Team Lead');

--DELETE each row in the Staff table
--that has an staffID '3278'.
DELETE FROM Position WHERE position_ID = '3';

--UPDATE position_desc to 'Supervisor' from 'Associate'
UPDATE Position SET position_desc = 'Supervisor'
WHERE position_desc = 'Associate';