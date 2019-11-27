<div class="conteudo-geral">
  <div class="programador">
    <div class="programador-sidebar">
      <img src="<?php echo INCLUDE_PATH?>avatar.jpg" alt="avatar" class="avatar">
      <h3 class="avatar-name">Thiago de Melo</h3>
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Adipisci nobis odio dignissimos dicta sit culpa numquam incidunt est? Atque pariatur doloremque aliquam saepe id dignissimos voluptatem dolor itaque ut nisi?</p>
    </div>

    <div class="programador-container">
      <div class="programador-topbar">
        <a href="<?php echo INCLUDE_PATH?>">Sair</a>
        <a href="<?php echo INCLUDE_PATH?>programador">Página inicial</a>
      </div>
      <div class="programador-conteudo">
        <div class="programador-conteudo-card">
          <div class="problema wow fadeIn">
            <h1>Título de um Problema de Matemática</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus veniam vero ipsam suscipit nihil magni ducimus dicta maiores necessitatibus neque, repellat ad totam velit aliquam illo doloribus, corporis, molestiae temporibus!
              Aliquam modi harum sit quo voluptatem et quis? Totam neque, iste pariatur tenetur maxime magnam, dolorem animi delectus inventore nihil recusandae praesentium.
              Ipsa, odio? Quos, animi? Laudantium assumenda veritatis recusandae dicta nam omnis neque vero, earum officiis ducimus necessitatibus eius perspiciatis totam, saepe eaque?
              Voluptates distinctio ab accusantium nemo molestias assumenda, aspernatur fuga delectus deleniti ipsum amet pariatur culpa, quis cupiditate vitae itaque officiis illum ipsam!
              Est facere voluptatibus tenetur sit libero praesentium quisquam illo nobis non consequuntur, sint earum animi excepturi provident natus sequi, placeat voluptatem beatae!
            </p>

            <pre class="resolvido">
              #include&lt;stdio.h&gt;
              #include&lt;stdlib.h&gt;

              int main() {
                //Declaração das variáveis para guardar os valores
                int dividendo;
                int divisor;
                
                //Imprime mensagem para a inserção do primeiro valor
                printf("Digite o valor do dividendo:");
                //Guarda o valor digitado pelo usuário na variável dividendo
                scanf("%d", &dividendo);
                
                //Imprime mensagem para a inserção do segundo valor
                printf("\nDigite o valor do divisor:");
                //Guarda o valor digitado pelo usuário na variável divisor
                scanf("%d", &divisor);   
                
                //Verifica se o valor do divisor é igual a zero
                if (divisor == 0) {
                    //Imprime o valor -1 caso o divisor seja zero
                    printf("-1\n");
                }
                //Verifica se o valor do cálculo da divisão é negativo
                else if ((dividendo / divisor < 0)) {
                    //Imprime o valor 0 caso o resultdo da divisão seja negativo
                    printf("Valor encontrado: 0\n");
                }
                else {
                    //Como o divisor não é zero e o cálculo não é negativo, imprime o resultado da divisão
                    printf("Valor calculado: %d \n", (dividendo / divisor));
                }
                
                system("PAUSE");
              }
            </pre>
          </div>

          <h2>Comentários: </h2>

          <div class="comentario">
            <img src="<?php echo INCLUDE_PATH?>avatar.jpg">
            <div class="text">
              <h3>Nome do usuario</h3>
              <p>Mt b</p>
            </div>
          </div>

          <div class="comentario">
            <img src="<?php echo INCLUDE_PATH?>avatar.jpg">
            <div class="text">
              <h3>Nome do usuario</h3>
              <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fuga provident rem earum ratione dignissimos libero veniam, hic recusandae tempore! Vel ipsum dolore obcaecati incidunt fugiat pariatur, officia itaque libero voluptates! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perspiciatis doloribus in et! Iure non dolorum, deserunt ratione asperiores debitis, dignissimos delectus assumenda minima vero iusto distinctio enim mollitia ipsum odio? Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maiores perferendis incidunt commodi voluptatum id voluptatem, illum sed reiciendis laboriosam autem mollitia adipisci dicta recusandae, porro, optio doloremque. Dolor, quam iure!</p>
            </div>
          </div>

          <div class="comentario">
            <img src="<?php echo INCLUDE_PATH?>avatar.jpg">
            <div class="text">
              <h3>Nome do usuario</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim, possimus dolores numquam doloremque facere, quis maxime, quisquam dolorum dicta dolorem deleniti omnis voluptatem unde blanditiis. Sit maxime omnis repellendus vitae! Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus dolores accusamus illum veniam et neque ipsam, dicta fugiat magnam excepturi quidem. Laboriosam distinctio consequatur eaque nisi, placeat esse necessitatibus cum.</p>
            </div>
          </div>

          <div class="comentario">
            <img src="<?php echo INCLUDE_PATH?>avatar.jpg">
            <div class="text">
              <h3>Nome do usuario</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius saepe molestias assumenda quasi magnam libero, iure totam, fugiat facilis nihil mollitia animi debitis voluptatum modi, cumque earum tempore voluptates expedita! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatem reprehenderit fuga asperiores recusandae minima minus ducimus repellendus animi nulla similique, accusantium nihil labore rem neque pariatur! Ad dolorem architecto sit. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nihil perferendis esse laudantium? In quasi quos quisquam dolorum, odio consectetur voluptate minima. Nisi tempora adipisci voluptatem fuga, vel impedit reprehenderit aliquam. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste similique, magni corrupti repudiandae cumque provident delectus ipsa porro laboriosam temporibus commodi nisi placeat blanditiis quasi illum magnam aliquam soluta. Vitae! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Recusandae consequuntur, cupiditate minus commodi consequatur aliquam maxime velit voluptatem amet omnis dolorem maiores doloremque dolore quos at dolor iusto officiis corrupti?</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="footer">
    todos os direitos reservados
  </div>
</div>