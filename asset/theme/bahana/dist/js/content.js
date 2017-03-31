
//Change Car 
$(document).on('change','.changecar',function(){	
	var idcar=$(this).val();
	$.ajax({
            url: "changecar",
            dataType: "JSON",
            type: "POST",
            data: { id: idcar },
            success: function (data) {
					$('.onchangecar').val(data.file);
			}
	  });
});


//buying  
$(document).on('blur','.buying',function(){

	this.value = parseFloat(this.value.replace(/,/g, ""))
	.toFixed(2)
	.toString()
	.replace(/\B(?=(\d{3})+(?!\d))/g, ".");
	

});

//selling  
$(document).on('blur','.selling',function(){	
	this.value = parseFloat(this.value.replace(/,/g, ""))
	.toFixed(2)
	.toString()
	.replace(/\B(?=(\d{3})+(?!\d))/g, ".");
	var valuenya=this.value;

	$('.totalselling').val(valuenya);

});


//Change SO 
$(document).on('click','.pilihso',function(){	
	var pilihso=$(this).val();

	if(pilihso=='NewSO'){
	
	

	$('.OrderOldnya').hide();
	$.ajax({
			url: "pilihso",
			dataType: "JSON",
			type: "POST",
			data: { id: pilihso },
			success: function (data) {
					$('.salesorder').html(data.file);
					$('.NoFA').html(data.NoFA);
			}
	  });
	}else{
	   $('.salesorder').html('');
	   $('.OrderOldnya').show();
	   
	}
});

//validation
$(".ok-btn-add-app").click(function () {
	console.log('app');
	$( ".Formapprove" ).trigger( "submit" );

});


$(".ok-btn-add-fa").click(function () {
	console.log('ss');
	$( ".FormProfile" ).trigger( "submit" );

});



//Change No Faktur SJ 
$(document).on('change','.NofakturSj',function(){	
	console.log('ss');
	var Nofaktur=$(this).val();
	$.ajax({
			url: "GetDataFaktur",
			dataType: "JSON",
			type: "POST",
			data: { id: Nofaktur },
			success: function (data) {
					$('.Client').val(data.DataClient);
					$('.Mobil').val(data.DataMobil);
					$('.Hari').val(data.Hari);
					
			}
	  });
	
});


//Change Time Mulai 
$(document).on('change','.timeakhir',function(){	

			var valuestart = new Date("01/01/2007 "+$('.timemulai').val()+':00');
			var valuestop =  new Date("01/01/2007 "+$('.timeakhir').val()+':00');
			seconds = Math.floor((valuestop - (valuestart))/1000);
        	minutes = Math.floor(seconds/60);
        	hours = Math.floor(minutes/60);
        	days = Math.floor(hours/24);
        	hours = hours-(days*24);
	        minutes = minutes-(days*24*60)-(hours*60);
	     	//create date format          
			/*var timeStart = new Date("01/01/2007 " + valuestart).getHours();
			var timeEnd = new Date("01/01/2007 " + valuestop).getHours();

			var minuteStart = new Date("01/01/2007 " + valuestart).getMinutes();
			var minutetimeEnd = new Date("01/01/2007 " + valuestop).getMinutes();

			var hourDiff = timeEnd - timeStart;   
			var minuteDiff=minutetimeEnd-minuteStart;*/
			//console.log(timeEnd);

			$('.timetotal').val(hours+':'+minutes);

	  });
