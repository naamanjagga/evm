<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="table">
        <h2 id="heading">VOTING IS FUNDAMENTAL RIGHT</h2>
        <table>
            <tr><td>B.J.P</td><td><button id="btn1" onclick="vote(1)">VOTE</button></td></tr>
            <tr><td>S.P</td><td><button id="btn2" onclick="vote(2)">VOTE</button></td></tr>
            <tr><td>B.S.P</td><td><button id="btn3" onclick="vote(3)">VOTE</button></td></tr>
            <tr><td>A.A.P</td><td><button id="btn4" onclick="vote(4)">VOTE</button></td></tr>
            <tr><td>naman's party</td><td><button id="btn5" onclick="vote(5)">VOTE</button></td></tr>
            <tr><td>no party</td><td><button id="btn6" onclick="vote(6)">VOTE</button></td></tr>
            <tr><td>CONGRESS</td><td><button id="btn7" onclick="vote(7)">VOTE</button></td></tr>
        </table>
       
    </div>
    <div id="right_div">
        <div>
           <button id="result" onclick="display()">RESULT</button>
        </div>
        <div id="score" ></div>
    </div>
</body>
</html>
<script>
    var array1 =[];
     var count1 =0;
     var count2 =0;
     var count3 =0;
     var count4 =0;
     var count5 =0;
     var count6 =0;
     var count7 =0;
     var count8 =0;
     function vote(x) {
        switch(x){
            case 1:
                count1++;
                break;
            case 2:
                count2++;
                break;
            case 3:
                count3++;
                break;
            case 4:
                count4++;
                break;
            case 5:
                count5++;
                break;
            case 6:
                count6++;
                break;
            case 7:
                count7++;
                break;

        }
        $.ajax({
            url: 'post.php',
            type: 'post',
            datatype: 'json',
            data: {
                action: 'voting',
                count1: count1,
                count2: count2,
                count3: count3,
                count4: count4,
                count5: count5,
                count6: count6,
                count7: count7
            },
            success: function(data){
                 array1 = JSON.parse(data);
                
            }
        })
     }
    function display(){
      html =  '<table><tr><th>PARTY</th><th>NO. OF VOTES</th></tr>'
      html += '<tr><td>B.J.P</td><td>'+ array1[0] +'</td></tr>'
      html += ' <tr><td>S.P</td><td>'+ array1[1] +'</td></tr>'
      html += ' <tr><td>B.S.P</td><td>'+ array1[2] +'</td></tr>'
      html += ' <tr><td>A.A.P</td><td>'+ array1[3] +'</td></tr>'
      html += ' <tr><td>namans party</td><td>'+ array1[4] +'</td></tr>'
      html += ' <tr><td>no party</td><td>'+ array1[5] +'</td></tr>'
      html += ' <tr><td>CONGRESS</td><td>'+ array1[6] +'</td></tr>'
      html += ' </table>'

      document.getElementById('score').innerHTML = html;
    }
</script>