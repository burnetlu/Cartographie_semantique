var wordnetF= 'http://wordnetweb.princeton.edu/perl/webwn?o2=&o0=&o8=1&o1=&o7=&o5=&o9=&o6=&o3=&o4=&s=$TARGET';
var wordnetR= '#<a href="[^s]*s=(?<node>[^"&]*)">(?<data>[^<]*)</a>#';
var SteamF= 'http://steamcommunity.com/$TARGET/friends';
var SteamR = '#<a class="[^"]*" href="http://steamcommunity.com/(?<node>[^"]*)"></a> <div class="[^"]*"> <img src="[^"]*"> </div> <div class="[^"]*"> (?<data>[^>]*)<br>#'
var DebianF = 'https://packages.debian.org/wheezy/$TARGET';
var DebianR = '#dep:</span> <a href="/wheezy/(?<node>[^"]*)">(?<data>[^<]*)</a>#';

function autoRempl(number){

	if(number){
		if(number==1)
		{
			var dest = document.getElementById ('f');
			dest.value = wordnetF;
			var dest2 = document.getElementById ('r');
			dest2.value = wordnetR; 

		}

		if(number==2)
		{
			var dest = document.getElementById ('f');
			dest.value = SteamF;
			var dest2 = document.getElementById ('r');
			dest2.value = SteamR; 
		}

		if(number==3)
		{
			var dest = document.getElementById ('f');
			dest.value = DebianF;
			var dest2 = document.getElementById ('r');
			dest2.value = DebianR; 

		}

	}	
  
}
