<footer>


    <div class="footer-social-icons">

        <!-- youtube -->
        <a href="https://www.youtube.com/channel/UCEbYvBsFGm7ExnfxVK89EDA?view_as=subscriber">
            <img src="img/icons/social-media/youtube18.png" alt="Facebook Logo">
        </a>

        <!-- facebook -->
        <a href="https://www.facebook.com/cigreja">
            <img src="../img/icons/social-media/facebook29.png" alt="Twitter Logo">
        </a>

        <!-- twitter -->
        <a href="https://twitter.com/cigrejacom">
            <img src="img/icons/social-media/twitter21.png" alt="Facebook Logo">
        </a>

        <!-- linkedin -->
        <a href="https://www.linkedin.com/in/cigreja/">
            <img src="img/icons/social-media/linkedin12.png" alt="Facebook Logo">
        </a>

        <!-- github -->
        <a href="https://github.com/cigreja">
            <img src="img/icons/social-media/github13.png" alt="Facebook Logo">
        </a>

        <!-- skype -->
        <a href="skype:cigreja@live.com?add">
            <img src="img/icons/social-media/skype12.png" alt="Facebook Logo">
        </a>

        <p>&copy; 2015 Carlos Igreja</p>
    </div>

</footer>


<!-- JQuery and Javascript -->
<script src="../js/jquery-3.2.1.js"></script>
<script src="../js/bootstrap.js"></script>
<script src="../js/main.js"></script>

<!-- hide footer on contact page -->
<script type="text/javascript">
    function hideFooter(value){
        var footer = document.getElementsByTagName("footer")[0];
        footer.style.visibility = value;
        console.log(footer);
    }
</script>

<?php
// hide footer on contact page
if($contact == "active"){ ?>
<script type="text/javascript" > hideFooter("hidden"); </script>
<?php
}
?>


</body>

</html>