
<footer>

    <div class="footer-social-icons">

        <!-- youtube -->
        <a class="footer-social-icon-anchor"
           href="https://www.youtube.com/channel/UCEbYvBsFGm7ExnfxVK89EDA?view_as=subscriber">
            <img class="footer-social-icon-image" src="img/icons/social-media/youtube18.png" alt="Youtube Logo">
        </a>

        <!-- facebook -->
        <a class="footer-social-icon-anchor" href="https://www.facebook.com/cigreja">
            <img class="footer-social-icon-image" src="../img/icons/social-media/facebook29.png" alt="Facebook Logo">
        </a>

        <!-- twitter -->
        <a class="footer-social-icon-anchor" href="https://twitter.com/cigrejacom">
            <img class="footer-social-icon-image" src="img/icons/social-media/twitter21.png" alt="Twitter Logo">
        </a>


        <!-- linkedin -->
        <a class="footer-social-icon-anchor" href="https://www.linkedin.com/in/cigreja/">
            <img class="footer-social-icon-image" src="img/icons/social-media/linkedin12.png" alt="Linkedin Logo">
        </a>

        <!-- github -->
        <a class="footer-social-icon-anchor" href="https://github.com/cigreja">
            <img class="footer-social-icon-image" src="img/icons/social-media/github13.png" alt="Github Logo">
        </a>


        <!-- skype -->
        <a class="footer-social-icon-anchor" href="skype:cigreja@live.com?add">
            <img class="footer-social-icon-image" src="img/icons/social-media/skype12.png" alt="Skype Logo">
        </a>

    </div>

    <div class="footer-copyright">&copy; 2015 Carlos Igreja</div>

</footer>


<!-- JQuery and Javascript -->
<script src="../js/jquery-3.2.1.js"></script>
<script src="../js/bootstrap.js"></script>
<script src="../js/main.js"></script>

<?php
// hide footer on contact page
if ($contact == "active") { ?>
    <script type="text/javascript"> hideFooter("hidden"); </script>
    <?php
}
?>

</body>

</html>