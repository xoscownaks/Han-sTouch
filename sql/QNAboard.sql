create table qnaboard(
  qna_num int unsigned not null primary key auto_increment,
  qna_title varchar(100) NOT NULL,
  qna_content varchar(500) NOT NULL,
  qna_date datetime NOT NULL,
  qna_id varchar(50) NOT NULL,
  qna_password varchar(50) NOT NULL
)
