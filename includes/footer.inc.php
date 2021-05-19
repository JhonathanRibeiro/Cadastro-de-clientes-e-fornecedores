   <!-- JQUERY -->
   <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <!-- INICIALIZAÇÃO JQUERY -->
    <script type="text/javascript">
       document.addEventListener('DOMContentLoaded', function() {
       var elems = document.querySelectorAll('.modal');
       var instances = M.Modal.init(elems, options);
        });

       // Or with jQuery

      $(document).ready(function(){
      $('.modal').modal();
      });
    </script>

   <footer class="page-footer blue-grey" style="margin-top:10em;">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Sistema de cadastro</h5>
                <p class="grey-text text-lighten-4">Desenvolvido por <b>Jhonathan Ribeiro</b>.</p>
              </div>
             
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            ©2021 Copyright
            <a class="grey-text text-lighten-4 right" href="https://jhonathanribeiro.netlify.app">Site</a>
            </div>
          </div>
        </footer>
   </footer>
    </body>
</html>
