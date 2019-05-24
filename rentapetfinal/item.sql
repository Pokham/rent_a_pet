--Show all data from Item table
SELECT * FROM Item;

--Count the number of item name with 'Friskies 7'
SELECT COUNT(item_NAME) FROM Item WHERE item_NAME = 'Friskies 7';

--INSERT new row in Item table
INSERT INTO Item( item_inventory_ID, item_NAME, item_COMPANY)
VALUES(15, 'Basics KGrainFree', NULL);

--DELETE each row in the Item table
--that has an orgID '15'.
DELETE FROM Item WHERE item_inventory_ID = '15';

--UPDATE org_name to 'Rachel Ray' from 'Basics KGrainFree'
UPDATE Item SET item_COMPANY  = 'Racheal Ray Nutrish'
WHERE item_COMPANY  = 'NC Barkowitz';