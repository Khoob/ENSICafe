        </div>
        <!-- /#page-content-wrapper -->

        <!-- /#wrapper -->

        <!-- Footer -->
        <footer class="footer-fixed">
            <p>Ensicafé 2017</p>
        </footer>

        <!-- jQuery -->
        <script src="js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>

        <!-- Menu Toggle Script -->
        <script>
        // Gère l'ouverture et la fermeture du menu gauche
        function toggleMenu(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
            $("#menu-toggle").find('span').toggleClass('glyphicon-forward').toggleClass('glyphicon-backward');
        }
    </script>

</body>

</html>