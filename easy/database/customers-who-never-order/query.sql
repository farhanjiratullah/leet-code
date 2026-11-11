select c.name as "Customers" from customers as c 
where not exists 
(select 1 from orders as o where o.customerid = c.id);