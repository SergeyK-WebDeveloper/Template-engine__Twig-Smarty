$(document).ready(function() {
	$("#menu").selectmenu({
		icons:{button:"ui-icon-circle-triangle-s"},
		width:500
	});
	
	
	
	if(is.is.firefox()) {
		//alert("hello");
	}
	
	
	
	var today = new Date();
	var yesterday = new Date(new Date().setDate(today.getDate()-1));
	
	
	if(is.any.today(today,yesterday)) {
			//alert("hello");
	}
	if(is.yesterday(yesterday)) {
			//alert("hello");
	}
	
	if(is.past(today)) {
			//alert("hello");
	}
	if(is.day(today,'thursday')) {
			//alert("hello");
	}
	if(is.month(today,'march')) {
			///alert("hello");
	}
	if(is.year(today,2015)) {
			//alert("hello");
	}
	
	var arr = new Array(1,2,3,4,5);
	
	if(is.inArray(50,arr)) {
			//alert("hello");
	}
	
	if(is.sorted(arr)) {
			//alert("hello");
	}
	
	var string = "127.0.0.1";
	
	if(is.url(string)) {
			///alert("hello");
	}
	if(is.email(string)) {
			//alert("hello");
	}
	if(is.timeString(string)) {
			//alert("hello");
	}
	if(is.ip(string)) {
			//alert("hello");
	}
	
	string = "Some text about cars";
	
	if(is.include(string,'about')) {
			//alert("hello");
	}
	if(is.upperCase(string)) {
			//alert("hello");
	}
	
	if(is.startWith(string, "me")) {
			//alert("hello");
	}
	
	if(is.endWith(string, "cars")) {
			//alert("hello");
	}
	
	
	var numb = 51;
	
	
	if(is.equal(numb,50)) {
			//alert("hello");
	}
	if(is.not.even(numb)) {
			//alert("hello");
	}
	if(is.odd(numb)) {
			//alert("hello");
	}
	
	if(is.negative(numb)) {
			//alert("hello");
	}
	
	if(is.above(numb,52)) {
			//alert("hello");
	}
	
	if(is.under(numb,52)) {
			//alert("hello");
	}
	
	if(is.within(numb,40,55)) {
			//alert("hello");
	}
	
	if(is.decimal(numb)) {
			//alert("hello");
	}
	
	if(is.integer(numb)) {
			//alert("hello");
	}
	
	
	if(is.array(arr)) {
			//alert("hello");
	}
	
	var d = new Date();
	if(is.date(d)) {
			//alert("hello");
	}
	
	
	var json = "dfgdfg";
	
	if(is.json(json)) {
			alert("hello");
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	

});