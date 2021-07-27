

//scroll fixe bottom

document.getElementsByClassName('scroll')[0].scrollTop = document.getElementsByClassName('scroll')[0].scrollHeight;

//auto refresh


$(document).ready(function(){
    
    setInterval(function(){
          $("#chatbox").load(window.location.href + " #chatbox" );
    }, 3000);

    setInterval(function(){
        document.getElementsByClassName('scroll')[0].scrollTop = document.getElementsByClassName('scroll')[0].scrollHeight;
    }, 3010);

    });


