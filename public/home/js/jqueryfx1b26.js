
var _loading = '<div id="preloader" class="jumping-dots-loader"><span></span><span></span><span></span></div>';

// defaut functions
// exchange timer
function kce_usertimer(curr_time,endDate,display){
	var countDownDate = endDate;
	var now = curr_time;
	var x = setInterval(function() {
	now = now + 1;
  	var distance = countDownDate - now;
  	var minutes = Math.floor((distance % (60 * 60)) / (60));
  	var seconds = Math.floor(distance % (60));
	document.getElementById(display).innerHTML = '<span class="badge badge-md badge-lighter" style="font-size:30px">Timer: '+minutes + 'm : ' + seconds + 's </span>';
  	if (countDownDate < now) {
    	clearInterval(x);
    	document.getElementById(display).innerHTML = '<span class="badge badge-md badge-danger">EXPIRED</span>';
    	setTimeout(function(){
            location.reload();
        },2000);

  	}
	}, 1000);
}
// format money
function formatMoney(n, c, d, t) {
  var c = isNaN(c = Math.abs(c)) ? 2 : c,
    d = d == undefined ? "." : d,
    t = t == undefined ? "," : t,
    s = n < 0 ? "-" : "",
    i = String(parseInt(n = Math.abs(Number(n) || 0).toFixed(c))),
    j = (j = i.length) > 3 ? j % 3 : 0;

  return s + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : "");
};


//blockchain payment tracking
function blockchain_websocket(data){
	var btcs = new WebSocket('wss://ws.blockchain.info/inv');
	
	btcs.onopen = function(){
		btcs.send(JSON.stringify({"op":"addr_sub", "addr":data.payto}));
	};
	btcs.onmessage = function(onmsg){
		var response = JSON.parse(onmsg.data);
		var getOuts = response.x.out;
		var countOuts = getOuts.length;

		for (i=0; i<countOuts; i++){
			var outAdd = response.x.out[i].addr;
			if (outAdd == data.payto) {
				var amount = response.x.out[i].value;
				var calAmount = amount / 100000000;
				if (calAmount == data.amt) {
					font_confirm_transaction(data.amt_usd,data.amt,data.key,data.ppd);
				}
			}
		}
	};
}
//blockchain payment track confirmation
function font_confirm_transaction(amount,btc_amt,key,ppd) {
	var data_url = "req/newInvest.php";
	$.ajax({
		type: "POST",
	    url: data_url,
	    data: {amount:amount, amtBtc:btc_amt, key:key, ppd:ppd},
	    dataType: "json",
		success: function (data) {
			if(data.status == "success") {
				swal("success","$"+amount+" has been credited to your investment. Please wait...","success");
				setTimeout(()=>{location.reload()},3000);
			} else {
				swal("error",'An error occured, please try again later',"error");
			}
		}
	});
}
function completed_payment(){
	// data can be passed as "startDate=timeCode&others=otherdata.... without space"
	// or data can also be passed as {startDate:timeCode, others:otherdata....}
	// format is like this $.post(url, data, callbackFunction);
	// $.post("req/newInvest2.php", {startDate:timeCode});
	$("#formDepositContainer").html(`
		<div>
			<h3 class="status-text large text-dark"><i class="mdi mdi-36px mdi-check-circle text-success"></i> Pending confirmation</h3>
			<p>We received your data, your wallet will be credited shortly.</p>
		</div>`);
	// remove timer
	// $('#kce-countDown').remove();
}

// convert image from base64 to blob
function b64toBlob(b64Data, contentType, sliceSize) {
    contentType = contentType || '';
    sliceSize = sliceSize || 512;

    var byteCharacters = atob(b64Data);
    var byteArrays = [];

    for (var offset = 0; offset < byteCharacters.length; offset += sliceSize) {
        var slice = byteCharacters.slice(offset, offset + sliceSize);

        var byteNumbers = new Array(slice.length);
        for (var i = 0; i < slice.length; i++) {
            byteNumbers[i] = slice.charCodeAt(i);
        }

        var byteArray = new Uint8Array(byteNumbers);

        byteArrays.push(byteArray);
    }

  var blob = new Blob(byteArrays, {type: contentType});
  return blob;
}


//register
$('#formRegister button').on('click', function(){
	$(this).hide();
    $(this).after(_loading);
	var data_url = "req/userRegister.php";
	$.ajax({
		type: "POST",
		url: data_url,
		data: $("#formRegister").serialize(),
		dataType: "json",
		success: function (data) {
			$('.alert').remove();
			setTimeout(function(){
				if (data.status=='success') {
					$('#formRegister').html(data.msg);
				} else {
					$("#formRegister").prepend(data.msg);				
		    		$('#formRegister button').show();
		    		$('#preloader').remove();
		    		swal(data.status,data.msg,data.status);
		    	}
	    	},1000)	
		}
	});
});


// Login
$("#formLogin button").on("click",function(){
	$(this).hide();
    $(this).after(_loading);
	var data_url = "req/userLogin.php";
	$.ajax({
		type: "POST",
		url: data_url,
		data: $("#formLogin").serialize(),
		dataType: "json",
		success: function (data) {
			$('.alert').remove();
			setTimeout(function(){
				$('#formLogin').prepend(data.msg);
				if (data.status=='success') {
					location.href = data.location;
				} else {				
		    		$('#formLogin button').show();
		    		$('#preloader').remove();
		    		swal(data.status,data.msg,data.status);
		    	}
	    	},1000)	
		}
	});
})

// withdraw
  $('form#formWithdraw button').on('click', function(){
    var amount = $('input[name="amt"]').val();
    if (amount=='') {
      swal('Error!!!','Please enter amount','warning');
    } else if (amount!='' && amount<50) {
      swal('error!!!', 'Minimum withdrawal amount is $100', 'warning');
    } else {
      swal({
      title: 'Enter Password',
        input: 'password',
      showCancelButton: true,
      confirmButtonColor: '#1d8c1d',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Proceed',
      showLoaderOnConfirm: true,
      inputPlaceholder: 'Enter account Password',
      inputAttributes: {
          autocapitalize: 'off',
          autocorrect: 'off'
        },
        
      preConfirm: function(pass) {
        return new Promise(function(resolve) {             
           $.ajax({
            url: 'req/userWithdraw.php',
            type: 'POST',
            data: $("#formWithdraw").serialize()+'&password='+pass,
            dataType: 'json'
           })
           .done(function(data){
            swal(data.status+'!!!', data.msg, data.status);
            if (data.status=="success") {
              document.querySelector('input[name="amt"]').value="";
              setTimeout(()=>{location.reload()},2000);
            }
           })
           .fail(function(){
            swal('Oops...', 'Something went wrong!', 'error');
           });
        });
        },
      allowOutsideClick: false        
    }); 
  }
});