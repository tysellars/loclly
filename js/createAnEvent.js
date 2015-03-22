function createEvent(){
	var eventName = getElementById("name").value;
	var eventAddress = getElementById("location").value;
	var eventDate = getElementById("date");
	var eventPrice = getElementById("price").value;
	var description = getElementById("message").value;
	var hashTags = getElementById("hashTags").value;
	var tags = hashTags.split(" ");
	alert("Your Event has been created!");
}