<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <!-- If you delete this meta tag, Half Life 3 will never be released. -->
        <meta name="viewport" content="width=device-width" />

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title><?= $subject; ?></title>

        <link rel="stylesheet" type="text/css" href="<?=base_url()?>/assets/css/email.css" />

    </head>

    <body bgcolor="#ebebeb">
        <link rel="stylesheet" type="text/css" href="<?=base_url()?>/assets/css/email.css" />
        <!-- HEADER -->
        <table class="head-wrap" bgcolor="#ebebeb">
            <tr>
                <td></td>
                <?php if (isset($uuid)): ?>
                    <td class="header container" >

                        <div class="content3">
                            <table>
                                <tr>
                                    <td align="center"><h6 class="collapse">Si no puede visualizar correctamente es mail pinche <?= link_to('aqui', 'email/' . $uuid); ?></h6></td>
                                </tr>
                            </table>
                        </div>

                    </td>
                <?php endif; ?>
                <td class="header container" >				
                    <div class="content2">
                        <table>
                            <tr >
                                <td align="center" >
                                    <img src="<?=base_url();?>/assets/images/logo.png" alt="Logo Total"/>
                                </td>
                            </tr>
                        </table>
                    </div>				
                </td>
                <td></td>
            </tr>
        </table><!-- /HEADER -->


        <!-- BODY -->
        <table class="body-wrap">
            <tr>
                <td></td>
                <td class="container" bgcolor="#FFFFFF">

                    <div class="content">
                        <table>
                            <tr>
                                <td align="center">
                                    <?= $innerContent; ?>
                                </td>
                            </tr>
                        </table>
                    </div><!-- /content -->

                </td>
                <td></td>
            </tr>
        </table><!-- /BODY -->

        <!-- FOOTER -->
        <table class="footer-wrap">
            <tr>
                <td></td>
                <td class="container">			
                    <table class="social" width="100%">
                        <tr>
                            <td>
                                <!-- column 1 -->
                                <table align="left" class="column">
                                    <tr>
                                        <td>
                                            <img src="<?=base_url()?>/assets/images/logo-footer.png" alt="Logo"/>
                                        </td>
                                    </tr>
                                </table><!-- /column 1 -->	

                                <!-- column 2 -->
                                <table align="right" class="column2">
                                    <tr>
                                        <td>							
                                            <h5 class="">Copyright © Total • Todos los derechos reservados</h5>
                                        </td>	
                                    </tr>
                                </table><!-- /column 2 -->

                                <span class="clear"></span>	

                            </td>
                        </tr>
                    </table>

                    <div class="content">
                        <table>
                            <tr>
                                <td align="center">
                                    <p>
                                        <a href="#">Terms</a> |
                                        <a href="#">Privacy</a> |
                                        <a href="#"><unsubscribe>Unsubscribe</unsubscribe></a>
                                    </p>
                                </td>
                            </tr>
                        </table>
                    </div><!-- /content -->

                </td>
                <td></td>
            </tr>
        </table><!-- /FOOTER -->

    </body>
</html>