<!DOCTYPE html>
<html>
<head>
    
    
<script>
    
    var activeup =false;   
    var activedown =false; 
        function start_countup(){
        if(activeup){
        var timer = document.getElementById("timer_up").innerHTML;
        var arr=timer.split(":");
        var hour=arr[0];
        var min=arr[1];
        var sec=arr[2];
        if(sec==59){
            if(min==59){
                hour++;
                min=0;
                
                if(hour<10)hour= "0" + hour;
            }else{
                min++;
            }
            if(min<10)min= "0" +min;
            sec=0;
        }else{
            sec++;
            if (sec<10) sec="0" +sec;
        }
        document.getElementById("timer_up").innerHTML = hour+":"+min+":"+sec;
        setTimeout(start_countup,1000);
         
    }
}

    function changeState_up(){
    if(activeup == false){
        activeup = true;
        start_countup();
        console.log("Timer has been started");
        document.getElementById("control_up").innerHTML="PAUSE";
    }else{
        activeup=false;
        console.log("Timer is on pause");
        document.getElementById("control_up").innerHTML="START";
    }
}
    
    function start_countdown(){
        if(activedown){
        var timer = document.getElementById("timer_down").innerHTML;
        var arr=timer.split(":");
        var hour=arr[0];
        var min=arr[1];
        var sec=arr[2];
        if(sec==0){
            if(min==0){
                if(hour==0){
                    alert("Time out");
                    window.location.reload();
                    return;
                }
                hour--;
                min=60;
                if(hour<10)hour= "0" + hour;
            }
            min--;
            if(min<10)min= "0" +min;
            sec=59;
        }
        else sec--;
        
        if (sec<10) sec="0" +sec;
        
        document.getElementById("timer_down").innerHTML = hour+":"+min+":"+sec;
        setTimeout(start_countdown,1000);
        
        }
    
    }
    

 
    function changeState_down(){
    if(activedown == false){
        activedown = true;
        start_countdown();
        console.log("Timer has been started");
        document.getElementById("control_down").innerHTML="PAUSE";
    }else{
        activedown=false;
        console.log("Timer is on pause");
        document.getElementById("control_down").innerHTML="START";
    }
}    
    function startTime() {
    var today = new Date();
    var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();
    m = checkTime(m);
    s = checkTime(s);

    var time =  h + ":" + m;
    document.getElementById('txt').innerHTML =time  + ":" + s;
    var t = setTimeout(startTime, 500);
    return time;
}

function checkTime(i) {
    if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
}

    function showTime(){
        var time = startTime();
        return time;
    }
    
    function countTime(){
    var h = 0;
    var m = 0;
    var s = 0;
    m = checkTime(m);
    s = checkTime(s);
    var time =  h + ":" + m;
    document.getElementById('count').innerHTML =time  + ":" + s;
    var t = setTimeout(startTime, 500);
        
        
        
        
    }

    function reset(){
        activeup=false;
    document.getElementById("timer_up").innerHTML = "00"+":"+"00"+":"+"00";
    console.log("Timer has been reset");
        document.getElementById("control_up").innerHTML="START";
}
    
</script>
    
    <style>


        button{
            text-align: center;
            width: 135px;
            height: 30px;
        }
        
        .txttime{
            margin-left: 15px;
            font-size: 30px;
            
        }
        
        #timer_down{
            color:red;
            
        }
        
    </style>
    
    
</head>

<body  onload="startTime()">

    <h1 class="txttime"><div id="txt">    </div> </h1>
    <h1 class="txttime" ><span id="timer_up" >00:00:00</span></h1>
    
    <button id="control_up" onclick="changeState_up();">START</button>
    
    <button  type="button" onclick="onOffbar()">Break Time</button><br>
    
    
    
    <div id="breakbar" ><h1 class="txttime"><span id ="timer_down" >00:00:10</span></h1>
        
    <button onclick="changeState_down();" id="control_down">START</button>
        
    </div>
    <button id="reset" onclick="reset();">Finish</button>
    <br>

    
    <script>
        function onOffbar() {
    var x = document.getElementById("breakbar");
    if (x.style.display !== "none") {
        x.style.display = "none";
       
    } else {
        x.style.display = "block";
    }
}
    </script>

</body>
</html>
