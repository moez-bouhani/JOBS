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
                        <p style="color: #FEC36C; font-size: 24px;">Hey,</p>
                    </td>
                </tr>
                <tr>
                    <td style="color: #4f4f4f; font-size: 16px; font-family: Helvetica, Arial, sans-serif; line-height: 25px;">
                        <p>Vous y êtes presque ! </p>
                    </td>
                </tr>
                <tr>
                    <td style="color: #4f4f4f; font-size: 16px; font-family: Helvetica, Arial, sans-serif; line-height: 25px;">
                        <p>Bienvenue dans la communauté Test UX! Notre de mission est de créer une communauté de testeurs et de designer UX / UI connecté partout au monde</p>
                    </td>
                </tr>
                <tr>
                    
                </tr>
                <tr>
                    <td style="font-size: 16px; line-height: 27px; font-family: Helvetica, Arial, sans-serif; color: #4f4f4f; ">
                    <a href="{{ $data['confirmEmailUrl'] }}" style="border: 1px solid #e6e6e6; padding: 10px 10px; background-color: #0275d8; color: #ffffff; text-decoration: none; cursor: pointer;">Confirmez votre adresse e-mail</a>
                    </td>
                </tr>
                <tr>
                    <td style="font-size: 16px; line-height: 27px; font-family: Helvetica, Arial, sans-serif; color: #4f4f4f;">
                        <p>A tout de suite,
                            <br/> L'équipe Test UX
                        </p>
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
