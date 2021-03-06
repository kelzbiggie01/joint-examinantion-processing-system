create database joint;

use joint;

create table school(
regno varchar(100) not null primary key,
schoolname varchar(100) not null,
schooltype varchar(100) not null
);

create table subject(
subcode integer(100) not null primary key,
subname varchar(100) not null
);

create table student(
sid integer(5) not null primary key,
sch_id varchar(100) not null,
f_name varchar(100) not null,
m_name varchar(100) null,
l_name varchar(100) not null,
sex char(1) not null,
foreign key (sch_id) references school(regno)
on delete cascade on update cascade
);

create table users(
sno integer(100) auto_increment primary key,
sch_id varchar(100) not null,
f_name varchar(100) not null,
m_name varchar(100) null,
l_name varchar(100) not null,
sex char(1) not null,
username varchar(50) not null unique,
password varchar(50) not null,
role varchar(100) not null,
foreign key (sch_id) references school(regno)
on delete cascade on update cascade
);

create table scores(
sid integer(5) not null,
subcode integer(100) not null,
score integer(5) not null,
foreign key (sid) references student(sid)
on delete cascade on update cascade,
foreign key (subcode) references subject(subcode)
on delete cascade on update cascade
);

create table grade(
id int(15) not null,
gradename varchar(100) not null,
start_value int(10) not null,
end_value int(10) not null,
grade_point varchar(100) not null,
comments varchar(100) not null,
primary key(id)
);