$.get("/php/pageviews.php?_=7",function(data)
{
	$("#GetCount").html(data);
});