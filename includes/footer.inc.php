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
    </body>
</html>
