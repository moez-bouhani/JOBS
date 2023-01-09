@extends('email.master')

@section('main_content')        
    <tr>
        <td align="center" style="padding: 0px 15px;" class="padding">
            <!--[if (gte mso 9)|(IE)]>
        <table align="center" border="0" cellspacing="0" cellpadding="0" width="456">
        <![endif]-->
            <table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#ffffff">
                <tr>
                    <td style="color: #4f4f4f; font-size: 16px; font-family: Helvetica, Arial, sans-serif; line-height: 25px;">
                        <p style="color: #FEC36C; font-size: 24px;">Bonjour, {{ $data['name'] }}</p>
                    </td>
                </tr>
                <tr>
                    <td style="color: #4f4f4f; font-size: 16px; font-family: Helvetica, Arial, sans-serif; line-height: 25px;">
                        <p>Merci pour votre commande! Nous vous enverrons un e-mail une fois l'analyse de votre test est terminée et vos vidéos prêtes à être visionnées.</p>
                    </td>
                </tr>
                <tr>
                    <td style="color: #4f4f4f; font-size: 16px; font-family: Helvetica, Arial, sans-serif; line-height: 25px;">
                        <p>Vous souhaitez suivre la progression de votre commande? Vous pouvez vous diriger vers le tableau de bord de votre compte pour voir la progression de votre test ou créer un nouveau test.</p>
                    </td>
                </tr>
                <tr>
                    <td style="font-size: 16px; line-height: 27px; font-family: Helvetica, Arial, sans-serif; color: #4f4f4f;">
                        <p>L'équipe Test UX</p>
                    </td>
                </tr>
                <tr>
                    <td height="40">&nbsp;</td>
                </tr>
            </table>
            <!--[if (gte mso 9)|(IE)]>
        </table>
        <![endif]-->
        </td>
    </tr>
@stop                                 
