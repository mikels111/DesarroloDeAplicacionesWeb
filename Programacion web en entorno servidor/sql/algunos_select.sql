SELECT emp_no,first_name,birth_date FROM employees WHERE birth_date=(SELECT MIN(birth_date) FROM employees);

--OBTENER TODOS LOS EMPLEADOS DEL DEPARTAMENTO DP03 QUE ESTEN TRABAJANDO ACTUALMENTE
SELECT employees.first_name FROM employees, dept_emp WHERE employees.emp_no=dept_emp.emp_no AND dept_emp.dept_no='D003' AND dept_emp.to_date LIKE '9999-01-01';

--OBTERNER LAS NOMINAS DE UN EMPLEADO ORDENADAS POR FECHA. (nOMBRE APELLIDO, NOMINA FROM_DATE TO_DATE)
SELECT employees.first_name,employees.last_name,salaries.salary,salaries.from_date,salaries.to_date FROM salaries,employees WHERE employees.emp_no=10001 AND employees.emp_no=salaries.emp_no ORDER BY salaries.from_date DESC;

--OBTENER LOS 5 MAYORES SALARIOS DE PERSONAS DISTINTAS.
SELECT DISTINCT(salaries.emp_no) FROM salaries WHERE salaries.salary=(SELECT MAX(salary) FROM salaries);


--OBTENER LA LISTA DE TODOS LOS JEFES ACTUALES (NOMBRE, APELLIDO, NOMBRE DEPARTAMENTO) 
SELECT DISTINCT(dept_manager.emp_no), employees.first_name, employees.last_name, departments.dept_name
FROM dept_manager,employees, departments
WHERE dept_manager.emp_no=employees.emp_no AND dept_manager.dept_no=departments.dept_no;