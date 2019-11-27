# Another answers of test work #
2). 3 rows, 1 NULL value

3).
 
 a)`SELECT customer.id ,customer.name , customer.city , salesman.id as salesman_id, salesman.name as salesman_name
     FROM customer
     INNER JOIN salesman ON  salesman.id= customer.Salesman_id 
     WHERE salesman.commission
     BETWEEN 0.12 AND 0.14`
     
 b) `SELECT salesman.id , salesman.name , salesman.city , salesman.commission
     FROM customer
     RIGHT JOIN salesman ON  salesman.id= customer.Salesman_id 
     WHERE customer.Salesman_id is null`
     
4). 3;

5). 4;

6). 3;

7). 3;