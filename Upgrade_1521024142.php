<html>
<head>
<title>Upgrade PHP</title>
</head>
	<body>
		<table border='1'>
			<tr>
				<th rowspan="2">INPUT</th>
				<th rowspan="5">OUTPUT</th>
			</tr>
			<tr>
				<th>A</th>
				<th>I</th>
				<th>U</th>
				<th>E</th>
				<th>O</th>
			</tr>
			<tr>
				<td>
					<?php
					$n1="DENNIS PANDU UTOMO";
					echo $n1;
					?>
				</td>
				<td>
					<?php
					$crcterA = substr_count($n1,"A");
					echo $crcterA;
					?>
				</td>
				<td>
					<?php
					$crcterI = substr_count($n1,"I");
					echo $crcterI;
					?>
				</td>
				<td>
					<?php
					$crcterU = substr_count($n1,"U");
					echo $crcterU;
					?>
				</td>
				<td>
					<?php
					$crcterE = substr_count($n1,"E");
					echo $crcterE;
					?>
				</td>
				<td>
					<?php
					$crcterO = substr_count($n1,"O");
					echo $crcterO;
					?>
				</td>
			</tr>
		</table>
	</body>
</html>