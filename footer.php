<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package    WordPress
 * @subpackage Twenty_Eleven
 * @since      Twenty Eleven 1.0
 */
?>
<footer id="colophon">
    <?php
    if (!is_404()) {
        get_sidebar('footer');
    }
    ?>

    <ul id="lservicios">
        <li>
            <a href="https://plus.google.com/110576088749422697808">
                <i class="fa fa-google-plus" aria-hidden="true">/ElDespertadorDigital</i>
            </a>
        </li>
        <li>
            <a href="https://www.youtube.com/user/eldespertadordigital">
                <i class="fa fa-youtube-play" aria-hidden="true">/ElDespertadorDigital</i>
            </a>
        </li>
        <li>
            <a href="https://twitter.com/Despertadorweb">
                <i class="fa fa-twitter" aria-hidden="true">@DespertadorWeb</i>
            </a>
        </li>
        <li>
            <a href="https://www.facebook.com/PeriodicoElDespertador">
                <i class="fa fa-facebook-official" aria-hidden="true">/PeriodicoElDespertador</i>
            </a>
        </li>

        <li>Lavalle - Mendoza - Argentina</li>
        <li><a href="https://leonardoaraoz.com">Desarrollo : Leonardo Araoz</a></li>
        <li>Propiedad de Editorial Cuyum</li>
        <li><a href="whatsapp://send?phone=5492613840726">Telefono: 261-494-1850</a></li>
        <li><a href="https://www.google.com.ar/maps/place/Peri%C3%B3dico+El+Despertador/@-32.7201916,-68.5984644,16.5z/data=!4m5!3m4!1s0x0:0xa78b61c07e52bf16!8m2!3d-32.7190953!4d-68.5942715?hl=es-419">Domicilio: Bolivar 47</a></li>

    </ul>    
</footer>
<link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>/wp-content/themes/eldespertadortheme/css/fa/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>/wp-content/themes/eldespertadortheme/css/despertador.css?v=86" />
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<?php if (curPageURL() == get_site_url() . "/") {
        ?>
    <script type="application/ld+json">
        {
        "@context": "http://schema.org",
        "@type": "WebSite",
        "name":"El Despertador Lavalle",
        "url": "<?php echo site_url(); ?>/",
        "potentialAction": {
        "@type": "SearchAction",
        "target": "<?php echo site_url(); ?>/?s={search_term_string}",
        "query-input": "required name=search_term_string"
        }
        }
    </script>
    <script type="application/ld+json">
        {
        "@context" : "http://schema.org",
        "@type" : "Organization",
        "name":"El Despertador Lavalle",
        "url": "<?php echo site_url(); ?>/",
        "logo": "<?php echo site_url(); ?>/wp-content/themes/eldespertadortheme/img/logo.jpg",
        "sameAs" : [
        "https://twitter.com/Despertadorweb",
        "https://www.facebook.com/PeriodicoElDespertador",
        "https://www.youtube.com/user/eldespertadordigital",
        "https://plus.google.com/110576088749422697808"
        ]
        }
    </script>

    <script type="text/javascript" src="<?php echo site_url(); ?>/wp-content/themes/eldespertadortheme/js/youtubeplaylist.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $("ul.playlist").ytplaylist({addThumbs: true, holderId: 'ytvideo'});
        });
    </script>
<?php
    } ?>

<script type="text/javascript">
    $(document).ready(function () {
        $.get("http://api.openweathermap.org/data/2.5/weather?id=3847328&units=metric&APPID=548f195309de9461b3d0748101c48c18&lang=es", function (data, status) {
            let text = "<b> " + Math.round(data.main.temp) + "  C </b>";
            text += " // Viento <b> " + Math.round(data.wind.speed) + " mts/s </b> // ";
            text += "<img src='http://openweathermap.org/img/w/" + data.weather[0].icon + ".png' />";
            text = "<div id='tiempo'> <i> En Lavalle: </i>  " + text + " </div>";
            if ($(window).width() < 1024) {
                $("#menubar").after(text);
            } else {
                $("#buscar").after(text);
            }
        });
    });</script>
<script type="text/javascript">
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
    ga('create', 'UA-44058442-1', 'auto');
    ga('send', 'pageview');
</script>
<script>
    window.fbAsyncInit = function () {
        FB.init({
            appId: '517649738391808',
            xfbml: true,
            version: 'v2.7'
        });
    };
    (function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id))
            return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.7&appId=517649738391808";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
</body>
</html>