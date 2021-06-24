alter table customer add dob date;
desc customer;
alter table customer drop column dob;
desc customer;

alter table depositor rename column account_no to a_no;
alter table depositor rename column customer_no to c_no;

desc depositor;

alter table depositor add constraint depositor_fk1 foreign key (a_no) references account(account_no);
alter table depositor add constraint depositor_fk2 foreign key (c_no) references customer(customer_no);

desc depositor;