CREATE DATABASE company;

use company;

CREATE TABLE employees (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL,
    position VARCHAR(50),
    salary DECIMAL(10, 2) NOT NULL,
    hire_date DATE DEFAULT CURRENT_DATE
);

INSERT INTO employees(name, position, salary) 
    VALUES ('John Doe', 'Manager', 500000.00), 
        ('Jane Smith', 'Developer', 40000.00), 
        ('Mike Johnson', 'Salesperson', 30000.00);

UPDATE employees SET salary = 60000.00 WHERE id = 1;
    

SELECT * FROM employees WHERE salary > 50000.00 ORDER BY hire_date DESC;

CREATE VIEW high_earning_employees AS SELECT * FROM employees WHERE salary > 70000.00;