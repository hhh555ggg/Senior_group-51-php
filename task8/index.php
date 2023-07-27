

<!-- SESSION 8 TAST  DONE DY Mustafa Mohamed-->
<?php
#######################################################################################################################
###### give me a employee firstname , departmentname , street_address , country_name , region_name for all employees ##
#######################################################################################################################
/*
SELECT
    employees.first_name,
    departments.department_name,
    locations.street_address,
    countries.country_name,
    regions.region_name
FROM
    employees
LEFT JOIN
    departments
ON
    employees.department_id = departments.department_id
LEFT JOIN
	locations 
ON
	departments.location_id = locations.location_id
LEFT JOIN 
	countries 
ON
	locations.country_id = countries.country_id
LEFT JOIN
	regions 
ON
	countries.region_id = regions.region_id;
*/
#######################################################################################################################
############################### give me a full employee and department data even they have null #######################
#######################################################################################################################
/*
SELECT 
employees.*, departments.*
FROM 
employees
RIGHT JOIN 
departments 
ON
employees.employee_id = departments.department_id;
*/

#######################################################################################################################
############################### i need to know manager employee name for Lex    #######################################
#######################################################################################################################
/*
SELECT
managers.*
FROM 
	employees as emps
JOIN employees as managers ON
emps.manager_id = managers.employee_id
WHERE emps.first_name = 'lex';
*/

#######################################################################################################################
############################### insert new employee with hire_date is the current Time ################################
#######################################################################################################################

/*
INSERT INTO 
	employees (first_name, last_name, email, hire_date, job_id ) 
VALUES
	('mustafa', 'mohamed', 'mustafa_mohamed@gmail.com', CURRENT_TIMESTAMP, 'AD_PRES')
 */

#######################################################################################################################
############################### update any employee sallary with adding 1000 to sallary ##############################
#######################################################################################################################

# UPDATE employees SET salary = salary + 1000 WHERE first_name = 'mustafa';