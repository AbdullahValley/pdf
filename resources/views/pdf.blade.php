<!DOCTYPE HTML>
<html lang="{{ app()->getLocale() }}" class="fullscreen-bg">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ public_path('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ public_path('css/pdf.css') }}">

    <title>Project</title>

</head>
<body>
<div class="container">
    <div class="book">


        <div class="page">
            <div class="subpage">

                <div align="center">
                    <br><br><br><br><br>
                    <br><br><br><br><br>
                    <br><br><br><br><br>

                    <h1>VUOKRASOPIMUS</h1>

                    <h2>HALLITILA </h2><br><br>

                    <h3>Redorent ID {{  '[ #appartment_id ]' }}</h3>
                    <h3>{{ ' [ #appartment_address ]' }}</h3>
                </div>

            </div>
        </div>

        <div style="page-break-before:always">

        </div>


        <div class="page">
            <div class="subpage">

                <h1 align="center">VUOKRASOPIMUS</h1>

                <br><br>

                <div class="panel panel-default">

                    <div class="panel-body">


                        1. OSAPUOLET <br><br>

                        <div class="pull-left">
                            VUOKRANANTAJA
                        </div>

                        <div class="pull-right">

                            {{ '[ #landlord->first_name ]' }} {{ '[ #landlord->last_name ]' }}<br>
                            {{ '[ #landlord->current_address ]' }}<br>
                            {{ '[ #landlord->email ]' }}<br>
                            {{ '[ #landlord->phone_number ]' }}<br>

                        </div>

                        <div class="clearfix"></div>


                        <br><br>VUOKRALAINEN

                        <div class="pull-right">

                            {{ '[ #tenant->first_name ]' }} {{ '[ #tenant->last_name ]' }}<br>
                            {{ '[ #tenant->ssn ]' }}<br>
                            {{ '[ #tenant->current_address ]' }}<br>
                            {{ '[ #tenant->email ]' }}<br>
                            {{ '[ #tenant->phone_number ]' }}<br>

                        </div>
                    </div>

                </div>



                <div class="panel panel-default">

                    <div class="panel-body">


                        2. VUOKRAKOHDE <br><br>

                        <div class="pull-left">
                            Osoite:<br>
                            Talotyyppi:<br>
                            Kerros:<br>
                            Huoneiden lukumäärä:<br>
                        </div>

                        <div class="pull-right">

                            {{ '[ #contract->apartment_address ]' }}<br>
                            {{ '[ #contract->building_type  ]' }}<br>
                            {{ '[ #contract->email ]' }}<br>
                            {{ '[ #contract->room_count ]' }}<br>

                        </div>

                        <div class="clearfix"></div>




                    </div>

                </div>



                <div class="panel panel-default">

                    <div class="panel-body">


                        3. SOPIMUKSEN EHDOT <br><br>

                        <div class="pull-left">
                            Osoite:<br>
                            Talotyyppi:<br>
                            Kerros:<br>
                            Huoneiden lukumäärä:<br>
                        </div>

                        <div class="pull-right">

                            {{ '[ #contract->apartment_address ]' }}<br>
                            {{ '[ #contract->building_type  ]' }}<br>
                            {{ '[ #contract->email ]' }}<br>
                            {{ '[ #contract->room_count ]' }}<br>

                        </div>

                        <div class="clearfix"></div>


                    </div>
                </div>

                <div class="panel panel-default">

                    <div class="panel-body">


                        4. Vuokralainen <br><br>

                        <div class="pull-left">
                            Osoite:<br>
                            Talotyyppi:<br>
                            Kerros:<br>
                            Huoneiden lukumäärä:<br>
                        </div>

                        <div class="pull-right">

                            {{ '[ #contract->apartment_address ]' }}<br>
                            {{ '[ #contract->building_type  ]' }}<br>
                            {{ '[ #contract->email ]' }}<br>
                            {{ '[ #contract->room_count ]' }}<br>

                        </div>

                        <div class="clearfix"></div>


                    </div>
                </div>

            </div>
        </div>

        <div style="page-break-before:always">

        </div>


        <div class="page">
            <div class="subpage">

                <h1 align="center">VUOKRASOPIMUS</h1>

                <br><br>



                <div class="panel panel-default">

                    <div class="panel-body">


                        5. VUOKRAKOHDE <br><br>

                        <div class="pull-left">
                            Osoite:<br>
                            Talotyyppi:<br>
                            Kerros:<br>
                            Huoneiden lukumäärä:<br>
                        </div>

                        <div class="pull-right">

                            {{ '[ #contract->apartment_address ]' }}<br>
                            {{ '[ #contract->building_type  ]' }}<br>
                            {{ '[ #contract->email ]' }}<br>
                            {{ '[ #contract->room_count ]' }}<br>

                        </div>

                        <div class="clearfix"></div>




                    </div>

                </div>

                <div class="panel panel-default">

                    <div class="panel-body">


                        6. VUOKRAKOHDE <br><br>

                        <div class="pull-left">
                            Osoite:<br>
                            Talotyyppi:<br>
                            Kerros:<br>
                            Huoneiden lukumäärä:<br>
                        </div>

                        <div class="pull-right">

                            {{ '[ #contract->apartment_address ]' }}<br>
                            {{ '[ #contract->building_type  ]' }}<br>
                            {{ '[ #contract->email ]' }}<br>
                            {{ '[ #contract->room_count ]' }}<br>

                        </div>

                        <div class="clearfix"></div>




                    </div>

                </div>

                <div class="panel panel-default">

                    <div class="panel-body">


                        7. VUOKRAKOHDE <br><br>

                        <div class="pull-left">
                            Osoite:<br>
                            Talotyyppi:<br>
                            Kerros:<br>
                            Huoneiden lukumäärä:<br>
                        </div>

                        <div class="pull-right">

                            {{ '[ #contract->apartment_address ]' }}<br>
                            {{ '[ #contract->building_type  ]' }}<br>
                            {{ '[ #contract->email ]' }}<br>
                            {{ '[ #contract->room_count ]' }}<br>

                        </div>

                        <div class="clearfix"></div>




                    </div>

                </div>

                <div class="panel panel-default">

                    <div class="panel-body">


                        8. SOPIMUKSEN EHDOT <br><br>

                        <div class="pull-left">
                            Osoite:<br>
                            Talotyyppi:<br>
                            Kerros:<br>
                            Huoneiden lukumäärä:<br>
                        </div>

                        <div class="pull-right">

                            {{ '[ #contract->apartment_address ]' }}<br>
                            {{ '[ #contract->building_type  ]' }}<br>
                            {{ '[ #contract->email ]' }}<br>
                            {{ '[ #contract->room_count ]' }}<br>

                        </div>

                        <div class="clearfix"></div>


                    </div>
                </div>

                <div class="panel panel-default">

                    <div class="panel-body">


                        9. Vuokralainen <br><br>

                        <div class="pull-left">
                            Osoite:<br>
                            Talotyyppi:<br>
                            Kerros:<br>
                            Huoneiden lukumäärä:<br>
                        </div>

                        <div class="pull-right">

                            {{ '[ #contract->apartment_address ]' }}<br>
                            {{ '[ #contract->building_type  ]' }}<br>
                            {{ '[ #contract->email ]' }}<br>
                            {{ '[ #contract->room_count ]' }}<br>

                        </div>

                        <div class="clearfix"></div>


                    </div>
                </div>

            </div>
        </div>

        <div style="page-break-before:always">

        </div>

        <div class="page">
            <div class="subpage">

                <h1 align="center">OHJEET VUOKRALAISELLE</h1>

                <br><br>



                <div class="panel panel-default">

                    <div class="panel-body">


                        <b>1. Roskat</b> <br><br>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>



                        <br><br><b>2. Vastuut</b> <br><br>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>



                        <br><br><b>3. Avaimet</b> <br><br>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>

                        <br><br><b>4. Avaimet</b> <br><br>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>

                        <br><br><b>5. Avaimet</b> <br><br>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>



                        <div class="clearfix"></div>




                    </div>

                </div>


            </div>
        </div>


        <div class="divFooter">Copyright © 2016 -2018, Redorent Oy. All Rights Reserved.</div>
    </div>
</div>
</body>
</html>