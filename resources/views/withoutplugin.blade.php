<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>without plugin</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <script>
    $(document).ready(function(){

$('button').click(function(){
array=[];
    $('.main option:selected'),function(){

        array.push($(this)).val();
    }

});
       
    });
    </script>
</head>
<body>
    
    <div>
    <select class="main">
    <option>hello</option>
    <option>hey</option>
    <option>hi</option>
    </select>
    </div>
    <button>submit</button>
</body>
</html>