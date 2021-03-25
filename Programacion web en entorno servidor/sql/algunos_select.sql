SELECT emp_no,first_name,birth_date FROM employees WHERE birth_date=(SELECT MIN(birth_date) FROM employees);

SELECT employees.first_name FROM employees, dept_emp WHERE employees.emp_no=dept_emp.emp_no AND dept_emp.dept_no='D003' AND dept_emp.to_date LIKE '9999-01-01';

SELECT employees.first_name,employees.last_name,salaries.salary,salaries.from_date,salaries.to_date FROM salaries,employees WHERE employees.emp_no=10001 AND employees.emp_no=salaries.emp_no ORDER BY salaries.from_date DESC;

SELECT DISTINCT salaries.emp_no FROM salaries WHERE salaries.salary=(SELECT MAX(salary) FROM salaries);