<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Welcome to CodeIgniter 4!</title>
	<meta name="description" content="The small framework with powerful features">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/png" href="/favicon.ico"/>


	<h1>welcome to my test</h1>


	<p> Si quieres probar el test de los días hábiles entre dos fechas presiona el siguiente link:
	 	<a href="http://localhost/codeigniter-plantilla/home/workdays/1653109200000/28-07-2022">Aquí</a>
	</p>
	<p> Esta función recibe dos parametros, las dos fechas, ambas pueden ser ingresadas en milisegundos o con el formato 'dd-mm-yyyy'</p><br>

	<p> Si quieres probar el test de la serie de Fibonacci presiona el siguiente link:
		<a href="http://localhost/codeigniter-plantilla/home/fibonacci/10">Aquí</a>
	</p>
	<p> El número que se pasa como parametro al final del url es el número de ciclos que va a tener la serie de Fibonacci </p><br>

	<p> Si quieres probar el test del número mas alto dentro de un arreglo presiona el siguiente link:
		<a href="http://localhost/codeigniter-plantilla/home/highestNumber">Aquí</a></p>
	

	<br><br><br><br><p>(Ahí una disculpa que todo se vea así de seco por no tener css)</p>


<script>
	function toggleMenu() {
		var menuItems = document.getElementsByClassName('menu-item');
		for (var i = 0; i < menuItems.length; i++) {
			var menuItem = menuItems[i];
			menuItem.classList.toggle("hidden");
		}
	}
</script>

<!-- -->

</body>
</html>
