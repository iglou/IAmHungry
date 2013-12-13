$(document).ready(function(){
			$('#res button').click(function(){
				if($('input[name="ingredient"]:checked').val() == "farine"){
					if($('input[name="contenant"]:checked').val() == "cac") {$('#resultats').html('4 grammes');}
					else if($('input[name="contenant"]:checked').val() == "cas"){$('#resultats').html('12 grammes');}
					else if($('input[name="contenant"]:checked').val() == "verre"){$('#resultats').html('100 grammes');}
					else if($('input[name="contenant"]:checked').val() == "tac"){$('#resultats').html('70 grammes');}}
				else if($('input[name="ingredient"]:checked').val() == "sucre"){
					if($('input[name="contenant"]:checked').val() == "cac") {$('#resultats').html('5 grammes');}
					else if($('input[name="contenant"]:checked').val() == "cas"){$('#resultats').html('20 grammes');}
					else if($('input[name="contenant"]:checked').val() == "verre"){$('#resultats').html('240 grammes');}
					else if($('input[name="contenant"]:checked').val() == "tac"){$('#resultats').html('120 grammes');}}
				else if($('input[name="ingredient"]:checked').val() == "sel"){
					if($('input[name="contenant"]:checked').val() == "cac") {$('#resultats').html('5 grammes');}
					else if($('input[name="contenant"]:checked').val() == "cas"){$('#resultats').html('15 grammes');}
					else if($('input[name="contenant"]:checked').val() == "verre"){$('#resultats').html('115 grammes');}
					else if($('input[name="contenant"]:checked').val() == "tac"){$('#resultats').html('90 grammes');}}
				else if($('input[name="ingredient"]:checked').val() == "huile"){
					if($('input[name="contenant"]:checked').val() == "cac") {$('#resultats').html('4 mL');}
					else if($('input[name="contenant"]:checked').val() == "cas"){$('#resultats').html('15 mL');}
					else if($('input[name="contenant"]:checked').val() == "verre"){$('#resultats').html('20 cL');}
					else if($('input[name="contenant"]:checked').val() == "tac"){$('#resultats').html('10 cL');}}
				else if($('input[name="ingredient"]:checked').val() == "liquide"){
					if($('input[name="contenant"]:checked').val() == "cac") {$('#resultats').html('5 mL');}
					else if($('input[name="contenant"]:checked').val() == "cas"){$('#resultats').html('15 mL');}
					else if($('input[name="contenant"]:checked').val() == "verre"){$('#resultats').html('20 cL');}
					else if($('input[name="contenant"]:checked').val() == "tac"){$('#resultats').html('10 cL');}}
				else if($('input[name="ingredient"]:checked').val() == "semoule"){
					if($('input[name="contenant"]:checked').val() == "cac") {$('#resultats').html('4 grammes');}
					else if($('input[name="contenant"]:checked').val() == "cas"){$('#resultats').html('12 grammes');}
					else if($('input[name="contenant"]:checked').val() == "verre"){$('#resultats').html('125 grammes');}
					else if($('input[name="contenant"]:checked').val() == "tac"){$('#resultats').html('72 grammes');}}
				else if($('input[name="ingredient"]:checked').val() == "riz"){
					if($('input[name="contenant"]:checked').val() == "cac") {$('#resultats').html('6 grammes');}
					else if($('input[name="contenant"]:checked').val() == "cas"){$('#resultats').html('18 grammes');}
					else if($('input[name="contenant"]:checked').val() == "verre"){$('#resultats').html('160 grammes');}
					else if($('input[name="contenant"]:checked').val() == "tac"){$('#resultats').html('72 grammes');}}
				else if($('input[name="ingredient"]:checked').val() == "beurre"){
					if($('input[name="contenant"]:checked').val() == "cac") {$('#resultats').html('5 grammes');}
					else if($('input[name="contenant"]:checked').val() == "cas"){$('#resultats').html('15 grammes');}
					else if($('input[name="contenant"]:checked').val() == "verre"){$('#resultats').html('120 grammes');}
					else if($('input[name="contenant"]:checked').val() == "tac"){$('#resultats').html('90 grammes');}}
				else if($('input[name="ingredient"]:checked').val() == "miel"){
					if($('input[name="contenant"]:checked').val() == "cac") {$('#resultats').html('10 grammes');}
					else if($('input[name="contenant"]:checked').val() == "cas"){$('#resultats').html('30 grammes');}
					else if($('input[name="contenant"]:checked').val() == "verre"){$('#resultats').html('230 grammes');}
					else if($('input[name="contenant"]:checked').val() == "tac"){$('#resultats').html('180 grammes');}}
				else if($('input[name="ingredient"]:checked').val() == "cacao"){
					if($('input[name="contenant"]:checked').val() == "cac") {$('#resultats').html('2 grammes');}
					else if($('input[name="contenant"]:checked').val() == "cas"){$('#resultats').html('8 grammes');}
					else if($('input[name="contenant"]:checked').val() == "verre"){$('#resultats').html('90 grammes');}
					else if($('input[name="contenant"]:checked').val() == "tac"){$('#resultats').html('70 grammes');}}
				else if($('input[name="ingredient"]:checked').val() == "creme"){
					if($('input[name="contenant"]:checked').val() == "cac") {$('#resultats').html('5 grammes');}
					else if($('input[name="contenant"]:checked').val() == "cas"){$('#resultats').html('15 grammes');}
					else if($('input[name="contenant"]:checked').val() == "verre"){$('#resultats').html('150 grammes');}
					else if($('input[name="contenant"]:checked').val() == "tac"){$('#resultats').html('120 grammes');}}
				else if($('input[name="ingredient"]:checked').val() == "chapelure"){
					if($('input[name="contenant"]:checked').val() == "cac") {$('#resultats').html('1,5 grammes');}
					else if($('input[name="contenant"]:checked').val() == "cas"){$('#resultats').html('5 grammes');}
					else if($('input[name="contenant"]:checked').val() == "verre"){$('#resultats').html('40 grammes');}
					else if($('input[name="contenant"]:checked').val() == "tac"){$('#resultats').html('30 grammes');}}
			})
		})