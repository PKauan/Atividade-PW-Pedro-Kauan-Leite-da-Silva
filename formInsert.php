
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	
	<title>Insert</title>
       <link rel="stylesheet" type="text/css" href="css/estilo.css">

</head>
<body>
   <main>
   <header>Cadastrar dados dos clientes</header>
   <section>
   	<form action="insert.php" method="post">
   		<p>Nome: <input type="text" name="nome"></p>
         <p>Email: <input type="email" name="email"></p>
         <p>Idade: <input type="number" name="idade"></p>

        <button type="submit"> Inserir dados</button>
   	</form>
   </section>
   </main>
</body>
</html>