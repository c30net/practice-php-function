$('#btnSp').click(function(e){
    e.preventDefault();
    var inputSp = $('#inputSp').val();
    $.ajax({
        type: 'POST',
        url: 'process.php',
        data: {inputSp:inputSp},
        success: function(res){
            $('#showResult').html(res);
        }

    })
})


$('#btnSc').click(function(e){
    e.preventDefault();
    var inputSc = $('#inputSc').val();
    $.ajax({
        type: 'POST',
        url: 'process.php',
        data: {inputSc:inputSc},
        success: function(res){
            $('#showResult').html(res);
        }

    })
})

$('#btnList').click(function(e){
    e.preventDefault();
    var sex = $('#sex').val();
    console.log(sex);
    $.ajax({
        type: 'POST',
        url: 'process.php',
        data: {sex:sex},
        success: function(res){
            $('#showResult').html(res);
        }

    })
})


