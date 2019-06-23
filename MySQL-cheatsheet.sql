/*
***********SQL CONFIGURATION  ***********
folders with binaries:
c:\[wampstack folder]\php
c:\[wampstack folder]\mysql\bin

add those locations to system 'environment tables'
https://classes.codingbootcamp.cz/coding-bootcamp/spring-2019/713-path-environment-variable


*/

/*** IMPORT EXPORT ***/

/*
Import: mysql -u user_name -p database_name < dump_file.sql
Export: mysqldump -u username -p database_name --result-file=dump_file.sql
Export (only selected tables): mysqldump -u user_name -p database_name --result-file=dump_file.sql --tables table_1 table_2
*/


/*** QUERIES ***/
SELECT *
FROM `user`, `post` /*table name(s)*/

        FROM `table`
        INNER JOIN `table2`
        ON `table`.`column1` = `table2`.`column2`

        FROM `table`
        LEFT JOIN `table2`
        ON `table`.`column1` = `table2`.`column2`

        FROM `table2`
        RIGHT JOIN `table`
        ON `table2`.`column2` = `table`.`column1`

WHERE `id` = 1
        WHERE `column` LIKE 'some text where %name is j_k_b' /*%Represents multiple characters _represents one char*/
        WHERE `role` IN ('administrator', 'moderator') /*all records from table user where the value of column role is either 'administrator' or 'moderator'*/

ORDER BY `name` DESC
        ORDER BY `table`.`column1` ASC,
                `table`.`column2` DESC

LIMIT 10
        LIMIT 10, 10 /*offset where this limit begins*/


INSERT
INTO `users`
(`username`, `email`)
VALUES
('bruce', 'bruce@wayne.com'),
('alfred', 'alfred@wayne.com')


UPDATE `users`
SET `username` = 'wayne',
    `email` = 'bruce@wayne-enterprises.com' /*possible to update multiple columns */
WHERE `id` = 1 /*updates one item*/
WHERE `id` > 5 /*updates multiple items*/

DELETE
FROM `users`
WHERE `id` = 1


TRUNCATE TABLE `users`; /*empty a table completely while also resetting it's autoincrement value*/
DROP TABLE IF EXISTS `users`; /*remove a table completely*/
