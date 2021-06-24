select distinct customer.customer_name,customer_street,customer_city 
from depositor,customer,account,branch where 
depositor.customer_name=customer.customer_name
and account.account_number=depositor.account_number and 
account.branch_name=branch.branch_name and branch_city=customer_city;