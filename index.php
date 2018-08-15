<!DOCTYPE html>
<html>
    <head>
        <title>jQuery Mobile page</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="assets/css/themes/mycolors.css" />
        <link rel="stylesheet" href="assets/css/themes/jquery.mobile.icons.min.css" />
        <link href="assets/css/styles.css" rel="stylesheet" type="text/css"/>
        <!--<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile.structure-1.4.5.min.css" /> 
        <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script> 
        <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script> -->
        <link rel="stylesheet" href="assets/css/jquery.mobile.structure-1.4.5.min.css" /> 
        <script src="assets/js/jquery-1.11.1.min.js"></script> 
        <script src="assets/js/jquery.mobile-1.4.5.min.js"></script>
        <script src="assets/js/weather.js" type="text/javascript"></script>

    </head>
    <body>

        <div data-role="page" id="page_home">
            <div data-role="header" data-position="fixed">
                <h1>Das Wetter</h1>
            </div>
            <div data-role="content"> 
                <div class="ui-field-contain">    
                    <select data-native-menu="false" id="select_city" data-iconpos="left">
                        <option value="">Bitte Stadt wählen</option>        
                        <option value="Bangkok">Bangkok</option>
                        <option value="Berlin, de">Berlin</option>
                        <option value="London">London</option>
                        <option value="New York">New York</option>
                        <option value="Paris">Paris</option>
                        <option value="Tokyo">Tokyo</option>
                        <option value="Rio">Rio</option>
                    </select>
                </div>
                <div class="ui-grid-a"><!--grid-a ist zweispaltig-->
                    <div class="ui-block-a" id="content_place">

                    </div>
                    <div class="ui-block-b">
                        <div id="content_weather"></div>                            
                    </div>
                    <hr>
                    <div class="ui-block-a">
                        <div id="content_description"></div>                            
                    </div>
                    <div class="ui-block-b">
                        <div id="content_pressure"></div>
                    </div>

                </div>
                <hr>
                <div data-role="footer" data-position="fixed">
                    <p>&copy; 2018</p>
                </div>
                
            </div>

    </body>
</html>