{"filter":false,"title":"world.php","tooltip":"/world.php","undoManager":{"mark":91,"position":91,"stack":[[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":0,"column":0},"end":{"row":0,"column":10}},"text":"eonflight\""},{"action":"insertText","range":{"start":{"row":0,"column":10},"end":{"row":1,"column":0}},"text":"\n"},{"action":"insertLines","range":{"start":{"row":1,"column":0},"end":{"row":16,"column":0}},"lines":[");","mysql_select_db(\"world\");","","","$LOOKUP = $_REQUEST['lookup'];","","# execute a SQL query on the database","$results = mysql_query(\"SELECT * FROM countries WHERE name LIKE '%$LOOKUP%';\");","print $results;","# loop through each country","while ($row = mysql_fetch_array($results)) {","  ?>","  <li> <?php echo $row[\"name\"]; ?>, ruled by <?php echo $row[\"head_of_state\"]; ?> </li>","  <?php","}"]},{"action":"insertText","range":{"start":{"row":16,"column":0},"end":{"row":16,"column":2}},"text":"?>"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":16,"column":0},"end":{"row":16,"column":2}},"text":"?>"},{"action":"removeLines","range":{"start":{"row":0,"column":0},"end":{"row":16,"column":0}},"nl":"\n","lines":["eonflight\"",");","mysql_select_db(\"world\");","","","$LOOKUP = $_REQUEST['lookup'];","","# execute a SQL query on the database","$results = mysql_query(\"SELECT * FROM countries WHERE name LIKE '%$LOOKUP%';\");","print $results;","# loop through each country","while ($row = mysql_fetch_array($results)) {","  ?>","  <li> <?php echo $row[\"name\"]; ?>, ruled by <?php echo $row[\"head_of_state\"]; ?> </li>","  <?php","}"]}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":0,"column":0},"end":{"row":0,"column":5}},"text":"<?php"},{"action":"insertText","range":{"start":{"row":0,"column":5},"end":{"row":1,"column":0}},"text":"\n"},{"action":"insertLines","range":{"start":{"row":1,"column":0},"end":{"row":20,"column":0}},"lines":["mysql_connect(","\"127.5.104.129\",","\"pigeonflight\"",");","mysql_select_db(\"world\");","","","$LOOKUP = $_REQUEST['lookup'];","","# execute a SQL query on the database","$results = mysql_query(\"SELECT * FROM countries WHERE name LIKE '%$LOOKUP%';\");","print $results;","# loop through each country","while ($row = mysql_fetch_array($results)) {","  ?>","  <li> <?php echo $row[\"name\"]; ?>, ruled by <?php echo $row[\"head_of_state\"]; ?> </li>","  <?php","}","?>"]}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":2,"column":13},"end":{"row":2,"column":14}},"text":"9"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":2,"column":12},"end":{"row":2,"column":13}},"text":"2"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":2,"column":11},"end":{"row":2,"column":12}},"text":"1"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":2,"column":11},"end":{"row":2,"column":12}},"text":"0"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":2,"column":9},"end":{"row":2,"column":10}},"text":"4"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":2,"column":8},"end":{"row":2,"column":9}},"text":"0"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":2,"column":7},"end":{"row":2,"column":8}},"text":"1"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":2,"column":7},"end":{"row":2,"column":8}},"text":"0"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":2,"column":5},"end":{"row":2,"column":6}},"text":"5"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":2,"column":5},"end":{"row":2,"column":6}},"text":"0"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":2,"column":3},"end":{"row":2,"column":4}},"text":"7"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":2,"column":2},"end":{"row":2,"column":3}},"text":"2"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":2,"column":1},"end":{"row":2,"column":2}},"text":"1"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":2,"column":1},"end":{"row":2,"column":2}},"text":"0"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":3,"column":12},"end":{"row":3,"column":13}},"text":"t"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":3,"column":11},"end":{"row":3,"column":12}},"text":"h"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":3,"column":10},"end":{"row":3,"column":11}},"text":"g"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":3,"column":9},"end":{"row":3,"column":10}},"text":"i"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":3,"column":8},"end":{"row":3,"column":9}},"text":"l"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":3,"column":7},"end":{"row":3,"column":8}},"text":"f"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":3,"column":6},"end":{"row":3,"column":7}},"text":"n"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":3,"column":5},"end":{"row":3,"column":6}},"text":"o"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":3,"column":4},"end":{"row":3,"column":5}},"text":"e"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":3,"column":3},"end":{"row":3,"column":4}},"text":"g"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":3,"column":2},"end":{"row":3,"column":3}},"text":"i"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":3,"column":1},"end":{"row":3,"column":2}},"text":"p"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":3,"column":1},"end":{"row":3,"column":2}},"text":"u"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":3,"column":2},"end":{"row":3,"column":3}},"text":"b"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":3,"column":3},"end":{"row":3,"column":4}},"text":"u"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":3,"column":4},"end":{"row":3,"column":5}},"text":"n"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":3,"column":5},"end":{"row":3,"column":6}},"text":"t"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":3,"column":6},"end":{"row":3,"column":7}},"text":"u"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":11,"column":79},"end":{"row":11,"column":80}},"text":"q"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":11,"column":79},"end":{"row":11,"column":80}},"text":"q"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":8,"column":30},"end":{"row":8,"column":31}},"text":"s"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":8,"column":31},"end":{"row":8,"column":32}},"text":"e"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":8,"column":32},"end":{"row":8,"column":33}},"text":"l"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":8,"column":33},"end":{"row":8,"column":34}},"text":"e"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":2,"column":8},"end":{"row":2,"column":9}},"text":"\""}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":2,"column":7},"end":{"row":2,"column":8}},"text":"0"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":2,"column":6},"end":{"row":2,"column":7}},"text":"."}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":2,"column":5},"end":{"row":2,"column":6}},"text":"0"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":2,"column":4},"end":{"row":2,"column":5}},"text":"."}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":2,"column":3},"end":{"row":2,"column":4}},"text":"0"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":2,"column":2},"end":{"row":2,"column":3}},"text":"."}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":2,"column":1},"end":{"row":2,"column":2}},"text":"0"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":2,"column":1},"end":{"row":2,"column":2}},"text":"l"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":2,"column":2},"end":{"row":2,"column":3}},"text":"o"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":2,"column":3},"end":{"row":2,"column":4}},"text":"c"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":2,"column":4},"end":{"row":2,"column":5}},"text":"a"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":2,"column":5},"end":{"row":2,"column":6}},"text":"l"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":2,"column":6},"end":{"row":2,"column":7}},"text":"h"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":2,"column":7},"end":{"row":2,"column":8}},"text":"o"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":2,"column":8},"end":{"row":2,"column":9}},"text":"s"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":2,"column":9},"end":{"row":2,"column":10}},"text":"t"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":2,"column":10},"end":{"row":2,"column":11}},"text":"\""}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":8,"column":33},"end":{"row":8,"column":34}},"text":"e"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":8,"column":32},"end":{"row":8,"column":33}},"text":"l"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":8,"column":31},"end":{"row":8,"column":32}},"text":"e"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":8,"column":30},"end":{"row":8,"column":31}},"text":"s"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":2,"column":9},"end":{"row":2,"column":10}},"text":"t"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":2,"column":8},"end":{"row":2,"column":9}},"text":"s"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":2,"column":7},"end":{"row":2,"column":8}},"text":"o"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":2,"column":6},"end":{"row":2,"column":7}},"text":"h"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":2,"column":5},"end":{"row":2,"column":6}},"text":"l"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":2,"column":4},"end":{"row":2,"column":5}},"text":"a"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":2,"column":3},"end":{"row":2,"column":4}},"text":"c"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":2,"column":2},"end":{"row":2,"column":3}},"text":"o"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":2,"column":1},"end":{"row":2,"column":2}},"text":"l"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":2,"column":1},"end":{"row":2,"column":2}},"text":"0"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":2,"column":2},"end":{"row":2,"column":3}},"text":"."}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":2,"column":3},"end":{"row":2,"column":4}},"text":"0"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":2,"column":4},"end":{"row":2,"column":5}},"text":"."}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":2,"column":5},"end":{"row":2,"column":6}},"text":"0"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":2,"column":6},"end":{"row":2,"column":7}},"text":"."}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":2,"column":7},"end":{"row":2,"column":8}},"text":"0"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":3,"column":1},"end":{"row":3,"column":7}},"text":"ubuntu"},{"action":"insertText","range":{"start":{"row":3,"column":1},"end":{"row":3,"column":2}},"text":"n"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":3,"column":2},"end":{"row":3,"column":3}},"text":"o"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":3,"column":3},"end":{"row":3,"column":4}},"text":"m"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":3,"column":4},"end":{"row":3,"column":5}},"text":"e"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":3,"column":5},"end":{"row":3,"column":6}},"text":"d"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":3,"column":6},"end":{"row":3,"column":7}},"text":"e"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":3,"column":7},"end":{"row":3,"column":8}},"text":"u"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":3,"column":8},"end":{"row":3,"column":9}},"text":"s"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":3,"column":9},"end":{"row":3,"column":10}},"text":"u"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":3,"column":10},"end":{"row":3,"column":11}},"text":"a"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":3,"column":11},"end":{"row":3,"column":12}},"text":"r"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":3,"column":12},"end":{"row":3,"column":13}},"text":"i"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":3,"column":13},"end":{"row":3,"column":14}},"text":"o"}]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":4,"column":2},"end":{"row":4,"column":2},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1416562674000,"hash":"93387f8529572983ddb612d1e572f214b29db552"}