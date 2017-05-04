
$( document ).ready(function(event) {

		var bleep = new Audio();
    bleep.src = 'audio/key_beep.mp3';
    var error = new Audio();
    error.src = 'audio/error_beep.mp3';
		var selfdestruct = new Audio();
		selfdestruct.src = 'audio/self_destruct.mp3';
		var confirm  = new Audio();
    confirm.src = 'audio/confirm_beep.mp3';
		var victory  = new Audio();
    victory.src = 'audio/victory-song.mp3';

		var danceGraphic= new Array();
		danceGraphic[0]="img/tng-dance.gif";
		danceGraphic[1]="img/stormtrooper1-dance.gif";
		danceGraphic[2]="img/classic-trek-dance.gif";
		danceGraphic[3]="img/vader-dance.gif";
		danceGraphic[4]="img/tng-borg-dance.gif";
		danceGraphic[5]="img/jedi-dance.jpg";
		danceGraphic[6]="img/bobba-dance.gif";
		danceGraphic[7]="img/yoda-dance.gif";
		danceGraphic[8]="img/ironman-group.gif";
		danceGraphic[9]="img/ironman-party.gif";



	var attempts=0;

  $(".btn").click(function() {

    if(this.value=="ENTER"){
			$("#keypad").submit();
		}else if(this.value=="RELOAD"){
				location.reload();
		}else{
			bleep.play();
			if(this.value=="CLEAR"){
				infoMessage("ENTER PASSCODE");
			}else{
				numberMessage(this.value);
			}
		}

  });

  $('form').on('submit',function(event) {
		var data = $(this).serialize();
		$('#console').val("");

		$.ajax({
			type: 'POST',
			url: 'auth.php?'+data,
			success: function (result){
				if(result!="CONFIRMED!"){
					error.play();
					infoMessage(result);
					attempts++;
					if(attempts>=10){
						infoMessage("SELF DESTRUCT!");
						selfdestruct.play();
						attempts=0;

						$("#keypad").effect("shake", { direction: "up", times: 4, distance: 5}, 100).delay(1200);
						$("#keypad").effect("shake", { direction: "left", times: 4, distance: 5} ,100).delay(1200);
						$("#keypad").effect("shake", { direction: "up", times: 4, distance: 5}, 100).delay(1200);
						$("#keypad").effect("shake", { direction: "left", times: 4, distance: 5} ,100).delay(1200);
						$("#keypad").effect("shake", { direction: "up", times: 4, distance: 5}, 100).delay(1200);
						$("#keypad").effect("shake", { direction: "left", times: 4, distance: 5} ,100).delay(1200);
						$("#keypad").effect("shake", { direction: "up", times: 4, distance: 5}, 100).delay(1200);
						$("#keypad").effect("shake", { direction: "left", times: 4, distance: 5} ,100).delay(1200);
						$("#keypad").effect("explode", {pieces: 100}, 3000, function(){
								$("#keypadDiv").html("<p>Sorry, you triggered the destruct sequence!</p><p>Didn't I tell you <br>not to do that?</p><p><a href='javascript:location.reload();'>Try Again!</a></p>");
						});

					}


				}else{
					infoMessage(result);
					confirm.play();
					infoMessage("ACCESS GRANTED!");
					victory.play();
					var max = danceGraphic.length;
					var num = getRandomInt(0,max);
					//console.log(getRandomInt(0,max));

					$("#keypadDiv").html("<p>ACCESS GRANTED! <br>You're GEEK enough for our dance party!<br><img src='"+danceGraphic[num]+"' width='400' class='img-responsive'></p>");
					victory.addEventListener("ended", function(){
		      	victory.currentTime = 0;
		      	$("#keypadDiv").html("<p>NOW YOU KNOW<br> THE DANCE CODE!</p><p><a href='javascript:location.reload();'>Play Again?</a></p><p>RANDOM DANCE EVERY TIME!</p><p>&nbsp;</p>");
					});

				}

			}
		});
		event.preventDefault();
	});

	function numberMessage(num){
		var g_console = $('#console');
		var cur_status = g_console.attr("data-status");
		if(cur_status=="message"){
			g_console.val("");
			g_console.attr("data-status", "number");
		}
		var curVal = g_console.val();
		g_console.val(curVal+num);
	}

	function infoMessage(msg){

		var g_console = $('#console');
		g_console.val(msg);
		console.log(msg);
		g_console.attr("data-status", "message");
	}

	/*Helper functions*/

	function postpone( func ){
	  window.setTimeout(func,0);
	}

	function getRandomInt(min, max) {
	  min = Math.ceil(min);
	  max = Math.floor(max);
	  return Math.floor(Math.random() * (max - min)) + min;
	}

});
