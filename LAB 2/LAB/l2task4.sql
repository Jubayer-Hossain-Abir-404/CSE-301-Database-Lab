select account_no 
from account 
where balance>5000;


select customer_no, customer_name 
from customer 
where customer_city='Dhaka';


select customer_no, customer_name 
from customer 
where customer_city!='Dhaka';


select customer_name, customer_city  
from account,customer,depositor 
where depositor.a_no=account.account_no and depositor.c_no=customer.customer_no and balance>5000;
	

select customer_name, customer_city  
from account,customer,depositor 
where depositor.a_no=account.account_no and depositor.c_no=customer.customer_no and balance>5000 and customer_city!='Dhaka';
