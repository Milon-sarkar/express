drop table if exists admins;
create table admins(
	id int(10) primary key auto_increment,
	username varchar(20) not null,
	email varchar(20),
	role_id int(10),
	password varchar (50)
);
insert into admins(username,email,password,role_id)values('milon','milon@gmal.com','12345',1);
insert into admins(username,email,password,role_id)values('samsur','samsur@gmail.com','98765',2);


insert into parcels(merchant_id,cus_name,phone,address,invoice_no,product_weight,catagory,delivery_area,Product_type,cash_amount,sell_amount,status)
            values('1','milon','01796794989','Dhaka','555','4','1','mirpur','1','1000','1000','1');



insert into general_settings(site_name,title,logo,icon,facebook_link,twitter_link,youtube_link,hotline,email,address,short_description)
            values('1','milon','01796794989','Dhaka','555','4','1','mirpur','1','1000','1000');


















