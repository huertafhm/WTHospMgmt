create table appointment(
Doctor_ID  varchar(16) 
Patient_ID  varchar(16) 
date_time  varchar(16) 
Room  varchar(16) 
primary key (Doctor_ID, Patient_ID)
);

create table user_account(
ID varchar(16) not null primary key,
User_Password char(40) not null,
email varchar(30) not null);

insert into appointment (Doctor_ID, Patient_ID, date_time,Room)  
             values ('bob', 'jack', 'aug 13,30','a101'); 
             
insert into user_account (ID, User_Password, email)  
             values ('bob', SHA1('password'), '253931893@qq.com'); 