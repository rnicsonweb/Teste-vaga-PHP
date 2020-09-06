<p align="center">Projeto desenvolvido para teste por Richard Nicson.</p>

## Instalação

<li><b>Execute:</b> git clone https://github.com/rnicsonweb/boxdelivery</li>
<li><b>Execute:</b> composer install</li>
<li>Crie um banco de dados mysql e altere no arquivo .env</li>
<li><b>Execute:</b> php artisan migrate:fresh --seed</li>


## Acesso

Será criado um acesso a plataforma com os seguintes dados:
Email:teste@teste.com 
Senha:12345678


#API

Foi Criado EndPoint da Seguinte Forma:

Cadastrar usuário:<br><b>Method:</b> Post <b><br>Url:</b> api/register<br>("Enviar name, email e password como parametro")<br><br>
Efetuar login para poder consumir o restante da API:<br><b>Method:</b> Post <b><br>Url:</b> api/auth/login<br>("Enviar email e password como parametro")<br><br>
Listar os filmes cadastrados no banco:<br><b>Method:</b> Get <br><b>Url:</b>  api/filmes<br>(Enviar Auth Bearer como parâmetro)<br><br>
Listar os filmes que o usuário salvou como favorito:<br><b>Method:</b> Get <br><b>Url:</b> api/favoritos/{user_id}<br>(Enviar Auth Bearer como parâmetro)<br><br>
Salvar um filme como favorito:<br><b>Method:</b> Post <br><b>Url:</b>  api/favoritos<br>("Enviar film_id,user_id e Auth Bearer como parametro")<br><br>
Remover um filme da lista de favoritos do usuário:<br><b>Method:</b> Delete <br><b>Url:</b> api/favoritos/{id}<br>(Enviar Auth Bearer como parâmetro)

##Imagens do Sistema

<a href="https://ibb.co/yhWq1MG"><img src="https://i.ibb.co/vsZkGrg/listafavoritos.jpg" alt="listafavoritos" width="400" border="0"></a>
<a href="https://ibb.co/zmXwvRn"><img src="https://i.ibb.co/sgKrYwm/listafilme.jpg" alt="listafilme" width="400" border="0"></a>



<h4>Agradeço Desde Já!</h4>