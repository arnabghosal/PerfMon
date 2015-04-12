CREATE VIEW vu_<app>_<loc> AS 
select 
Epoch AS Epoch,
Node AS Node,
Open_Appln AS Open_Appln,
Search_Page AS Search_Page,
Search_Item AS Search_Item,
Open_Item AS Open_Item,
extract(year from from_unixtime(Epoch)) AS Year,
extract(month from from_unixtime(Epoch)) AS Month,
extract(day from from_unixtime(Epoch)) AS Day,
extract(hour from from_unixtime(Epoch)) AS Hour,
extract(minute from from_unixtime(Epoch)) AS Min 
from poc_<app>_<loc>;
