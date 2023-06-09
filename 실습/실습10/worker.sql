CREATE TABLE worker (
	num int not null auto_increment,
	id char(20) not null,
	name char(10) not null,
	gender char(1) not null,
	age int not null,
	department char(20) not null,
	phone char(20) not null,
	address char(100),
	primary key(num)
);

insert into worker (id, name, gender, age, department, phone, address) values ('chkim', '김창훈', 'M', 28, '총무부', '010-3838-8577', '경기도 용인시');
insert into worker (id, name, gender, age, department, phone, address) values ('jhjang', '장종훈', 'M', 38, '총무부', '010-3347-7474', '서울시 강동구');
insert into worker (id, name, gender, age, department, phone, address) values ('jek98', '안달훈', 'M', 25, '인사부', '010-3744-4747', '강원도 정선군');
insert into worker (id, name, gender, age, department, phone, address) values ('lms2', '이세영', 'F', 48, '경리부', '010-3736-4784', '전라북도 전주시');
insert into worker (id, name, gender, age, department, phone, address) values ('apple3', '김소영', 'F', 52, '총무부', '010-2845-8978', '전라남도 순천시');
insert into worker (id, name, gender, age, department, phone, address) values ('sub093', '김수정', 'M', 53, '홍보부', '010-3834-1248', '경상북도 상주시');
insert into worker (id, name, gender, age, department, phone, address) values ('chulsu', '김철수', 'M', 23, '홍보부', '010-1235-3788', '경기도 오산시');
insert into worker (id, name, gender, age, department, phone, address) values ('yckim', '김영철', 'M', 32, '인사부', '010-2222-3334', '경기도 용인시');
insert into worker (id, name, gender, age, department, phone, address) values ('yerin99', '김예린', 'F', 25, '총무부', '010-7777-9999', '서울시 강서구');
insert into worker (id, name, gender, age, department, phone, address) values ('sjjung', '정수정', 'F', 35, '경리부', '010-3636-3563', '충청남도 아산시');
insert into worker (id, name, gender, age, department, phone, address) values ('tuttle7', '이예린', 'F', 21, '연구소', '010-3756-9823', '경기도 성남시');

SELECT id, name, address FROM worker WHERE age>=20 and age<=29;
SELECT name, gender, department, phone FROM worker WHERE name like '%정%';
SELECT  name, address, gender, phone FROM worker WHERE address like '%경기도%' order by age;
SELECT name, phone FROM worker WHERE department='홍보부' and gender='M';
SELECT name, phone FROM worker WHERE address like '%용인시%';
UPDATE worker set phone='010-2222-3333' WHERE name='김영철';
UPDATE worker set age='33' WHERE id='chulsu';
DELETE FROM worker WHERE id='jhjang';
DELETE FROM worker WHERE department='경리부' and name='이세영';


