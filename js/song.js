// document.getElementById("defaultOpen").click();

//   document.getElementById('mute-sound').style.display = 'none';
//   document.getElementById('unmute-sound').addEventListener('click', function (event) {
//     document.getElementById('unmute-sound').style.display = 'none';
//     document.getElementById('mute-sound').style.display = 'inline-block';
//     document.getElementById('song').play();
//   });

//   document.getElementById('mute-sound').addEventListener('click', function (event) {
//     document.getElementById('mute-sound').style.display = 'none';
//     document.getElementById('unmute-sound').style.display = 'inline-block';
//     document.getElementById('song').pause();
//   });

var musik=new Audio();
musik.src="../song/background.mp3";
musik.loop=true;
musik.play();