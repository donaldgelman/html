var vids = doors_cinema.concat(doors_cinema2, doors_tpfwwm, doors_txfftf, doors_txfiwtb);

function playpause() {
	if (myVideo.paused) {
		myVideo.play()
	}
	else {
		myVideo.pause()
	}
};

document.addEventListener('keydown', function(event) {
	    if (event.keyCode == 76 && myVideo.loop == false) {
		    myVideo.loop=true;
	    }
	    else if (event.keyCode == 76 && myVideo.loop == true) {
		    myVideo.loop=false;
  	    }
	    else if (event.keyCode == 80 && myVideo.paused == true) {
		    myVideo.play()
	    }
	    else if (event.keyCode == 80 && myVideo.paused == false) {
		    myVideo.pause()
	    }
});
function shuffle(array) {
          var currentIndex = array.length, temporaryValue, randomIndex;

          // While there remain elements to shuffle...
          while (0 !== currentIndex) {

                      // Pick a remaining element...
                      randomIndex = Math.floor(Math.random() * currentIndex);
                      currentIndex -= 1;

                      // And swap it with the current element.
                      temporaryValue = array[currentIndex];
                      array[currentIndex] = array[randomIndex];
                      array[randomIndex] = temporaryValue;
                    }

          return array;
}

function loadVideo()
{
    var video = document.getElementById('myVideo');
    var mp4 = document.getElementById('mp4Source');
    d = new Date();

    mp4Source.src=vids[0];

    video.load();
    video.play();
}

loadVideo();
