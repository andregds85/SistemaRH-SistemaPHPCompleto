<div align="right">
 <font  size=2 face=Arial >


          <script language="JavaScript">



var mes=new Array(12);

mes[1]="Janeiro";

mes[2]="Fevereiro";

mes[3]="Março";

mes[4]="Abril";

mes[5]="Maio";

mes[6]="Junho";

mes[7]="Julho";

mes[8]="Agosto";

mes[9]="Setembro";

mes[10]="Outubro";

mes[11]="Novembro";

mes[12]="Dezembro";

var semana=new Array(7);

semana[1]="Domingo";

semana[2]="Segunda-Feira";

semana[3]="Terça-Feira";

semana[4]="Quarta-Feira";

semana[5]="Quinta-Feira";

semana[6]="Sexta-Feira";

semana[7]="Sábado";

var hoje=new Date();

var diaDaSemana=semana[hoje.getDay() + 1];

//definindo dia da semana

var mesAtual=mes[hoje.getMonth() + 1];

// definindo mes

var dia=hoje.getDate();

//definindo dia

var ano=hoje.getYear();

//definindo ano

if (ano < 2000)   ano = ano + 1900;

//atualizando para o ano 2000

document.write("Pelotas, " + diaDaSemana + ", " + dia + " de ");

document.write(mesAtual + " de " + ano);

//-->

          </script>
          
          </font>
          </div>
