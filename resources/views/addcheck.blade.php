<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiselect</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
<link ref="stylesheet" href="asset{{'css/style.css'}}">
<style>
    #buttons{
    
    margin-top:20px;
    }

    body{
        margin:20px;
    }
</style>
</head>
<body>
    


<div class="row" style="margin-top:80px">

    <div class="col-xs-5">
    <div class="btn btn-primary btn-block">Group A</div>
    <button type="button" id="undo_redo_rightAll" class="btn btn-primary btn-block">REMOVE ALL FROM GROUP<i class="glyphicon glyphicon-forward"></i></button>
       <form method="post" action="/delete">
       @csrf
        <select name="from[]" id="undo_redo" class="form-control "size="13" multiple="multiple">
           @foreach($datas as $i)
            <option value="{{$i->id}}">{{$i->name}}</option>
            @endforeach
        </select>
        
        
    </div>
 
    <div class="col-xs-2" >
     
        <button class="btn btn-primary " type="submit" style="margin-top:40px">REMOVE FROM DATABASE</button>
        <button type="button" id="undo_redo_rightSelected"  name="rightselect" class="btn btn-primary btn-block" style="margin-top:40px">ADD TO GROUP B <i class="glyphicon glyphicon-chevron-right"></i></button>
        <button type="button" id="undo_redo_leftSelected"  class="btn btn-primary btn-block"style="margin-top:40px"> ADD TO GROUP A <i class="glyphicon glyphicon-chevron-left"></i></button>
      
   
     
    </div>
    </form>
    <div class="col-xs-5" >
    <div class="btn btn-primary btn-block">Group B</div>
    <button type="button" id="undo_redo_leftAll" class="btn btn-primary btn-block">REMOVE ALL FROM GROUP B <i class="glyphicon glyphicon-backward"></i></button>
        <select name="to[]" id="undo_redo_to" class="form-control" size="13" multiple="multiple">
        @foreach($datas2 as $i)
            <option value="{{$i->id}}">{{$i->name}}</option>
            @endforeach
        </select>
       
    </div>

 </div>
</form>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
 <script  src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="   crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="js/multiselect.min.js"></script>


<script>
$(document).ready(function(){

$(function() {   
  $('#undo_redo').multiselect();
 // $('select').selectpicker();

});


});

</script>
</body>
</html>