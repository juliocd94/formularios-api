<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta name="x-apple-disable-message-reformatting">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="telephone=no" name="format-detection">
    <title></title>
    <link href="https://fonts.googleapis.com/css2?family=Imprima&display=swap" rel="stylesheet">
</head>

<body>
    <div class="es-wrapper-color">
        <table class="es-wrapper" width="100%" cellspacing="0" cellpadding="0">
            <tbody>
                <tr>
                    <td class="esd-email-paddings" valign="top">
                        <table cellpadding="0" cellspacing="0" class="es-footer esd-header-popover" align="center">
                            <tbody>
                                <tr>
                                    <td class="esd-stripe" align="center">
                                        <table bgcolor="#bcb8b1" class="es-footer-body" align="center" cellpadding="0"
                                            cellspacing="0" width="600" height="75">
                                            <tbody>
                                                <tr>
                                                    <td class="esd-structure es-p20t es-p20b es-p40r es-p40l"
                                                        align="left" esd-custom-block-id="823048">
                                                        <table cellpadding="0" cellspacing="0" width="100%">
                                                            <tbody>
                                                                <tr>
                                                                    <td width="520" class="esd-container-frame"
                                                                        align="center" valign="top">
                                                                        <table cellpadding="0" cellspacing="0"
                                                                            width="100%">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td align="center"
                                                                                        class="esd-block-image"
                                                                                        style="font-size: 0px;"><a
                                                                                            target="_blank"
                                                                                            href="https://viewstripo.email"><img
                                                                                                src="https://exposistemas.info/images/exposistemas-logo.png"
                                                                                                alt="Logo"
                                                                                                style="display: block;"
                                                                                                height="60"
                                                                                                title="Logo"></a></td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table cellpadding="0" cellspacing="0" class="es-content" align="center">
                            <tbody>
                                <tr>
                                    <td class="esd-stripe" align="center">
                                        <table bgcolor="#efefef" class="es-content-body" align="center" cellpadding="0"
                                            cellspacing="0" width="600" style="border-radius: 20px 20px 0 0 ">
                                            <tbody>
                                                <tr>
                                                    <td class="es-p20t es-p40r es-p40l esd-structure" align="left"
                                                        esd-custom-block-id="823050">
                                                        <table cellpadding="0" cellspacing="0" width="100%">
                                                            <tbody>
                                                                <tr>
                                                                    <td width="520" class="esd-container-frame"
                                                                        align="center" valign="top">
                                                                        <table cellpadding="0" cellspacing="0"
                                                                            width="100%" bgcolor="#fafafa"
                                                                            style="background-color: #fafafa; border-radius: 10px; border-collapse: separate;">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td align="left"
                                                                                        class="esd-block-text es-p20">
                                                                                        <h3>Hola&nbsp;Juan,</h3>
                                                                                        @if ($data->type_id == 1)
                                                                                        <p><br>Un nuevo cliente desea
                                                                                            registrarse. <B>WEB EMPRESARIAL</B></p>
                                                                                        @endif
                                                                                        @if ($data->type_id == 2)
                                                                                        <p><br>Un nuevo cliente desea
                                                                                            registrarse. <B>WEB PERSONAL</B></p>
                                                                                        @endif
                                                                                        
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    @if ($data->type_id == 1)
                                                                                        <td style="margin-bottom: 100px"
                                                                                            align="left"
                                                                                            class="esd-block-text es-p20">
                                                                                            <h2
                                                                                                style="text-align: center">
                                                                                                DATOS</h2>
                                                                                            <p
                                                                                                style="margin:0; padding:0;">
                                                                                                Nombre de la empresa:
                                                                                                <b>{{ $data->name }}</b>
                                                                                            </p>
                                                                                            <p
                                                                                                style="margin:0; padding:0;">
                                                                                                Descripción de la empresa:
                                                                                                <b>{{ $data->description }}</b>
                                                                                            </p>
                                                                                            <p
                                                                                                style="margin:0; padding:0;">
                                                                                                Persona de contacto (Nombre):
                                                                                                <b>{{ $data->contact_name }}</b>
                                                                                            </p>
                                                                                            <p
                                                                                                style="margin:0; padding:0;">
                                                                                                Persona de contacto (Correo):
                                                                                                <b>{{ $data->contact_email }}</b>
                                                                                            </p>
                                                                                            <p
                                                                                                style="margin:0 0 30px 0; padding:0;">
                                                                                                Persona de contacto (Cargo):
                                                                                                <b>{{ $data->contact_position }}</b>
                                                                                            </p>
                                                                                        </td>
                                                                                    @endif

                                                                                    @if ($data->type_id == 2)
                                                                                        <td style="margin-bottom: 100px"
                                                                                            align="left"
                                                                                            class="esd-block-text es-p20">
                                                                                            <h2
                                                                                                style="text-align: center">
                                                                                                DATOS</h2>
                                                                                            <p
                                                                                                style="margin:0; padding:0;">
                                                                                                Nombre:
                                                                                                <b>{{ $data->name }}</b>
                                                                                            </p>
                                                                                            <p
                                                                                                style="margin:0; padding:0;">
                                                                                                Correo elctrónico:
                                                                                                <b>{{ $data->email }}</b>
                                                                                            </p>
                                                                                            <p
                                                                                                style="margin:0; padding:0;">
                                                                                                Teléfono:
                                                                                                <b>{{ $data->phone }}</b>
                                                                                            </p>
                                                                                            <p
                                                                                                style="margin:0 0 30px 0; padding:0;">
                                                                                                Direción:
                                                                                                <b>{{ $data->adress }}</b>
                                                                                            </p>
                                                                                        </td>
                                                                                    @endif
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table cellpadding="0" cellspacing="0" class="es-content" align="center">
                            <tbody>
                                <tr>
                                    <td class="esd-stripe" align="center">
                                        <table bgcolor="#efefef" class="es-content-body" align="center"
                                            cellpadding="0" cellspacing="0" width="600"
                                            style="border-radius: 0 0 20px 20px">
                                            <tbody>
                                                <tr>
                                                    <td class="esd-structure es-p20t es-p40r es-p40l" align="left"
                                                        esd-custom-block-id="823052">
                                                        <table cellpadding="0" cellspacing="0" align="left"
                                                            class="es-left">
                                                            <tbody>
                                                                <tr>
                                                                    <td width="40"
                                                                        class="esd-container-frame es-m-p20b"
                                                                        align="center" valign="top">
                                                                        <table cellpadding="0" cellspacing="0"
                                                                            width="100%">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td align="center"
                                                                                        class="esd-block-image es-m-txt-l"
                                                                                        style="font-size: 0px"><img style="margin-left:15px; margin-top:15px" src="https://img.icons8.com/material-outlined/48/000000/checkmark.png"/>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <table cellpadding="0" cellspacing="0" class="es-right"
                                                            align="right">
                                                            <tbody>
                                                                <tr>
                                                                    <td width="500" class="esd-container-frame"
                                                                        align="center" valign="top">
                                                                        <table cellpadding="0" cellspacing="0"
                                                                            width="100%">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td align="left"
                                                                                        class="esd-block-text">
                                                                                        <p style="font-size: 16px;">La
                                                                                            información fue registrada
                                                                                            correctamente en nuestra
                                                                                            base de datos.</p>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="esd-structure es-p30t es-p40b es-p40r es-p40l"
                                                        align="left" esd-custom-block-id="823053">
                                                        <table cellpadding="0" cellspacing="0" width="100%">
                                                            <tbody>
                                                                <tr>
                                                                    <td width="520" class="esd-container-frame"
                                                                        align="center" valign="top">
                                                                        <table cellpadding="0" cellspacing="0"
                                                                            width="100%">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td align="center"
                                                                                        class="esd-block-button">
                                                                                        <span
                                                                                            class="msohide es-button-border"
                                                                                            style="display: block; background: #FF8D33;"><a
                                                                                                href
                                                                                                class="es-button msohide"
                                                                                                target="_blank"
                                                                                                style="padding-left: 5px; padding-right: 5px; display: block; background: #FF8D33; border-color: #FF8D33">Exposistemas,
                                                                                                LTDA</a></span>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table cellpadding="0" cellspacing="0" class="es-footer" align="center">
                            <tbody>
                                <tr>
                                    <td class="esd-stripe" align="center">
                                        <table bgcolor="#bcb8b1" class="es-footer-body" align="center"
                                            cellpadding="0" cellspacing="0" width="600" height="140">
                                            <tbody>
                                                <tr>
                                                    <td class="esd-structure es-p40t es-p30b es-p20r es-p20l"
                                                        align="left" esd-custom-block-id="819295">
                                                        <table cellpadding="0" cellspacing="0" width="100%">
                                                            <tbody>
                                                                <tr>
                                                                    <td width="560" align="left"
                                                                        class="esd-container-frame">
                                                                        <table cellpadding="0" cellspacing="0"
                                                                            width="100%">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td align="center"
                                                                                        class="esd-block-image es-p20b es-m-txt-c"
                                                                                        style="font-size: 0px;"><a
                                                                                            target="_blank"><img
                                                                                                src="https://exposistemas.info/images/exposistemas-logo.png"
                                                                                                alt="Logo"
                                                                                                style="display: block; font-size: 12px;"
                                                                                                title="Logo"
                                                                                                height="60"></a>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td align="center"
                                                                                        class="esd-block-social es-m-txt-c es-p10t es-p20b"
                                                                                        style="font-size:0">
                                                                                        <table cellpadding="0"
                                                                                            cellspacing="0"
                                                                                            class="es-table-not-adapt es-social">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td align="center"
                                                                                                        valign="top"
                                                                                                        esd-tmp-icon-type="twitter"
                                                                                                        class="es-p5r">
                                                                                                        <a target="_blank"
                                                                                                            href><img
                                                                                                                src="https://tlr.stripocdn.email/content/assets/img/social-icons/logo-black/twitter-logo-black.png"
                                                                                                                alt="Tw"
                                                                                                                title="Twitter"
                                                                                                                height="24"></a>
                                                                                                    </td>
                                                                                                    <td align="center"
                                                                                                        valign="top"
                                                                                                        esd-tmp-icon-type="facebook"
                                                                                                        class="es-p5r">
                                                                                                        <a target="_blank"
                                                                                                            href><img
                                                                                                                src="https://tlr.stripocdn.email/content/assets/img/social-icons/logo-black/facebook-logo-black.png"
                                                                                                                alt="Fb"
                                                                                                                title="Facebook"
                                                                                                                height="24"></a>
                                                                                                    </td>
                                                                                                    <td align="center"
                                                                                                        valign="top"
                                                                                                        esd-tmp-icon-type="linkedin">
                                                                                                        <a target="_blank"
                                                                                                            href><img
                                                                                                                src="https://tlr.stripocdn.email/content/assets/img/social-icons/logo-black/linkedin-logo-black.png"
                                                                                                                alt="In"
                                                                                                                title="Linkedin"
                                                                                                                height="24"></a>
                                                                                                    </td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td align="center"
                                                                                        class="esd-block-text es-p20t"
                                                                                        esd-links-underline="none">
                                                                                        <p><a
                                                                                                target="_blank"></a>Copyright
                                                                                            © 2022 Company<a
                                                                                                target="_blank"></a>
                                                                                        </p>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>
