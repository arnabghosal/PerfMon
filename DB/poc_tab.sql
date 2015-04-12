CREATE TABLE poc_<app>_<loc>
(
  Epoch int(11) NOT NULL,
  Node varchar(1) NOT NULL,
  Open_Appln int(11) NOT NULL,
  Search_Page int(11) NOT NULL,
  Search_Item int(11) NOT NULL,
  Open_Item int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
