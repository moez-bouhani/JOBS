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
                        <p style="color: #FEC36C; font-size: 24px;">Bonjour {{$data['name']}},</p>
                    </td>
                </tr>
                <tr>
                    <td style="color: #4f4f4f; font-size: 16px; font-family: Helvetica, Arial, sans-serif; line-height: 25px;">
                        <p>Merci de votre intérêt pour Test UX.Nous vous proposons trois sessions gratuites pour que vous puissiez prendre notre plateforme pour un essai routier!

Tout ce que vous avez à faire est de suivre les trois étapes ci-dessous et vous serez sur la bonne voie pour des tests satisfaisants et des analyses rapides des insights des clients </p>
                    </td>
                </tr>
                <tr>
                    <td style="color: #4f4f4f; font-size: 16px; font-family: Helvetica, Arial, sans-serif; line-height: 25px;">
                        <b>Voici comment commencer</b>
                    </td>
                </tr>
                <tr>
                    <td style="color: #4f4f4f; font-size: 16px; font-family: Helvetica, Arial, sans-serif; line-height: 25px;">
                        <p>Étape 1: Se connecter à votre compte en utilisant ce mot de passe temporaire {{$data['pass']}}</p>
                    </td>
                </tr>
                <tr>
                    <td style="color: #4f4f4f; font-size: 16px; font-family: Helvetica, Arial, sans-serif; line-height: 25px;">
                        <p>Étape 2: Configurez votre compte!</p>
                    </td>
                </tr>
                <tr>
                    <td style="color: #4f4f4f; font-size: 16px; font-family: Helvetica, Arial, sans-serif; line-height: 25px;">
                        <p>Étape 3: Configurez votre premier test, vous auriez 3 sessions offertes par Test UX afin de mieux comprendre le fonctionnement de notre plateforme et tester la performance de nos outils d'analyse de données</p>
                    </td>
                </tr>
                <tr>
                    <td style="color: #4f4f4f; font-size: 16px; font-family: Helvetica, Arial, sans-serif; line-height: 25px;">
                        <p>Étape 4: Lisez un livre, faites une sieste, consultez votre courrier électronique. Tout ce que vous pouvez faire pendant que vous attendez un maximum de 24 heures pour que de précieuses informations humaines arrivent dans votre tableau de bord!</p>
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
