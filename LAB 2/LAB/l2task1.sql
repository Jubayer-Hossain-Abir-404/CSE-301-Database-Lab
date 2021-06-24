create table account
(
	account_no char(5),
	balance number not null,
	check (balance>=0),
	constraint apk primary key(account_no)
);
create table customer
(
	customer_no char(5),
	customer_name varchar2(20) not null,
	customer_city varchar2(10),
	constraint cpk primary key(customer_no)
);

create table depositor
(
	account_no char(5),
	customer_no char(5),
	constraint dpk primary key(account_no,customer_no)
);