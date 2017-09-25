create table board(
	board_num int unsigned not null primary key auto_increment,
	board_title varchar(70) not null,
	board_content text not null,
	board_date datetime not null,
	board_id varchar(20) not null,
	board_password varchar(20) not null,
	board_file VARCHAR(200)
)

