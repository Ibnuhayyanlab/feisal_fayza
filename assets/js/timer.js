function makeTimer() {

	//		var endTime = new Date("29 April 2018 9:56:00 GMT+01:00");	
		var endTime = new Date("5 Feb 2022 07:00:00 GMT+07:00");			
			endTime = (Date.parse(endTime) / 1000);

			var now = new Date();
			now = (Date.parse(now) / 1000);
if(endTime>=now){
			var timeLeft = endTime - now;

			var days = Math.floor(timeLeft / 86400); 
			var hours = Math.floor((timeLeft - (days * 86400)) / 3600);
			var minutes = Math.floor((timeLeft - (days * 86400) - (hours * 3600 )) / 60);
			var seconds = Math.floor((timeLeft - (days * 86400) - (hours * 3600) - (minutes * 60)));
  
			if (hours < "10") { hours = "0" + hours; }
			if (minutes < "10") { minutes = "0" + minutes; }
			if (seconds < "10") { seconds = "0" + seconds; }

			$("#time").html(days + " <span>Hari :</span> "+hours + " <span>Jam :</span> "+minutes + " <span>Menit :</span> "+seconds + " <span>Detik </span>");
					
} else {

    $("#time").html("Terimakasih Atas Doa dan Restunya ");
    $("#titletime").html("Alhamdulillah  ");
}
	}

	setInterval(function() { makeTimer(); }, 1000);