#Regras

1. Não usar getters e setters 
    - Não expor acesso as informações contidas nos atributos da classe através de getters e setters
    - Expor através de métodos que fazem sentido, 
    - Por exemplo: Na classe 'Video' a modificação do atributo de visibilidade do video foi para o método 'publish'. E retornamos a informação se é público ou não através de 'isPublic', que seria um get, mas no contexto é util saber se o video é público ou não.
    1.1. Tell. Don't Ask

2. Ter apenas 1 nível de identação por método.
    - Não colocar mais de um nivel de identação no método, caso o metodo precise de uma complexidade maior, gerando mais códigos, abstrair essa lógica em metodos diferentes.
    - Evitar as estruturas onde fica, if dentro de if, else dentro de else, for dentro de if e etc.
    - Geralmente segue a estrutura, um método para o fluxo principal do metodo, e outros metodos de acordo com o que o código precisa.
        ``
        EX: IF ...
                outro método
            IF
                outro método
        ``
3. Nunca usar ELSE
    3.1.  Early Return 
            - Consiste em não adicionar else's nos If's: Estruturar o código para que o fluxo sempre tenha um retorno fixo caso nunca entre em um if (geralmente isso seria os else's), e os If's apenas sendo condições existentes no fluxo de negocio.

    3.2. Fail First
            - Adicionar logo no início dos métodos os termos para causas falhas na continuidade do código... 'throw new Exception...'.

4. Envolva seus tipos primitivos 
    4.1 Evitar o uso de tipos primitivos diretamente no código: (string, float, int ...)
        - Em vez disto, encapsule em classes de valor especifico: (Email $email, Preco $preco, Idade $idade ...)
    4.2 Não significa encapsular todos:
        - Encapsular apenas os atributos que, têm signiificado próprio, possuem comportamento ou validações, Podem ser confundifos com outros valores do mesmo tipo primitivo (preço e quantidade, ambos sendo float).
    
5. Coleções de primeira classe
    - Se tenho uma coleção (Array, list) na minha classe, ela será a unica propriedade (Exemplo: na Classe 'WatchedVideos' minha coleção 'Map', é o único atributo).
    - Evita espalhar lógica de manipulação de coleções pelo código.
    - Garante que só elementos válidos sejam adicionados.
    - O nome da classe já explica o propósito da coleção.

6. Apenas um "ponto" por linha.
    - Esse "ponto" significa pontos de acesso, um exemplo é a forma de acessar um método através de outro método vindo de uma classe; 
    Ex: Antes $student->bd()->diff()->y Agora $student->age(); O metodo age() é que faz os calculos para retornar a idade calculada.

7. Nunca abreviar nomes de variavéis, atributos metodos, funções e etcs.
    - Quando abreviamos um nome é por que esse nome é muito grande, e isso indica que o método pode está fazendo mais de uma coisa, ou por que o esta havendo muita repetição com esse nome, em ambos os casos é preciso mudar a estrategia e não abreviar.

8. Manter classes e pacotes pequenos.
    - Tornar a leitura mais fácil e menos desgastante para a visão com "poucas" linhas de código.
    - Pacotes pequenos facilita a localização dos arquivos do projeto.

9. Tenha no máximo 2 propriedades por classe.
    - Ter por classe no máximo 2 propriedades em cada classe: Pode ser muito inreal alcançar essa regra, pois em projetos grandes e complexos existe muita abstração.
    - Para facilitar e alcançar o objetivo desta regra, utilize o agrupamento de propriedade (criar uma classe agrupando as propriedades).
    - A regra pode aumentar a complexidade em sistemas complexos pode haver a necessidade de criar mais propriedades, e agrupa-los em varias classes aumenta a dificuldade de entender o código.