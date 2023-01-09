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
                        <p style="color: #FEC36C; font-size: 24px;">Test à réaliser! </p>
                    </td>
                </tr>
                <tr>
                    <td style="color: #4f4f4f; font-size: 16px; font-family: Helvetica, Arial, sans-serif; line-height: 25px;">
                        <p style="color: #FEC36C; font-size: 24px;">Bonjour, {{ $data['tester']['name'] }}</p>
                    </td>
                </tr>
                <tr>
                    <td style="color: #4f4f4f; font-size: 16px; font-family: Helvetica, Arial, sans-serif; line-height: 25px;">
                        <p>Nous vous proposons de réaliser un test sur votre {{$data['scenario']['']}}<the selected technology by the client : ordinateur, tablette , telephone></p>
                        <!--We suggest that you carry out a test on your <the selected technology by the client: computer, tablet, telephone>-->
                    </td>
                </tr>
                <tr>
                    <td style="color: #4f4f4f; font-size: 16px; font-family: Helvetica, Arial, sans-serif; line-height: 25px;">
                        <p>{{$data['scenario']['titre_scenario']}} {{$data['scenario']['description']}}</p>
                        <!--<Scenario or Survey title> <Scenario or Survey description>-->
                    </td>
                </tr>
                <tr>
                    
                </tr>
                <tr>
                    <td style="font-size: 16px; line-height: 27px; font-family: Helvetica, Arial, sans-serif; color: #4f4f4f; ">
                    <a href="{{ $data['testUrl'] }}" style="border: 1px solid #e6e6e6; padding: 10px 10px; background-color: #0275d8; color: #ffffff; text-decoration: none; cursor: pointer;">Open</a>
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
