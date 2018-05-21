CREATE DATABASE art2 CHARACTER SET utf8 COLLATE utf8_general_ci;

CREATE TABLE art2.services (
    id int NOT NULL AUTO_INCREMENT,
    title varchar(100) NOT NULL,
    description text NOT NULL,
    length int(1) NOT NULL,
    image varchar(100) NOT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE art2.information (
    id int(11) NOT NULL AUTO_INCREMENT,
    title varchar(100) NOT NULL,
    description_short text NOT NULL,
    description text NOT NULL,
    image varchar(100) NOT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE art2.feedback (
    id int(11) NOT NULL AUTO_INCREMENT,
    name varchar(50) NOT NULL,
    patronymic varchar(50) NOT NULL,
    surname varchar(50) NOT NULL,
    mail varchar(50) NOT NULL,
    phone varchar(11) NOT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE art2.catalog (
    id int(11) NOT NULL AUTO_INCREMENT,
    image varchar(100) NOT NULL,
    PRIMARY KEY (id)
);

INSERT INTO art2.catalog(image) VALUES('galery1.jpg');
INSERT INTO art2.catalog(image) VALUES('galery2.jpg');
INSERT INTO art2.catalog(image) VALUES('galery3.jpg');
INSERT INTO art2.catalog(image) VALUES('galery4.jpg');
INSERT INTO art2.catalog(image) VALUES('galery5.jpg');
INSERT INTO art2.catalog(image) VALUES('galery6.jpg');
INSERT INTO art2.catalog(image) VALUES('galery7.jpg');
INSERT INTO art2.catalog(image) VALUES('galery8.jpg');
INSERT INTO art2.catalog(image) VALUES('galery9.jpg');
INSERT INTO art2.catalog(image) VALUES('galery10.jpg');
INSERT INTO art2.catalog(image) VALUES('galery11.jpg');
INSERT INTO art2.catalog(image) VALUES('galery12.jpg');
INSERT INTO art2.catalog(image) VALUES('galery13.jpg');
INSERT INTO art2.catalog(image) VALUES('galery14.jpg');
INSERT INTO art2.catalog(image) VALUES('galery17.jpg');
INSERT INTO art2.catalog(image) VALUES('galery16.jpg');

INSERT INTO art2.services(title, description, length, image) 
VALUES('АКАДЕМИЧЕСКИЙ РИСУНОК',
'Рассчитан для желающих изучать анатомию, базовые принципы создания светотени, линейную перспективу, академическую штриховку и иные азы изобразительного искусства. Нацелен на подготовку к поступлению в художественные училища, а также для улучшения общих навыков рисования.',
'4',
'akadem2.jpg');

INSERT INTO art2.services(title, description, length, image) 
VALUES('АКВАРЕЛЬ ДЛЯ НАЧИНАЮЩИХ',
'Программа курса основана на приобритении и оттачивании навыков работы с таким сложным материалом как акварель. В процессе обучения вы научитесь рисовать объемные фигуры, создавать удивительные натюрморты, портреты, пейзажи, изучите тонкости изображения прозрачных предметов.',
'2',
'watercolor1.jpg');

INSERT INTO art2.services(title, description, length, image) 
VALUES('СКЕТЧИНГ',
'Искусство быстрого рисунка приобрело свою популярность сравнительно недавно, однако с каждым годом всё больше художников предпочитают в своих работах использовать именно эту технику. Почему? Потому что это быстро, легко и красиво! Всё, что вам понадобится - это маркеры, блокнот и ручка. Не верите? Попробуйте сами :)',
'2',
'sketch2.jpg');

INSERT INTO art2.services(title, description, length, image) 
VALUES('МАСЛЯНАЯ ЖИВОПИСЬ',
'Классическая масляная живопись зародилась в далекой древности, однако до сих пор не утратила своей привлекательности. Этот курс для тех, кто хочет создавать шедевры, сравнимые с работами известных художников. Поверьте, это совсем не сложно! Однако, для создания шедевров всё-таки требуется усидчивость.',
'4',
'oilp.jpg');

INSERT INTO art2.information(title, description_short, description, image) 
VALUES('Ирвинг Стоун - "Муки и радости Микеланджело Буонаротти"',
'Величайший скульптор, художник и поэт эпохи Возрождения. Создатель легендарного "Давида" и фресок Сикстинской капеллы. Он познал и прижизненную славу, и богатство, и зависть врагов, и ненависть ханжей и религиозных фанатиков. Его личная жизнь считалась скандальной и непристойной. Его творчество порой шокировало и возмущало. Его благополучие полностью зависело от капризов "князей Церкви", которые были его заказчиками...',
'Величайший скульптор, художник и поэт эпохи Возрождения. Создатель легендарного "Давида" и фресок Сикстинской капеллы. Он познал и прижизненную славу, и богатство, и зависть врагов, и ненависть ханжей и религиозных фанатиков. Его личная жизнь считалась скандальной и непристойной. Его творчество порой шокировало и возмущало. Его благополучие полностью зависело от капризов "князей Церкви", которые были его заказчиками... Почему Микеланджело постоянно существовал на грани - между творчеством и саморазрушением? И наконец, что давало ему силы вновь и вновь бросать вызов судьбе?',
'Mikki.jpg');