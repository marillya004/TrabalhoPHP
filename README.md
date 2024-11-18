<h1> Sobre o projeto </h1> 
O sistema trata-se de uma página web de uma clínica, que tem como objetivo facilitar o agendamento das consultas. E também, apresenta um relatório onde o usuário irá informar o nome do 
exame e a quantidade que aquele exame foi realizado em determinado mês. Assim, a clínica poderá saber o que é mais requerido através da análize do gráfico (está relacionado com o relatório).
<br>

<h2>  Fontes de pesquisa </h2>
<div>
  <a href="https://developers.google.com/chart?hl=pt-br">Google Charts</a>
  <a href="https://www.youtube.com/watch?v=qheEXm5pzb8">YouTube</a>
  <a href="https://getbootstrap.com/">Bootstrap</a>
  <a href="https://github.com/Adeilsoara/AulasPHP">GiHub</a>
</div>
<br>

## Modelo conceitual
![Captura de tela_18-11-2024_18329_](https://github.com/user-attachments/assets/ecc7b644-daf4-4fd3-9665-3ba766641115)

## Modelo Lógico
![image](https://github.com/user-attachments/assets/85115d11-9afc-4845-9921-a5f4329bce30)

## Modelo Físico (SQL)
CREATE TABLE paciente 
( 
 id_paciente INT PRIMARY KEY,  
 nome VARCHAR(n),  
 sobrenome VARCHAR(n),  
 data_consulta DATE,  
 email VARCHAR(n),  
 medico VARCHAR(n),  
); 

CREATE TABLE consulta 
( 
 tipo_exame VARCHAR(n),  
 quantidade INT NOT NULL,  
 mes VARCHAR(n) NOT NULL,  
); 

<h1>Resultado esperado:</h1>

INÍCIO
![Captura de tela_17-11-2024_192629_localhost](https://github.com/user-attachments/assets/06637e83-0706-4db7-ad1d-bdc09c0576bd)



CADASTRO
![Captura de tela_17-11-2024_192849_localhost](https://github.com/user-attachments/assets/d6967aab-dd55-4d51-81e2-ac2dafb6f75f)


TABELA DA CONSULTA
![Captura de tela_17-11-2024_192914_localhost](https://github.com/user-attachments/assets/00d095f2-6798-486d-9e50-5d82d39f4e49)


RELATÓRIO
![Captura de tela_17-11-2024_192937_localhost](https://github.com/user-attachments/assets/5aa69dae-032e-4894-aa3f-30df5f95f960)


TABELA RELATÓRIO
![Captura de tela_17-11-2024_192955_localhost](https://github.com/user-attachments/assets/db214710-8e6a-49de-87db-eb6729b076f3)


GRÁFICO
![Captura de tela_17-11-2024_193813_localhost](https://github.com/user-attachments/assets/2e4588fa-cc9e-4c8b-a542-644127e8ef48)






