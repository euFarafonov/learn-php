function Form(options){
    var form = document.getElementById(options.formId);
    
    form.addEventListener('click', function(event) {
        var target = event.target;
		
        if (target.classList.contains('js_btn')) {
            event.preventDefault();
            
			var nowDate = new Date();
			var Year = nowDate.getFullYear();
			var Month = nowDate.getMonth();
			var Day = nowDate.getDate();
			var Hour = nowDate.getHours();
			var Minutes = nowDate.getMinutes();
			var Seconds = nowDate.getSeconds();
			
			switch (Month)
			{
			  case 0: fMonth="january"; break;
			  case 1: fMonth="february"; break;
			  case 2: fMonth="march"; break;
			  case 3: fMonth="april"; break;
			  case 4: fMonth="may"; break;
			  case 5: fMonth="june"; break;
			  case 6: fMonth="july"; break;
			  case 7: fMonth="august"; break;
			  case 8: fMonth="september"; break;
			  case 9: fMonth="october"; break;
			  case 10: fMonth="november"; break;
			  case 11: fMonth="december"; break;
			}
			
			var fullDate = Day+' '+fMonth+' '+Year+' ('+Hour+':'+Minutes+':'+Seconds+')';
			
			document.cookie = "date="+fullDate;
			
			form.submit();
        }
    });
}