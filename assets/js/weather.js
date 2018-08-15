$(document).on("pagecreate", "#page_home",function(){
    var $content = $('#content_weather');
    var $description = $('#content_description');
    var $place = $('#content_place');
    var $pressure = $('#content_pressure');
    var $selectCity = $('#select_city');       
    $content.html("It works");
    {};
    var opts={
        q:'Tokyo',
        units:'metric',
        lang:'de',
        APPID:'e56c5866972cebc60f3d29e6b258800c'
    }
    init();
    function init(){
        var url=getApiUrl(opts);
        $.getJSON(url, viewData);
        $selectCity.change(changeCity);
    }    
    function changeCity(){
        $place.html("");
        $description.html("");
        $pressure.html("");
        opts.q = $(this).val();          
        $.getJSON(getApiUrl(opts), viewData);
    }
    //bei einer klaren Datenlieferung per JSON kann man nehmen
        
    function viewData(data){  
        console.log(data);
        var icon = data.weather[0].icon;
        var iconUrl = 'https://api.openweathermap.org/img/w/'+ icon + '.png';
        var picUrl = 'assets/images/'+data.name+'.jpg';
        $content.html(null);
        $('<h2>').text(data.name).appendTo($place);
        $('<img>').attr('src', picUrl).css({
            width:'120px',
            height:'150px'
        }).appendTo($place);          
        $('<h3>').text('Temperatur: ' + parseInt(data.main.temp) + '°C').appendTo($content);
        $('<h4>').text('Höchsttemperatur: ' + data.main.temp_max + '°C').appendTo($content);
        $('<h4>').text('Tiefsttemperatur: ' + data.main.temp_min + '°C').appendTo($content);        
        $('<img>').attr('src', iconUrl).appendTo($content); 
        $('<h3>').text('Nähere Information: \n').appendTo($description);
        $('<h4>').text(data.weather[0].description).css({
            paddingRight:'5%'
        }).appendTo($description);
        $('<h4>').text('\nWind: ' + data.wind.speed + ' km/h').appendTo($description);        
        $('<h3>').text('Luftdruck: ').appendTo($pressure);
        $('<h4>').text(data.main.pressure + ' Pascal').appendTo($pressure);
    }
    function getApiUrl(args){
        var url='https://api.openweathermap.org/data/2.5/weather?';          
        $.each(args, function(key,value){
            url += key + '=' + value + "&"; 
        });        
        return url;
    };
    
    
});

