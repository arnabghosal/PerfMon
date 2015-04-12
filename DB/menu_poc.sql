CREATE TABLE menu_poc
(
  Epoch int(11) NOT NULL,
  App varchar(3) NOT NULL,
  Loc varchar(3) NOT NULL,
  Node varchar(1) NOT NULL,
  Open_Appln int(11) NOT NULL,
  Search_Page int(11) NOT NULL,
  Search_Item int(11) NOT NULL,
  Open_Item int(11) NOT NULL,
  Id int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (Id)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;