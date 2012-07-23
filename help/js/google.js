/*
*     this file is designed to get some user data and send it to google to get the matched distrobutions.
*		author czluck (czluck123@gmail.com)
*     2012-7-13
*
*
*
*
*/


function  test_gaJsHost { var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
			document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
		};
try {
				var pageTracker = _gat._getTracker("UA-6435079-1");
				pageTracker._trackPageview();
			} catch(err) {};