/*
*		This file is designed to make some efficts to come true ;
*     author czluck (czluck123@gmail.com)
*     2012-07-13
*
*
*/


	function setHelp(AbC)
			{
				Bb = document.getElementById('helpval');
				Bb.value = AbC;
			}

	function hideHelps()
			{
				Bb = document.getElementById('helpval');
				if (Bb.value != "0")
				{
					showHide("help" + Bb.value);
				}
			}

	function setValue(AbC, AbB, AbA, AbM, AbQ)
			{
				Bb = document.getElementById(AbB);
				//alert(AbB);
				Bb.value = AbC;
				AbMC = 1;
				do
				{
					Bq = document.getElementById("answer_" + AbQ + "_" + AbMC);
					//alert("answer_" + AbQ + "_" + AbMC);
					Bq.className = '';
					AbMC++;
				}
				while (AbMC <= AbM)
				Bc = document.getElementById(AbA);
				Bc.className = 'selected_answer';
			}
