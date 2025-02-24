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



**  Early Return 
    - Consiste em não adicionar else's nos If's: Estruturar o código para que o fluxo sempre tenha um retorno fixo caso nunca entre em um if (geralmente isso seria os else's), e os If's apenas sendo condições existentes no fluxo de negocio.

** Fail First
    - Adicionar logo no início dos métodos os termos para causas falhas na continuidade do código... 'throw new Exception...'.

