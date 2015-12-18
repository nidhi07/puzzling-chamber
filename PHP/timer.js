var value, hrs, mins, secs, temp;
    if(localStorage.getItem("counter")){
      if(localStorage.getItem("counter") <= 0){
        location.replace("game_over.php?msg=Oops, Time UP!&time=0&img=images/game_over.png");
      }else{
        var value = localStorage.getItem("counter");
      }
    }else{
      var value = 3605;
    }
    function counter (){
     if(value ==3605){
        localStorage.setItem("counter", 3605);
        value = 3604;
      }else{
        value = parseInt(value)-1;
        if(value <= 0){
        location.replace("game_over.php?msg=Oops, Time UP!&time=0&img=images/game_over.png");}
        localStorage.setItem("counter", value);
      }
	  temp = localStorage.getItem("counter");
	  hrs = Math.floor(temp/3600);
      temp=temp%3600;
      mins= Math.floor(temp/60);
      secs=temp%60;
	  document.getElementById('divCounter').innerHTML = hrs + ":" + mins + ":" + secs ;
    };
setInterval("counter()", 1000);