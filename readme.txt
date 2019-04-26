Para executar este projeto é necessário seguir os seguintes passos:

1.Banco de dados
- Possuir um servidor local Xampp.7.1 instalado;
- Crie um banco de dados no phpmyadmin (localhost/phpmyadmin) com o nome "prodigious_database";
- Exporte o arquivo "prodigious_database.sql"

2. Projeto
Copiar a pasta "prodigious_project" para o diretório "C:\xampp\htdocs\"
Abrir um terminal CMD ou PowerShell e executar os comandos:
	a) cd ../..
	b) cd xampp/htdocs/prodigious_project/
	c) php artisan serve

3. Navegação
Abra o navegador e comece a navegar por "http://127.0.0.1:8000/crud"