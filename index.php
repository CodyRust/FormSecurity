<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml">

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>Form Security</title>
		
		<style>
			#lock {
				width: 400px;
				height: 40px;
				background: #333;
				margin-bottom: 10px;
				padding: 2px;
			}

			#key {
				width: 50px;
				height: 40px;
				background: #777;
			}

			#key:hover {
				background: #888;
				cursor: pointer;
			}
		</style>

		<script type="text/javascript">

			// Simple background changing function
			function changeColor(color) {
				var key = document.getElementById('key').style.backgroundColor = color;
			}
			
			// Required function
			function move() {

				// Define variables
				var key = document.getElementById('key');
				var submit = document.getElementById('submit');

				// Change background color to indicate active key
				changeColor('orange')

				window.onmousemove = function(u) {

					// If they key is at the end of the lock: lock-width - (key + 1), unlock the submit button
					if (parseInt(key.style.marginLeft) > 349) {
						submit.style.display = 'block';
						submit.value = 'Unlocked!';
						changeColor('#777');
						key.style.marginLeft = '350px';
					} else if ((u.pageX*1 - 25) > -1) {
						key.style.marginLeft = u.pageX*1 - 25 + 'px';
					}

				}
			}

		</script>

	</head>

	<body>

		<form>

			<div id="lock">
				<div id="key" onmousedown="move()" /></div>
			</div>

			<input type="submit" id="submit" value="Locked" style="display: none;" />
		</form>

	</body>
	
</html>