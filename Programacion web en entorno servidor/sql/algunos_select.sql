SELECT emp_no,first_name,birth_date 
FROM employees 
WHERE birth_date=(SELECT MIN(birth_date) FROM employees);

--OBTENER TODOS LOS EMPLEADOS DEL DEPARTAMENTO DP03 QUE ESTEN TRABAJANDO ACTUALMENTE
SELECT employees.first_name 
FROM employees, dept_emp 
WHERE employees.emp_no=dept_emp.emp_no AND 
dept_emp.dept_no='D003' AND 
dept_emp.to_date = '9999-01-01';

--OBTERNER LAS NOMINAS DE UN EMPLEADO ORDENADAS POR FECHA. (nOMBRE APELLIDO, NOMINA FROM_DATE TO_DATE)

SELECT employees.first_name,employees.last_name,salaries.salary,salaries.from_date,salaries.to_date 
FROM salaries,employees 
WHERE employees.emp_no=10001 AND employees.emp_no=salaries.emp_no 
ORDER BY salaries.from_date DESC;

--OBTENER LOS 5 MAYORES SALARIOS DE PERSONAS DISTINTAS.
SELECT MAX(salaries.salary), salaries.emp_no
FROM salaries
GROUP BY salaries.emp_no 
LIMIT 5;


--OBTENER LA LISTA DE TODOS LOS JEFES ACTUALES (NOMBRE, APELLIDO, NOMBRE DEPARTAMENTO) 
SELECT DISTINCT(dept_manager.emp_no), employees.first_name, employees.last_name, departments.dept_name
FROM dept_manager,employees, departments
WHERE dept_manager.emp_no=employees.emp_no AND dept_manager.dept_no=departments.dept_no AND dept_manager.to_date='9999-01-01';


-- obtener todos los puestos en los que ha trabajado el empleado 10010 ordenado por fecha
SELECT employees.first_name, departments.dept_name, dept_emp.from_date,dept_emp.to_date 
FROM employees,departments,dept_emp 
WHERE employees.emp_no=10010 AND employees.emp_no=dept_emp.emp_no AND dept_emp.dept_no=departments.dept_no 
ORDER BY dept_emp.from_date

--obtener todos los empleados ingenieros actuales
SELECT DISTINCT employees.first_name as nombre, employees.emp_no as num_empleado, titles.title as titulo,titles.from_date as Ingeniero_desde, titles.to_date as Ingeniero_hasta
FROM employees,dept_emp,titles 
WHERE employees.emp_no=dept_emp.emp_no AND titles.to_date='9999-01-01' AND titles.emp_no=employees.emp_no AND titles.title='Engineer'

--Suma de todos los salarios de cada empleado
SELECT SUM(salaries.salary), salaries.emp_no, employees.first_name
FROM salaries,employees
WHERE employees.emp_no=salaries.emp_no
GROUP BY salaries.emp_no

