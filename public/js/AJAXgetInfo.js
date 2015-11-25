$(document).ready(function(){

    var body = $('body');

    /**
     * get salary table
     */
    body.on('change', '#choose > div > select', function(e){
        var id = e.target.value;
        var myDiv = $('#select_result');
        $.ajax({
            url: location.pathname,
            data: "id=" + id,
            success: function(data){
                $('#checkbox_result').html('').attr('hidden', 'hidden');
                myDiv.removeAttr('hidden').html(data);
//                console.log(data);
            },
            error: function()
            {
                alert('Error during db request');
            },
            complete: function(data)
            {
//                console.log(data);
            }
        });
    });

    /**
     * get subordinates
     */
    body.on('change', '#select_result > table > caption > input[type=checkbox]', function(e){
        var myDiv = $('#checkbox_result');
        if ($(this).is(':checked')) {
            var id = e.target.value;

            $.ajax({
                url: location.pathname,
                data: "subordination=" + id,
                success: function(data){
                    myDiv.removeAttr('hidden').html(data);
                },
                error: function()
                {
                    alert('Error during db request');
                },
                complete: function(data)
                {
//                console.log(data);
                }
            });
        } else {
            myDiv.html('').attr('hidden', 'hidden');
        }
    });

    /**
     * clean results
     */
    body.on('click', '#clean-button', function(){
        $('#checkbox_result').html('').attr('hidden', 'hidden');
        $('#select_result').html('').attr('hidden', 'hidden');
    });
});