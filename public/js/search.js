var script = document.createElement('script');
script.src = 'http://code.jquery.com/jquery-latest.min.js';
script.type = 'text/javascript';

$("document").ready(function(){
    $("#form-search").submit(function(e){
        e.preventDefault();
        var word = $("input#word").val();

        $.ajax({
            type: "POST",
            url : "/search",
            data : word,
            success : function(data){
                console.log(data);
            }
        },"json");
    });
});