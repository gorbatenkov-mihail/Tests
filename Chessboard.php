<!DOCTYPE html>
<html>
	<head>
		<title>Chessboard</title>
		<meta charset="utf-8">
	</head>
	<body>
		<table width="270" height="270" cellpadding="0" cellspacing="0" border="1">
			<?php
			for ($row = 1; $row <= 8; $row += 1){
				echo "<tr>";
					for ($cell = 1; $cell <= 8; $cell += 1){
						if ($row % 2 !== 0 && $cell === 1){
							$color = "\"white\"";
						} elseif ($row % 2 === 0 && $cell === 1){
							$color = "\"black\"";
						} elseif ($color === "\"white\"") {
							$color = "\"black\"";
						} else {
							$color = "\"white\"";
						}
						echo "<td width=30 height=30 bgcolor={$color}></td>";
					}
				echo "</tr>";
			}
			?>
		</table>
	</body>
</html>
