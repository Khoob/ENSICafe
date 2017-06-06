        </div>
        <!-- /#page-content-wrapper -->
    </div>
    <!-- /#wrapper -->

    <!-- Footer -->
    <footer class="footer">
        <p>Ensicafé 2017</p>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
        // GENERAL: gère l'ouverture et la fermeture du menu gauche
        function toggleMenu(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
            $("#menu-toggle").find('span').toggleClass('glyphicon-forward').toggleClass('glyphicon-backward');
        }

        // accueil.php : fait disparaître la publication lorsqu'on clique sur la croix
        $(".close").click(function () {
            $(this).closest('.panel-custom').fadeOut();
        });

        // accueil.php : déroule automatiquement les news ('interval' en ms)
        $(document).ready(function() {
            $('#carousel-news').carousel({
                pause: true,
                interval: 10000,
            });
        });

        // accueil.php : fait apparaître la fenêtre pour commenter (publication)
        $(function () {
         $('.panel-custom > .panel-body > .pull-left > .input-placeholder, .panel-custom > .panel-comment > .panel-custom-textarea > button[type="reset"]').on('click', function(event) {
            var $panel = $(this).closest('.panel-custom');
            $comment = $panel.find('.panel-comment');
            
            $comment.find('.btn:first-child').addClass('disabled');
            $comment.find('textarea').val('');

            $panel.toggleClass('panel-custom-show-comment');

            if ($panel.hasClass('panel-custom-show-comment')) {
                $comment.find('textarea').focus();
            }
        });

         // "Grise" le bouton envoyer (commentaire)
         $('.panel-comment > .panel-custom-textarea > textarea').on('keyup', function(event) {
            var $comment = $(this).closest('.panel-comment');

            $comment.find('button[type="submit"]').addClass('disabled');
            if ($(this).val().length >= 1) {
                $comment.find('button[type="submit"]').removeClass('disabled');
            }
        });

         // "Grise" le bouton envoyer (poster publication)
         $('.panel-publication > .panel-collapse > .panel-body > .publication-msg > textarea').on('keyup', function(event) {
            var $comment = $(this).closest('.panel-publication');

            $comment.find('button[type="submit"]').addClass('disabled');
            if ($(this).val().length >= 1) {
                $comment.find('button[type="submit"]').removeClass('disabled');
            }
            });
        });

        // accueil.php : gère le chargement d'une image lorsqu'on veut créer une publication
        $(function() {
            // Reset
            $('.preview-clear').click(function(){
                $('.preview-filename').val("");
                $('.preview-clear').hide();
                $('.preview-input input:file').val("");
                $(".preview-input-title").text("Image"); 
            }); 
            // Initialise l'aperçu
            $(".preview-input input:file").change(function (){     
                var file = this.files[0];
                var reader = new FileReader();
            // Insère les données de l'aperçu dans la barre d'envoi
            reader.onload = function (e) {
                $(".preview-input-title").text("Changer");
                $(".preview-clear").show();
                $(".preview-filename").val(file.name);            
            }        
            reader.readAsDataURL(file);
            });  
        });
 </script>

</body>

</html>