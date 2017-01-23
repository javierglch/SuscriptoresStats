<footer class="footer-margin-fix"></footer>
<footer class="main-footer">
    <div class="card card-footer">
        <div class="container">
            <div class="table">
                <div class="row">
                    <div class="col-sm-6 text-left">
                        <img class="logo" src="/assets/images/logo-sat-background.png">
                    </div>
                    <div class="col-sm-6 text-right copy">
                        &copy; Subs Stats
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <small>Legal: <em>Hexania isn't endorsed by Riot Games and doesn't reflect the views or opinions of Riot Games or anyone officially involved in producing or managing League of Legends. League of Legends and Riot Games are trademarks or registered trademarks of Riot Games, Inc. League of Legends © Riot Games, Inc.</em></small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<script type="text/javascript">
    $(document).ready(function (e) {
        posFooter();
    });
    $(window).resize(function (e) {
        posFooter();
    });
    $('body').resize(function (e) {
        posFooter();
    });
    function posFooter() {
        var footer_height = $('footer.main-footer').height();
        var footer_margin_top = parseInt($('footer.main-footer').css('margin-top'));
        if ($(window).height() < $(document).height()) {
            $('footer.main-footer').css('position', 'relative');
            $('footer.footer-margin-fix').css('margin-bottom', footer_margin_top + 'px');
        } else {
            $('footer.main-footer').css('position', 'fixed');
            $('footer.footer-margin-fix').css('margin-bottom', (footer_height + footer_margin_top) + 'px');
        }
    }
</script>
