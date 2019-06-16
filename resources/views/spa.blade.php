<!DOCTYPE html> 
<html> 
<head> 
    <title>QRCODE</title> 
</head> 
<body> 
    <table  width="100%"> 
    <tr> 
 
       @foreach($spas  as $p) 
       <td align="center"  style="border: lpx solid #ccc"> 
        {{$p->name}}
       <div>{!! QrCode::generate($p->qrcode); !!}</div>
      {{$p->qrcode }}
      </td>
     
     
     @endforeach
    </tr>
   </tsble>
  </body>
</html>