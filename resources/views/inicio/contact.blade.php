<section id="map-section" data-scroll-index="4" class="map-style-1">
    
        <div id="map"></div>
        
        <div class="main-section">
          
          <div class="container">
            
            <!--Title-->
            <div class="section-title">
              <div>
                <i class="fa fa-heart-o gradient-color"></i>
                <span class="one gradient-color"></span>
                <span class="two gradient-color"></span>
              </div>
              <h4 class="m-b-1 menu__item">
                <span class="menu__item-name">Entre em Contato</span>
                <span class="menu__item-label">Conte-nos o que vc precisa?</span>
              </h4>
            </div>
            
            <div class="contact-container">
              
              <!-- Contact Form -->
              <form id="contact-form" name="contact-form" method="POST" data-name="Contact Form">
                
                <div class="row">
                  
                  <!-- Name Field -->
                  <div class="input-field col s12">
                    
                    <i class="fa fa-user-o prefix gradient-color transparent-text" aria-hidden="true"></i>
                    <input id="nome" type="text" class="validate" name="nome" required autocomplete="Nome">
                    <label for="nome">Nome *</label>
                  
                  </div>
                  
                  <!-- Email Field -->
                  <div class="input-field col s12 m-t-1">
                    
                    <i class="fa fa-paper-plane-o prefix gradient-color transparent-text" aria-hidden="true"></i>
                    <input id="email" type="email" class="validate" name="email" required autocomplete="email">
                    <label data-error="E-mail Inválido" for="email">E-mail *</label>
                  
                  </div>
                  
                  <!-- Message Field -->
                  <div class="input-field col s12 m-t-1">
                    
                    <i class="fa fa-envelope-o prefix gradient-color transparent-text" aria-hidden="true"></i>
                    <textarea id="mensagem" class="materialize-textarea validate" minlength="20" name="mensagem"
                              required></textarea>
                    <label for="mensagem" data-error="Mínimo é de 20 caracteres">Mensagem *</label>
                  
                  </div>
                  
                  <!-- Form Alert Message -->
                  <div class="col s12 alert-message" id="contact-alert-message"></div>
                  
                  <!-- Submit Button -->
                  <div class="col s12 center-align">
                    
                    <button id="contact-submit" class="gradient-color waves-effect waves-light button-main" type="submit">
                      <span>Enviar Mensagem</span>
                      <i class="fa fa-envelope-o"></i>
                    </button>
                  
                  </div>
                  
                  <!-- ! Anti-spam field ! Invisible for users, it will trick most bots to fill it and prevent the email from being sent to you -->
                  <div class="input-field col s12 hidden">
                    
                    <input type="text" id="contact-check-spam" placeholder="Preencha os campos" name="check-spam">
                  
                  </div>
                
                </div>
              
              </form>
            
            </div>
          
          </div>
        
        </div>
      
      </section>