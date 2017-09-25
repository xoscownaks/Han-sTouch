create table goods(
	menu_name varchar(100) NOT NULL,
	menu_img varchar(500) NOT NULL,
  menu_price int NOT NULL,
	menu_balance int NOT NULL,
  menu_calorie varchar(100) NOT NULL,
  menu_explain varchar(500)
);


INSERT INTO goods(menu_name, menu_img, menu_price, menu_balance, menu_calorie, menu_explain)
VALUES("coke","src/coke.png",1000,100,"200kcal","가장 맛있는 콜라");
INSERT INTO goods(menu_name, menu_img, menu_price, menu_balance, menu_calorie, menu_explain)
VALUES("sprite","src/sprite.png",1000,100,"200kcal","스프라이트가 얼큰하네");
INSERT INTO goods(menu_name, menu_img, menu_price, menu_balance, menu_calorie, menu_explain)
VALUES("burger1","src/Mainburger1.png",4000,100,"1500kcal","인생에 한번 볼까 말까 한 햄버거");
INSERT INTO goods(menu_name, menu_img, menu_price, menu_balance, menu_calorie, menu_explain)
VALUES("burger2","src/Mainburger2.png",4000,100,"2000kcal","두명 먹다 네명죽어도 모르는 맛");
INSERT INTO goods(menu_name, menu_img, menu_price, menu_balance, menu_calorie, menu_explain)
VALUES("burger3","src/Mainburger3.png",4000,100,"1800kcal","이 맛 모르면 간첩");
INSERT INTO goods(menu_name, menu_img, menu_price, menu_balance, menu_calorie, menu_explain)
VALUES("burger4","src/Mainburger4.png",4000,100,"1600kcal","죽기 전에 먹어야 할 버거");
