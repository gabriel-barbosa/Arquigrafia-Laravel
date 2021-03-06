	<!--   CABEÇALHO   -->
	<div class="header container">
    
    <div class="twelve columns">
	
	  	<!--   LOGO   -->
      <a href="{{ URL::to("/") }}" id="logo"></a>  <p id="beta">alpha</p>
      <!--   MENU SUPERIOR   -->
      <div id="first_menu">
          <!--   MENU INSTITUCIONAL   -->
          <!--
          <ul id="top_menu_items">
            <li><a href="project.php" id="project">O projeto</a></li>
            <li><a href="faq.php" id="help">Ajuda</a></li>
            <li><a href="#" id="contact">Contato</a></li>
          </ul>
          -->
          <!--   FIM - MENU INSTITUCIONAL   -->
              
          <!--   MENU DE BUSCA   -->
          <form id="search_buttons_area" action="{{ URL::to("/") }}/search" method="post" accept-charset="UTF-8">
            <!--   BARRA DE BUSCA   -->
            <input type="text" class="search_bar" id="search_bar" name="q" value=""/>
  
            <input type="hidden" value="8" name="perPage" />
            <!--   BOTÃO DA BARRA DE BUSCA   -->
            <input type="submit" class="search_bar_button cursor" value="" />
            <!--   BOTÃO DE BUSCA AVANÇADA   -->
            <!--  <a href="#" id="complete_search"></a> -->
          </form>
          <!--   FIM - MENU DE BUSCA   -->
        </div>
      <!--   FIM - MENU SUPERIOR   -->

      

      
        <!--   ÁREA DO USUARIO   -->
        <div id="loggin_area">
        
        <?php if (Auth::check()) { ?>
        
          <a id="user_name" href="{{ URL::to("/users") }}/{{ Auth::user()->id; }}">{{ Auth::user()->name; }}</a>
          
          <a id="user_photo" href="{{ URL::to("/users") }}/{{ Auth::user()->id; }}">
          <?php if (Auth::user()->photo != "") { ?>
            <img  src="{{ asset(Auth::user()->photo); }}" class="user_photo_thumbnail"/>
          <?php } else { ?>
            <img src="{{ URL::to("/") }}/img/avatar-48.png" width="48" height="48" class="user_photo_thumbnail"/>
          <?php } ?>
          </a>
          
          <a href="{{ URL::to("/users/logout/") }}" id="logout" class="btn">SAIR</a><br />
          <ul id="logged_menu">
            <li> <a href="{{ URL::to('/albums') }}" id="users" title="Meus álbuns">&nbsp;</a></li>
            <!-- <li><a href="#" id="comunities" title="Comunidades">&nbsp;</a></li> -->
            <li><a href="{{ URL::to("/photos/upload") }}" name="modal" id="upload" title="Enviar uma imagem">&nbsp;</a></li>
            <!-- <li><a href="#" id="messages" title="Você tem 19 mensagens">&nbsp;</a></li> -->
          </ul>
         
        <?php } else { ?>
        
          <!--   BOTÃO DE LOGIN   -->
          <a href="{{ URL::to("/users/login/") }}" name="modal" id="login_button" class="btn">ENTRAR</a>
      
          <!--   BOTÃO DE CADASTRO   -->
          <a href="{{ URL::to("/users/account") }}" name="modal" class="btn" id="registration_button">CRIAR UMA CONTA</a>
          
        <?php } ?>
          
        </div>
        <!--   FIM - ÁREA DO USUARIO   -->      
               
      
      <!--   MENSAGENS DE ENVIO / FALHA DE ENVIO   -->
      <div id="message_delivery" class="message_delivery" >Mensagem enviada!</div>
      <div id="fail_message_delivery" class="message_delivery" >Falha no envio.</div>
      <div id="message_upload_ok" class="message_delivery" >Upload efetuado com sucesso!</div>
      <div id="message_upload_error" class="message_delivery" >Erro - Arquivo inválido!</div>
      <div id="message_login_error" class="message_delivery" >Erro - Login ou senha inválidos!</div>   
      <div id="generic_error" class="message_delivery_generic" >
	      
	      
	      
      </div>   
      <!--   TESTE DE FUNCIONAMENTO DA FUNÇÃO   -->
  	</div>
  </div>
 	
  <input id="context_path" type="hidden" value=""/>	
    
	<!--   FIM - CABEÇALHO   -->