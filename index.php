<meta charset="utf-8">
<?php
	$arr = array(
		'chanel1' => array(
				'name' => 'chanel1',
				'lang' => array('uk', 'en'),
				'src' => 'http://localhost/ch001.png',
		),
		'chanel2' => array(
				'name' => 'chanel2',
				'lang' => array('uk', 'en'),
				'src' => 'http://localhost/ch002.png',
		),
		'chanel10' => array(
				'name' => 'chanel10',
				'lang' => array('uk', 'en'),
				'src' => 'http://localhost/ch010.png',
		),
	);
	
	$js_obj = json_encode($arr);
	//echo $js_obj;
	
	print "<script>
			let obj = $js_obj;			
			
			window.onload = function() {
				let table = document.createElement('table');
				table.id = 'table';
				table.border = '1';
				
				for (let key in obj) {
					let obj1 = obj[key];
					let tr = document.createElement('tr');
					let td = document.createElement('td');
					for (let key in obj1) {
						
						if (!Array.isArray(obj1[key])) {
							let td = document.createElement('td');
							td.innerHTML = obj1[key];
							console.log(obj1[key]);
							tr.appendChild(td);
						} else {
							let arr = obj1[key];
							let select = document.createElement('select');
							for (let item of arr) {
								let option = document.createElement('option');
								option.innerHTML = item;
								select.appendChild(option);
							};
							tr.appendChild(select);
						};
					};
					table.appendChild(tr);
				};
				document.body.appendChild(table);
			};
		</script>";
?>