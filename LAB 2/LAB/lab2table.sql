create table department
(
	dept_name varchar2(15) NOT NULL,
	building varchar2(30) NOT NULL,
	budget number NOT NULL,
	constraint PK primary key(dept_name),
	check(budget>0)
);
